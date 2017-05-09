<?php

require_once ('connect.php');
require_once ('tool/tool.php');
$id = rand()%10000;
echo "select one data $id\n";
echo "--------------------\n";
$sql="SELECT * FROM ctfquestions WHERE id=?";
$stm = $pdo->prepare($sql);
$stm->execute(array($id));
$result = $stm->fetch(PDO::FETCH_ASSOC);
var_dump($result);

echo "updata one data $id\n";
echo "-----------------------\n";
$sql ="UPDATE ctfquestions SET title=? where id = ?";
$stm = $pdo->prepare($sql);
$res = $stm->execute(array(randomString(30),$id));
if($res===true)
    echo "update success\n";

echo "check date $id\n";
echo "--------------------\n";
$sql="SELECT * FROM ctfquestions WHERE id=?";
$stm = $pdo->prepare($sql);
$stm->execute(array($id));
$result = $stm->fetch(PDO::FETCH_ASSOC);
var_dump($result);




