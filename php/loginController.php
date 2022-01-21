<?php
include("../DAL/connexionBD.php");
session_start();
$_SESSION["idUser"]=null;
$_SESSION["userName"]=null;
if(isset($_POST["login"]) && isset($_POST["password"])){
    $login=$_POST["login"];
    $password=$_POST["password"];
    $_SESSION["login"]=$_POST["login"];
    $_SESSION["password"]=$_POST["password"];
    $sql="SELECT idUser,userName FROM users where userName='$login' and userPassword=md5('$password')";
    $res=$bd ->query($sql);
    while($row=$res->fetch()){
        $_SESSION["idUser"]=$row[0];
        $_SESSION["userName"]=$row[1];
    }
    if($_SESSION["idUser"] != null){
    header("Location:choosePartEdition.php");
    }else{
        $_SESSION["tentative"]=false;
         header("Location:../index.php");  
    }
}
else{
    $_SESSION["connected"]=false;
    header("Location:../index.php");
}
?>