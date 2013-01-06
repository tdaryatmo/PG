<?php
require_once("data.php");

//$ArrayURL = split('/', $_SERVER[REQUEST_URI])); ## add '' in between REQUEST_URI 
$ArrayURL = explode('/', $_SERVER['REQUEST_URI']); ## replace "split" with "explode" the newer version of PHP and MYSQL accept "explode" instead of "split"
//$id = $ArrayURL[1];
$id = end($ArrayURL); ## end(ARRAY) to get array value at end of the array :(id)

//$data = new dataObj(); /* incorrect class name */
$data = new baseObj();

//if (is_object($data) = true) $status = '200 OK'; ## if (is_object($data)) should be enough since is_object($data) will return true or false
if (is_object($data)) $status = '200 OK';  
//$status_header = 'HTTP/1.1 $status'; ## it gives result "HTTP/1.1 $status", so change it to "
$status_header = "HTTP/1.1 $status";

header($status_header);
//return json_encode( $data->getAll($id, $table) ); ## no need to return, it's not function, add $table parameter
$table = "Property"; /* assuming getAll data from table Property */ 
echo json_encode( $data->getAll($id, $table) );

?>
