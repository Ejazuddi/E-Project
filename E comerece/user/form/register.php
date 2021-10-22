<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
         <div class="col-md-6 m-auto mt-5 bg-white shadow font-monospace border border-info">

         <p class="text-warning text-center fs-3 fw-bold md-3">User Register</p>
          <form action="insert.php" method="POST">
              <div class="w-100 bg-priamry fs-4 ">
               <label for="">UserName</label>
               <br>
               <input type="text" style="width: 100%;"  placeholder="Enter User name" class="form control" name="username">
              

              <div class="w-100 bg-priamry fs-4 ">
               <label for="">UserEmail</label>
               
<br>
               <input type="email" style="width: 100%;"  placeholder="Enter User Email" class="form control" name="email">
               <br>
              </div>
              <div  class="md-3">
               <label for="">UserNumber</label>
               <br>
               <input style="width: 100%;" type="number" placeholder="Enter User Number" class="form control" name="number">
              </div>
              <div class="md-3">
               <label for="">UserPassword</label>
               <br>
               <input type="password" style="width: 100%;"  placeholder="Enter User password" class="form control" name="password">
              </div>
              <br>
              <div class="mb-3">
              <input type="submit" value="register" name="submit" class="w-100 bg-priamry fs-4 text-warning">
             
              </div>

          </form>



         </div>   
        </div>
    </div>
</body>
</html>