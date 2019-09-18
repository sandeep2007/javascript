<?php 
//echo '<pre>';
//print_r($_POST);
//print_r($_FILES);
parse_str(file_get_contents("php://input"),$request);
print_r($request);
?>