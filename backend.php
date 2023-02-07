<html>
    <head>
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'>
    </script>
    <style>
        body
        {
            background-color: #eee;
        }
    </style>
    </head>
</html>
<?php
 error_reporting(0);
include 'conn.php';

//logout button action
if($_GET['logout']==1)
{
    
    unset($_SESSION['is_login']);
    header('location:login.php');
    die();
    
}
//login data validation
if(isset($_POST['login']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];

    if(isset($_SESSION['is_login']))
    {
        header('location:reg.php');
    }
    

    $res=mysqli_query($con,"SELECT * FROM `signup` WHERE name='$name'");

    if (mysqli_num_rows ($res) >0) 
    {
        $row=mysqli_fetch_assoc($res);
        $verify=password_verify ($pass, $row['password']);
        if ($verify==1) 
        {
            $_SESSION['is_login']=true;
            $_SESSION['name']=$row['name'];
            header('location:reg.php');
            die();
        }
        else
        {
            echo "<script>
                
            swal({
            title: 'Oops!',
            text: 'Please enter correct password',
            type: 'ERROR'
            }).then(function() {
                window.location = 'login.php';
            });
            
            </script>";
        }
    }
    else
    {
        echo "<script>
                
            swal({
            title: 'Oops!',
            text: 'Please enter correct Username',
            type: 'ERROR'
            }).then(function() {
                window.location = 'login.php';
            });
            
            </script>";
    }
}
//signup data insertion to databaseelse 
if(isset($_POST['signup']))
{

    if(isset($_SESSION['is_login']))
    {
        header('location:reg.php');
        die();
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $rpass=$_POST['rpass'];

    
    if($pass==$rpass)
    {

            if(mysqli_num_rows(mysqli_query($con,"SELECT * FROM `signup` WHERE email='$email'"))>0)
            {
                
                echo"<script>
                    
                    swal({
                    title: 'Oops!',
                    text: 'User Already exists in our database.',
                    type: 'ERROR'
                    }).then(function() 
                    {
                        window.location = 'signup.php';
                    });
                    
                    </script>";
                    header('location:signup.php');
            }
            else
            {
                $password=password_hash($pass,PASSWORD_DEFAULT);
                date_default_timezone_set("Asia/Calcutta");
                $date=date('y/m/d');
                $result=mysqli_query($con,"INSERT INTO `signup`(`name`, `email`, `password`, `date`) 
                                    VALUES ('$name','$email','$password','$date')");
                if($result)
                {
                    echo"<script>
                        
                        swal({
                        title: 'Thank You!',
                        text: 'Thank you fro joining Inforam.',
                        type: 'SUCCESS'
                        }).then(function() {
                            window.location = 'signup.php';
                        });
                        
                        </script>";
                        header('location:login.php');
                }
            }
    }
    else
    {
        echo"<script>
                        
                        swal({
                        title: 'Thank You!',
                        text: 'Thank you fro joining Inforam.',
                        type: 'SUCCESS'
                        }).then(function() {
                            window.location = 'sign.php';
                        });
                        
                        </script>";
                        header('location:signup.php');
    }
}

// if($_GET['a']==12)
// echo"done reset pass";
?>