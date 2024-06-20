<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
     
     
   </style>
</head>
<body style=" background-image: url(stock_4.jpg);">

<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="6.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

           
           
            <form class="px-md-2" method="post" action="process.php" >

              <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form3Example1q">Name</label>
                <input type="text" id="form3Example1q" placeholder="Enter your full Name" class="form-control" name="uname"required />
                
              </div>

              
              <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form3Example1q">Email_id</label>
                <input type="email" id="form3Example1q" placeholder="Enter your email" class="form-control" name="email" required/>
                
              </div>

                
              <div class="row">
                <div class="col-md-6 mb-4">
                <label class="form-label" for="form3Example1q" required>Gender</label><br>
                 Male<input type="radio" name="gender" value="male"><br>
                Female<input type="radio" name="gender" value="Female"><br>
                Other<input type="radio" name="gender" value="Other">
                </div>
              </div>

              
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline datepicker">
                  <label for="exampleDatepicker1" class="form-label">Your Experience</label>
                    <input type="text" class="form-control" id="exampleDatepicker1" placeholder="write your experience"name="experience"  required/>
                   
                  </div>

                </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="form3Example1w">Password</label>
                    <input type="password" id="form3Example1w" class="form-control" placeholder="Enter your password" name="password"required/>
                    
                  </div>

                </div>
              </div>

              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg mb-1" name="submit">Submit</button>
              <a href="Task.php">back_to_home</a><br>

            </form>
            <br>
            <div class="card-footer">
                <small>&copy; Stock-Market</small>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html