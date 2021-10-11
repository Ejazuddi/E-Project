<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body class="bg-secondary">
<div  class= "container">
        <div class="row">
        <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-primary mt-3">
    
        <form action="login1.php" method="POST" >

        <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Login:</p>
</div>

<div class="mb-3">
  <label  class="form-label">Name:</label>
  <input type="text" name="username" class="form-control"  placeholder="Example username">
</div>

<div class="mb-3">
  <label  class="form-label">Password:</label>
  <input type="password"name="userpassword" class="form-control"  placeholder="Example password">
</div>

    <Button class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</Button>
</form>

        </div>
        </div>
        </div>
</body>
</html>