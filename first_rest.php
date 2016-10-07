<?php

//get array of all posts

$response = file_get_contents('https://jsonplaceholder.typicode.com/posts');

$response = json_decode($response);

echo "<pre>";

echo "<p style='color:white;padding:10px;background-color:black;'>get array of all posts</p>";

print_r($response);


//get array of specific id

$response = file_get_contents('https://jsonplaceholder.typicode.com/posts/1');

$response = json_decode($response);

echo "<pre>";

echo "<p style='color:white;padding:10px;background-color:black;'>get array of by specific id</p>";

print_r($response);


//get array of all Comments

$response = file_get_contents('https://jsonplaceholder.typicode.com/comments');

$response = json_decode($response);

echo "<pre>";

echo "<p style='color:white;padding:10px;background-color:black;'>get array of all Comments</p>";

print_r($response);


//get array of Comment by postid

$response = file_get_contents('https://jsonplaceholder.typicode.com/comments?postId=1');

$response = json_decode($response);

echo "<pre>";

echo "<p style='color:white;padding:10px;background-color:black;'>get array of Comment by postid</p>";

print_r($response);


//get array of all Albums

$response = file_get_contents('https://jsonplaceholder.typicode.com/albums');

$response = json_decode($response);

echo "<pre>";

echo "<p style='color:white;padding:10px;background-color:black;'>get array of all albums</p>";

print_r($response);




//using curl updating


$data = array('userId'=>'1','id'=>'1','title'=>'new title','body'=>'new body');
$data_json = json_encode($data);
$url='https://jsonplaceholder.typicode.com/posts/1';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
echo "<pre>";

echo "<p style='color:white;padding:10px;background-color:black;'>using curl updating</p>";
print_r($response);
curl_close($ch);












?>