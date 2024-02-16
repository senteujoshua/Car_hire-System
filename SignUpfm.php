<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $Username =htmlspecialchars($_POST["Username"]);
    $Email =htmlspecialchars($_POST["email"]);
    $password =htmlspecialchars($_POST["password"]);

    if(empty($Username)){
        exit();
        header("Location: ../animationlogin.php");
    }
    elseif(empty($Email)){
        exit();
        header("Location: ../animationlogin.php");
    }
    elseif(empty($password)){
        exit();
        header("Location: ../animationlogin.php");
    }else{}
    $dsn="mysql:host=localhost;dbname=websiteUser";
    $dbUsername ="root";
    $dbPassword="Senteu8280";
    try{
        $pdo =new PDO($dsn,$dbUsername,$dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO USERS(username,email,password) values(?,?,?);";
        $preState =$pdo->prepare($sql);
        $preState->execute([$Username,$Email,$password]);
        $pdo=null;
        $preState =null;


    }catch(PDOException $e){
        echo"Connection failed: ". $e->getMessage();
    }

}
else{
    header("Location: ../animationlogin.php");
}