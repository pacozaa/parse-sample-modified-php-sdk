<?php
require 'vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;


ParseClient::initialize('xYOU0s1n0MTNc8KDUO0EN7KHAbTvdzuQv57mxbp3', 'q8emyeEQeBZpnQ3EAQzvCM8aqswTcWFGegcdSsYA', 'GuFTG06Gxuwi2ZYbYdCDn6ztND9mAnFSGJf1GYNp');

 
$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "a");
$testObject->save();

echo "string";

?>