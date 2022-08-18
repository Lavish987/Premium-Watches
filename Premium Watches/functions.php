<?php

require_once('db.php');

if(isset($_POST['login'])){
    
    $uname = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    if ($uname != "" && $password != ""){
        
                
            $sql_query = "select * from users where email = '$uname' and apache='$password'";
            $result = mysqli_query($db,$sql_query);
            $row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result) > 0){
                $_SESSION['user'] = $uname;
                $_SESSION['S_ID'] = $row['id'];
                $u = $row['name'];
                echo "<script>alert('Welcome $u!');location.href='index.php';</script>";
            }else{
                echo "<script>alert('Invalid Login!');location.href='Login.php';</script>";
            }
        
        }

}


if(isset($_POST['submit'])){
    
    $name = $_POST['fname']." ".$_POST['lname'];
    
            $sql_query = "INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `otp`, `apache`, `status`, `wallet`, `profile`, `city`, `address`, `appId`, `code`) 
            VALUES (NULL, '$name', '$_POST[mob]', '$_POST[email]', '0', '$_POST[password]', '', '$_POST[dob]', '$_POST[gender]', NULL, '', '', '');";
            $insert = mysqli_query($db,$sql_query);
            if($insert){
                $_SESSION['S_ID'] = $row['id'];
                echo "<script>alert('Registered Successfully!');location.href='index.php';</script>";
            }else{
                echo "<script>alert('Problem in Creating Account!');location.href='Register.php';</script>";
            }
        

}




if(isset($_POST['contact'])){
    
            $sql_query = "INSERT INTO `contact_box` (`id`, `name`, `email`, `mobile`, `msg`) VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[mob]', '$_POST[msg]');";
            $insert = mysqli_query($db,$sql_query);
            if($insert){
                echo "<script>alert('Contact Details Submit Successfully!');location.href='index.php';</script>";
            }else{
                echo "<script>alert('Problem in Creating Account!');location.href='ContactUs.php';</script>";
            }
        

}






?>


