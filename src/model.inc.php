<?php

abstract class AbstractTag
{
	protected $data = array(); // array stack for the position data attributes
	protected $attr = array(); // array stack for additional attributes

	public function setAttribute($name, $value)
	{
		if ( !array_key_exists($name, $this->attr) ) {
			// if attribute does not exist, create ...
			$this->attr[$name] = $value;
		} else {
			// otherwise append to other parameter
			$this->attr[$name] = $value . " " . $this->attr[$name];
		}
	}

	public function setData($name, $value)
	{
		if ( !array_key_exists($name, $this->data) ) {
			$this->data[$name] = $value;
		}
	}

	protected static function getDataType($data)
	{
		// analyse data value
		if ( substr($data, -1) == "%" ) {
			return "percentual";
		} else if ( is_numeric($data) ) {
			return "numeric";
		} else {
			return "other";
		}
	}

	protected static function getOffset($duration, $offset)
	{
		switch ( static::getDataType($offset) ) {
			case "percentual":
				$ratio = floatval(substr($offset,0,-1)) / 100;
				return intval(round($duration * $ratio, 0, PHP_ROUND_HALF_UP));
			case "numeric":
				return intval($offset);
			default:
				return $offset;
		}
	}

	protected function renderAttributes()
	{
		$html = ""; foreach( $this->attr as $name => $value ) {
			$html .= $name . "=\"" . $value . "\" "; }
		return rtrim($html);
	}

	protected function renderData()
	{
		$html = ""; foreach( $this->data as $name => $value ) {
			$html .= "data-" . $name . "=\"" . $value ."\" "; }
		return rtrim($html);
	}

	abstract protected function render();
}

class Scene extends AbstractTag
{
	protected $name;
	protected $type;
	protected $position;
	protected $duration;
	protected $description;
	protected $start;
	protected $last;

	public function __construct($start, $data) {
		$this->start = $start;
		$this->name = (!empty($data['name']) ? $data['name'] : '');
		$this->type = (!empty($data['type']) ? $data['type'] : '');
		$this->last = ( (isset($data['last'])) ? $data['last'] : false );
		$this->description = (!empty($data['description']) ? $data['description'] : '');
		$this->position = ( (isset($data['position'])) && (is_numeric($data['position']) ) ? (int)$data['position'] : 0);
		$this->duration = ( (isset($data['duration'])) && (is_numeric($data['duration']) ) ? (int)$data['duration'] : 0);
	}

	public function castAsBackground()
	{
		return new Background($this->start, array(
			'name' => $this->name,
			'type' => $this->type,
			'description' => $this->description,
			'position' => $this->position,
			'duration' => $this->duration,
			'last' => $this->last,
		));
	}

	public function isLast($flag) { $this->last = $flag; }
	public function setData($name, $value)
	{
		// recalculate new absolute position
		$offset = static::getOffset($this->duration, $name);
		parent::setData(((is_numeric($offset)) ? ($this->start + $offset) : $offset), $value);

	}

	// getter methods
	public function getName() { return $this->name; }
	public function getType() { return $this->type; }
	public function getPosition() { return $this->position; }
	public function getDuration() { return $this->duration; }
	public function getDescription() { return $this->description; }
	public function getSceneStart() { return $this->start; }

	public function render()
	{
		// prepare class attributes for output render
		$this->setAttribute("class", (($this->last) ? "scene last" : "scene"));
		return $this->debug() . "<div id=\"content-" . $this->name . "\" " . $this->renderAttributes() . " " . $this->renderData() . ">\n";
	}

	protected function debug()
	{
		if ( DEBUG_MODE ) {
			return "<!-- DEBUG " . get_class($this) . " " .
			       "[" . $this->name . ":" . $this->description . "] ".
			       " start:[" . $this->start .
			       "] duration:[" . $this->duration .
			       "] -->";
		} else { return ""; }
	}
}

class Hotspot extends AbstractTag
{
	private $scene = null;
	private $positions = array();

	public function __construct($positions)
	{
		if ( is_array($positions) ) {
			foreach( $positions as $key => $value ) {
				$this->positions[$key] = $value;
			}
		}
	}

	public function __clone()
	{

	}

	public function setScene($scene) { $this->scene = $scene; }
	public function setData($name, $value)
	{
		if ( $this->scene instanceof Scene ) {
			// try to fetch procentual offset value for hotspot from db
			$position = ( array_key_exists($name, $this->positions) ) ?
				$this->positions[$name] : $name;
			// and recalculate new absolute position
			$offset = static::getOffset($this->scene->getDuration(), $position);
			parent::setData(((is_numeric($offset)) ? ($this->scene->getSceneStart() + $offset) : $offset), $value);
		}
	}

	public function render()
	{
		// prepare class attributes for output render
		$this->setAttribute("class", "hotspot");
		return $this->debug() . "<div " . $this->renderAttributes() . " " . $this->renderData() . ">\n";
	}

