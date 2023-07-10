<?php
session_start();
include("connection.php");
if(isset($_POST['login'])){
$email = $_POST['email'];
$pass= $_POST['pass'];

$query = $pdo->prepare(("select * from users where email = :email && password = :pass"));
$query->bindParam('email',$email);
$query->bindParam('pass',$pass);

$query->execute();
$res = $query->fetch(PDO::FETCH_ASSOC);
if($res){
    $_SESSION['u_email'] = $res['email'];
    echo  "<script>
    alert('login successfully');
    location.assign('index.php'); 
    </script>";
}






}






?>