<?php
session_start();
require_once('connection.php');
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    echo 'welcome '.$username;
    $re=$pdo->prepare("SELECT*FROM user WHERE username='$username'");
    $re->execute();
    $re =$re->fetchObject();
    echo'<pre>';
    echo "Hello Mr: ".$re->fname." ".$re->lname;
    echo'</pre>';
    echo '<a href=\'logout.php\'>logout</a>';
    /*
    */
}else{
    include("index.php");
}


?>