	private function debug()
	{
		if ( DEBUG_MODE ) {
			return "<!-- DEBUG " . get_class($this) . " " .
			       "reference:[" . (($this->scene instanceof Scene) ? $this->scene->getName() : "undefined") . "] ".
			       "-->";
		} else { return ""; }
	}
}

class Background extends Scene
{
	public function __construct($start, $data)
	{
		parent::__construct($start, $data);
	}

	public function render()
	{
		// prepare class attributes for output render
		$this->setAttribute("class", (($this->last) ? "scene scene-last" : "scene"));
		return $this->debug() . "<div id=\"bg-" . $this->name . "\" " . $this->renderAttributes() . " " . $this->renderData() . ">\n";
	}
}

class Position extends AbstractTag
{
	private $scene;
	private $offset;

	public function __construct($scene, $offset = 0)
	{
		if ( $scene instanceof Scene ) {
			$this->scene = $scene;
		} else { $this->scene = new Scene(0,array()); }
		$this->offset = $offset;
	}

	private function calculate()
	{
		// recalculate current position
		$offset = static::getOffset($this->scene->getDuration(), $this->offset);
		return ((is_numeric($offset)) ? ($this->scene->getSceneStart() + $offset) : $offset);
	}

	public function render()
	{
		return strval($this->calculate());
	}
}

class Tour
{
	protected static $instance = null; // static class instance

	private $duration = 0; // total duration length of tour in pixel

	private $index = array();
	private $scenes = array();

	private $current = ""; // reference name of current scene

	private $hotspots = array();

	protected function __construct()
	{
		global $_GLOBALS;

		// set db table prefix
		list($prefix, $ext) = explode('.', basename($_SERVER['SCRIPT_FILENAME']));

		// build scene array from db
		$scenes = _DB("SELECT `pid`, `name`, `type`, `position`, `duration`, `description` FROM `" . $prefix . "_scene` ORDER BY `position` ASC", $_GLOBALS['DB']['db1']);
		foreach ( $scenes as $index => $row ) {
			$scene = new Scene($this->duration, $row);
			// calculate next scene position
			$this->duration += (is_numeric($row['duration']) ? (int)$row['duration'] : 0);
			// check for last scene
			$scene->isLast(($index+1) < (count($scenes)) ? false: true);
			// store scene in class stack
			$this->scenes[$row['pid']] = $scene;
			array_push($this->index, array(
				'id' => $row['pid'],
				'name' => $row['name'],
			));
		}

		// build hotspot array from db
		$hotspots = _DB("SELECT `type`, `pos1`, `pos2`, `pos3`, `pos4` FROM `" . $prefix . "_hotspot`", $_GLOBALS['DB']['db1']);
		foreach ( $hotspots as $row ) {
			$hotspot = new Hotspot(array(
				'pos1' => $row['pos1'],
				'pos2' => $row['pos2'],
				'pos3' => $row['pos3'],
				'pos4' => $row['pos4'],
			)); $this->hotspots[$row['type']] = $hotspot;
		}
		
	}
	protected function __clone()
	{

	}
	public static function getInstance()
	{
		if (!isset(static::$instance)) {
			static::$instance = new static;
		}
		return static::$instance;
	}

	private function getScene($reference, $key)
	{
		for ( $i = 0; $i < count($this->index); $i++ ) {
			if ( (isset($this->index[$i][$reference])) && ($this->index[$i][$reference] == $key) ) {
				return $this->scenes[$this->index[$i]['id']];
			}
		}
		$trace = debug_backtrace();
		trigger_error(
			'Could not find scene [' . $key . '] by ['  . $reference . ']' .
			' on line ' . $trace[0]['line'] . 
			' in ' . $trace[0]['file'],
			E_USER_NOTICE
		); return new Scene(0, array());
	}

	public function getSceneByID($id) { return $this->getScene('id', $id); }
	public function getSceneByName($name) { return $this->getScene('name', $name); }
	public function getBackgroundByID($id) { return $this->getScene('id', $id)->castAsBackground(); }
	public function getBackgroundByName($name) { return $this->getScene('name', $name)->castAsBackground(); }
	public function setCurrentSceneName($name) { $this->current = $name; }
	public function getCurrentScene() { return $this->getSceneByName($this->current); }
	public function getCurrentSceneType() { return $this->getCurrentScene()->getType(); }
	public function getCurrentBackground() { return $this->getCurrentScene()->castAsBackground(); }

	public function getHotspot($type)
	{
		if ( array_key_exists($type, $this->hotspots) ) {
			return clone $this->hotspots[$type];
		}
		$trace = debug_backtrace();
		trigger_error(
			'Hotspot for type [' . $type . '] does not exist' .
			' on line ' . $trace[0]['line'] .
			' in ' . $trace[0]['file'],
			E_USER_NOTICE
		); return new Hotspot(array());
	}
}