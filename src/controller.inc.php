<?php

// check for any language parameter settings (default lang 'de')
$acceptLang = array('de','fr','it','en');
$lang = ( (isset($_GET['lang'])) && (in_array($_GET['lang'], $acceptLang)) ) ? $_GET['lang'] : 'de';

function _lang($key)
{
	global $_GLOBALS, $lang;

	return $key . ' [' . $lang . ']';
}

function _tag($tag, $params)
{
	global $_GLOBALS;

	// get reference of tour object
	$tour = Tour::getInstance();

	// switch our custom tag ...
	switch ( $tag )
	{

		case 'scene': // ... and declare new scene tag

			if ( isset($params['name']) ) {
				$tag = $tour->getSceneByName($params['name']);
				$tour->setCurrentSceneName($params['name']);
				unset($params['name']);
			} else { $tag = new Scene(0,array()); }

			break;

		case 'hotspot': // ... and declare new hotspot tag

			$tag = $tour->getHotspot($tour->getCurrentSceneType());
			$tag->setScene($tour->getCurrentScene());

			break;

		case 'background': // ... and declare new background tag

			if ( isset($params['name']) ) {
				$tag = $tour->getBackgroundByName($params['name']);
				$tour->setCurrentSceneName($params['name']);
				unset($params['name']);
			} else { $tag = new Background(0,array()); }

			break;

		case 'position': // ... and declare new position tag

			// retrieve referenced scene (current or explicitly set)
			$scene = (isset($params['id'])) ?
				$tour->getSceneByName($params['id']) :
				$tour->getCurrentScene();
			$offset = (isset($params['offset'])) ?
				$params['offset'] : 0;
			$tag = new Position($scene, $offset);

			break;

	}

	if ( $tag instanceof AbstractTag ) {

		// loop through rest of params
		foreach ( $params as $key => $value ) {
			// ... and query for data attributes to be used in skrollr plugin
			if ( ($key == "data") && (is_array($value)) ) {
				foreach ( $value as $pos => $val )
					$tag->setData($pos, $val);
			} else { // ... or add any other attributes to the stack
				$tag->setAttribute($key, $value);
			}
		}

		// render output tag
		return $tag->render();

	} else { return ""; }
}

function _base()
{
	return "\n<base href=\"http://applications.eyekon.ch/mys_touring/demo/131220/\" />\n";
}