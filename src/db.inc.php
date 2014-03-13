<?php
/**
 * Set up database connections
 */
$_GLOBALS['DB'] = array();

/**
 * connect to database 1
 */
define ('DB_TOURING_HOST', 'localhost');
define ('DB_TOURING_USER', 'st_touring');
define ('DB_TOURING_PASS', 'ySpvvMh9CVnyfFT4');
define ('DB_TOURING_DB', 'st_touring');

/**
 * Global function to open a connection to a database resource and
 * returns the link to the caller.
 *
 * @param $host, string,
 * @param $user, string,
 * @param $pass, string,
 * @param $db, string,
 * @return resource
 */
function _connect($host, $user, $pass, $db) {
	// open connection
	$link = mysql_connect($host, $user, $pass);
	if (!$link) { die ('Keine Verbindung : ' . mysql_error()); }
	// select database to use
	$select = mysql_select_db($db, $link);
	if (!$select) { die ('DB nicht verfuegbar : ' . mysql_error()); }
	// set charset collation to utf-8
	mysql_set_charset('utf8', $link);
	// and return resource
	return $link;
}

/**
 * Global function to query the database. Returns an associative array
 * containing the resultset.
 *
 * @param $query, the query string,
 * @param $db, the database resource,
 * @return associative array
 */
function _DB($query, $db) {
	if ( strpos( (is_resource($db) ? get_resource_type($db) : gettype($db)), 'mysql' ) === false ) {
		die ('Invalid resource type : ' . gettype($db));
	} else {
		$result = mysql_query($query);
		if (!$result) {
			die ('Invalid query : ' . mysql_error());
		}
		$resultset = array();
		while ($row = mysql_fetch_assoc($result)) {
			array_push($resultset, $row);
		}
		return $resultset;
	}
}

// open connections
$_GLOBALS['DB']['db1'] = _connect(DB_TOURING_HOST, DB_TOURING_USER, DB_TOURING_PASS, DB_TOURING_DB);