<?php
include 'simple_html_dom.php';


$html=file_get_html("http://event.sanook.com/health/calories/");
$ret=$html->find('table');

//$myfile2=fopen("text.txt","r") or die("Unable to open file!");


?>
