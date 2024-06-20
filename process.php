<?php
include 'database.php';
if(isset($_POST["submit"])){


    $name=$_POST['uname'];
    $email=$_POST['email'];
    $experience=$_POST['experience'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

     $sql="insert into users(name,email,experience,gender,password)
      values('$name','$email','$experience','$gender','$password')";
      if(mysqli_query($con,$sql)){
        echo '<script>
        window.location.href ="login.php";
        alert("new record inserted,Now you can login")
        </script>';
        
      }
      else
      {
        echo "error:".mysqli_error($con);
      }

      mysqli_close($con);
} 
?>




