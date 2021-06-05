<?php
session_start();
require_once('connection.php');
function check($u,$p){
    global $pdo;
    try{
        $re = $pdo->prepare("SELECT* FROM `user` WHERE username=:u AND password=:p");
        $re->bindValue(':u',$u);
        $re->bindValue(':p',$p);
        $re->execute();
        if($re->rowCount()>0){
            return true;
        }else{
            return false;
    }
    }catch(PDOException $e){
        $e->getMessage();
    }
}
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
 if(empty($_POST['username']&&$_POST['password'])){
    echo "pls complete fields";
    include("index.php");
 }else{
     if(check($username,$password)==1){
        $_SESSION['username']=$username;
        header('Location:profile.php');
    }else{
        echo "error";
        include("index.php");
    }
 }
}

?>