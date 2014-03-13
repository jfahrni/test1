<?php
// check if to force to download html page
if ( (isset($_GET['save'])) && ($_GET['save'] == "true") ) {

	// prepare filename for download
	list($filename, $ext) = explode('.', basename($_SERVER['SCRIPT_FILENAME']));

	// Output headers
	header("Cache-Control: private");
	header("Content-Type: text/html");
	header("Content-Length: " . ob_get_length());
	header("Content-Disposition: attachement; filename=" . $filename . ".html");

	// flush contents to download stream
	ob_get_contents();

} else {
	// output common page
	ob_end_flush();
}