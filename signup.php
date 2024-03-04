<?php
 $err = $_FILES["image"]["error"];
 if ($err == 0) {
     $tmpn = $_FILES["image"]["tmp_name"];
     $fn = $_FILES["image"]["name"];
     move_uploaded_file($tmpn, "images/$fn");
     $profile_image = "images/$fn";
 } elseif ($err == 4) {
     $msg = "Please Choose File";
     $profile_image = ""; 
 } else {
     $msg = "Error while uploading, try again";
     $profile_image = ""; 
 }
include("connection.php");
if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $repassword=$_POST['repass'];

    $sql="select * from signup1 where username='$username'";
    $result=mysqli_query($conn,$sql);
    $count_user=mysqli_num_rows($result);
    $sql="select * from signup1 where email='$email'";
    $result=mysqli_query($conn,$sql);
    $count_email=mysqli_num_rows($result);

    if($count_user == 0 && $count_email == 0){
        if($password==$repassword){
            $sql="INSERT INTO signup1(username,email,password) VALUES ('$username','$email','$password')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("location:welcome.php");
            }
        }
    }
    else{
        if($count_user>0){
            echo'<script>
            alert("Username or email already exists!");
            window.location.href = "first.php";
        </script>';
        
        }
        if($count_email>0){
            echo'<script>
            alert("Username or email already exists!");
            window.location.href = "first.php";
        </script>';
        
        }
    }
}
?>