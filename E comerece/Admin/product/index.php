<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <div  class= "container">
        <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">
    
        <form action="insert.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">product derail:</p>
</div>

<div class="mb-3">
  <label  class="form-label">product name:</label>
  <input type="text"name="Pname" class="form-control"  placeholder="Example product name">
</div>

<div class="mb-3">
  <label  class="form-label">Product price:</label>
  <input type="text"name="Pprice" class="form-control"  placeholder="Example product price">
</div>

<div class="mb-3">
  <label  class="form-label">Add product Image:</label>
  <input type="file"name="Pimage" class="form-control" >

</div>
<div class="mb-3">
  <label  class="form-label">Select Page category</label>
  <select aria-label="Default select example" class="form-select"name="pages">
      <option value="home">Home</option>
      <option value="laptop">laptop</option>
      <option value="bag">Bag</option>
      <option value="mobile">Mobile</option>


  </select>

</div>
    <Button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</Button>
        </form>

        </div>
        </div>
        </div>

</body>
</html>