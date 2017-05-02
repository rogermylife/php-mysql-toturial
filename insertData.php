<?php

require_once('connect.php');
require_once('tool/tool.php');

$types = array("pwn","crpto","web","misc");

$sql =  "INSERT INTO ctfquestions VALUES(NULL,:title,:des,:score,:type)";
$statement = $pdo->prepare($sql);

$statement->bindParam(':title',$title);
$statement->bindParam(':des',$des);
$statement->bindParam(':score',$score,PDO::PARAM_INT);
$statement->bindParam(':type',$type);

$title = randomString(30);
$des = randomString(90);
$score = rand()%990 + 10;
$type = $types[rand()%4];


var_dump( $statement->execute());


