<?php
include('rest.inc.php');


// GET
echo "<p style='color:white;padding:10px;background-color:black;'>get array post of perticular id </p>";
$URL='https://jsonplaceholder.typicode.com/posts';
$result = RestCurl::get($URL, array('id' => 1));
echo "<pre>";
print_r($result);
echo "</pre>";


// POST
$result = RestCurl::post($URL, array('name' => 'John'));

// PUT
echo "<p style='color:white;padding:10px;background-color:black;'>put post of perticular id </p>";
$url='https://jsonplaceholder.typicode.com/posts/1';
$result_1 = RestCurl::put($url, array('$set' => array('userId'=>'1','id'=>'1','title'=>'new title','body'=>'new body')));
echo "<pre>";
print_r($result_1);
echo "</pre>";

// DELETE
$result = RestCurl::delete($URL); 