<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login_process.php");
    exit();
}

include 'database.php';
$email = $_SESSION['email'];
$sql = "SELECT name, email, experience,gender FROM users WHERE email='$email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Catamaran:wght@200&family=Courgette&family=Edu+TAS+Beginner:wght@700&family=Lato:wght@300;900&family=Mukta:wght@700&family=Mulish:wght@300&family=Open+Sans&family=PT+Sans:ital,wght@1,700&family=Poppins:wght@300&family=Raleway:wght@100&family=Roboto+Condensed:wght@700&family=Roboto+Slab&family=Roboto:wght@300;400&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

    <style>


#qwa{
    width: 440px;
    padding: 33px;
    text-align:center;
    background-color: #fff;
    margin-left: 33%;
    margin-top: 5px;
    background-color: #DDE6ED;
    position: relative;
    right:270px;
    top:10px;
 }
 input{
    width: 270px;
    padding: 8px;
    border: 2px solid rgb(6, 145, 145);
    outline: none;
    font-size: 19px;


  }
  .inputs{
    border-radius:7px;
  }
 button{
    width: 60px;
    height: 41px;
    background-color: rgb(4, 29, 29);
    color: white;
    border: none;
    cursor: pointer;

    outline: none;
    border-radius: 5px;
    font-size: 19px;
 }

  
 .text ul{
    position: relative;
    background-color: rgb(5, 31, 31);
    color: white;
    font-size: 12px;
    padding: 7px;
    text-align: left;
    border-radius:7px;
 }
 
 .text ul i{
    position: absolute;
    right: 10px;
    cursor: pointer;
 }
        .card{
            postion:relative;
            left: 500px;
            top:30px;
        }
        body{
            background-image: url(8.jpg);
            background-size:2200px;
           
        }
      
        
        #profile{
          position: relative;
          right:100px;
        }
  .container{
    border-radius:7px;
 }
 .container h1{
  position: relative;
  right:28px;
 }
 #border{
  border-radius:7px;
  position: relative;
  top:7px;
  
 }
 .pro:hower{
  color: #2d00954f;
 }
  
    
    </style>
</head>
<body >
<div class="container" id="cont">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="border">
          <div class="container-fluid">
          <img src="stock_12jpg.png" height="50" width="60px">  
            <a class="navbar-brand" href="#" style="font-size:25px"><b style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" >Stock-Market</b></a>
            <ul id="profile">
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="font-size:25px">
               <b style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" ></b> Profile
                </a>
                
                <ul class="dropdown-menu ">
               
                  <li>
                      <div class="card-item" style="width: 18rem;">
                          <img src="profile.jpg" hight="300px" width="400px" class="card-img-top" alt="profile">
                          <div class="card-body">
                              <h5 class="card-title"><u>Profile</u></h5>
                              <p class="card-text">
                                   <b>Name:-</b> <?php echo htmlspecialchars($user['name']); ?><br>
                                   <b>Email:-</b><?php echo htmlspecialchars($user['email']); ?><br>
                                   <b>Gender:-</b> <?php echo htmlspecialchars($user['gender']); ?><br>
                                   <b>Experience:-</b> <?php echo htmlspecialchars($user['experience']); ?><br>
                              </p>                         
                          </div>
                       </div>                       
                  </li>
                  
                  <li class="profile"><hr class="dropdown-divider"></li>
                 <li class="pro"> <a class="dropdown-item  btn-primary" href="login.php">Logout</a></li> 
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>


      <div class="container" id="qwa">
    <h1 style="font-size:25px">Add Your Share</h1>
    <div class="inputs">
        <input type="text" placeholder="Enter Company Name" id="inp">
        <button onclick="Add()">Add</button>
    </div>
    <br>
    <div class="text">
        
    </div>
   </div>

    <script src="Todo.js"></script>
    
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>




