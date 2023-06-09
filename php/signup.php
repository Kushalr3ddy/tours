<?php
if(isset($_POST['fname']) && 
    isset($_POST['uname']) && 
    isset($_POST['pass']))
    {
    include "../db_connect.php";
    $fname=$_POST['fname']; 
    $uname=$_POST['uname']; 
    $pass=$_POST['pass'];
    
    $data="fname=".$fname."&uname=".$uname;

    if(empty($fname)){
        $em = "Fullname is required";
        header("Location: ../register.php?error=$em&$data");
        exit;
    }else if(empty($uname)){
        $em = "username is required";
        header("Location: ../register.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "password is required";
        header("Location: ../register.php?error=$em&$data");
        exit;
    }else{

        //for hashing password

        $pass = password_hash($pass,PASSWORD_DEFAULT);
        $sql ="INSERT INTO users(fname,username,password)
                VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname,$uname,$pass]);
        
        header("Location: ../register.php?success=your account has been created successfully");
        exit;

    }
}
else{
    header("Location: ../register.php?error=error");
    exit;
}
