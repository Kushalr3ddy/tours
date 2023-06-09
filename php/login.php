<?php
session_start();
if(isset($_POST['uname']) && 
    isset($_POST['pass']))
    {
    include "../db_connect.php";
    
    $uname=$_POST['uname']; 
    $pass=$_POST['pass'];
    
    $data="&uname=".$uname;

    
    if(empty($uname)){
        $em = "username is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    }else{


        $sql ="SELECT * FROM users WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);
        
        if($stmt->rowCount()==1){

            $user =$stmt->fetch();

            $username =$user['username'];
            $password =$user['password'];
            $fname =$user['fname'];
            $id =$user['id'];

            if($username ===$uname){
                if(password_verify($pass,$password)){
                    //echo "login successful";
                    $_SESSION['id'] = "$id";
                    $_SESSION['fname'] = "$fname";
                    header("Location: ../home.php?error=$em&$data");
                    exit;

                }else{
                    $em = "Incorrect Username or Password";
                    header("Location: ../login.php?error=$em&$data");
                    exit;
                }


            }else{
                $em = "Incorrect Username or Password";
                header("Location: ../login.php?error=$em&$data");
                exit;
            }

        }else{
            $em = "Incorrect Username or Password";
            header("Location: ../login.php?error=$em&$data");
            exit;
        }

        header("Location: ../login.php?success=your account has been created successfully");
        exit;

    }
}
else{
    header("Location: ../login.php?error=error");
    exit;
}
