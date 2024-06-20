


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock_market.com</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Task2.css" rel="stylesheet">
    <style>
      body{
           background-color: #CAF4FF;
       }
     
   </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg " >
    <div class="container-fluid">
      <img src="stock_12jpg.png" height="50" width="60px">  
      <h2>Stock Market</h2>
     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav " id="spd">
          <li class="nav-item ">
            <a class="nav-link text-dark" href="stock_info.php" >Stock_Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
           
          </li>
          </ul>

          <form class="d-flex" role="search" action="https://www.nseindia.com/search" id="e_search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
         
    
          <li class="nav-item dropdown" id="tre">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login_here
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="insert.php">Register</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="login.php">Login</a></li>
            </ul>
          </li> 
        </ul>
            
    </div>
  </nav>
  
 
    
    
    <div id="top">
        <h1>Stock Exchange</h1>
        <h3>Do You Now Ready To Play</h3>
    </div><br><br>
  <div id="sugg">
    <h2 style="color: #FDFFC2;"><b style="color:#94FFD8" > Demand</b> and <b style="color:#94FFD8">supply </b>are the top factors that can drive stock prices <b style="color:#94FFD8">up</b> or <b style="color:#94FFD8">down</b>. ...</h2>
    <h3> Properly watch the Graph & Go to Register/login</h3>
  </div>
    

  <div style="display:inline-block">
<div class="card" style="width: 595px;" id="cards">
  <video src="a2.mp4"  controls autoplay loop muted class="card-img-top" alt="...">Amazing</video>
   
  </div>
  <div class="card" style="width:660px;" id="cards" >
    <video src="a1.mp4"  controls autoplay loop muted class="card-img-top" alt="...">Amazing</video>
  
  </div>
 
</div>

  </div><br>

    <div>
        <h2 id="login" style="color: rgb(105, 225, 25);"><u style="color:#FFB1B1;">Share Your Thoughts</u></h2>
    <form action="submition.html" class="form">
        <label for="user"><u style="color:#FFCBCB;">Suggestion</u></label>
        <input type="Username" id="user" placeholder="please write here">
        <button type="submit" class="btn btn-outline-success">submit</button>
    </form>
  </div>
   


    <footer>
      <div class="row" id="contact">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><u>contact_us</u></h5>
              <p class="card-text"> Mob.no: 9660xxxxxx</br><a href="#">Email_id: vkXXXX1123@gmail.com</a></p>
               Website:- <a href="Task.php" class="btn btn-primary">Stock_Market.com</a>
            </div>
          </div>
        </div>
    <br>

    </footer>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>