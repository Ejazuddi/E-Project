<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <?php

    include 'header.php';

    
    ?>


</head>
<body>
    <div class="container-fluid">
     <div class="col-md-12">
     <div class="row">    
    
<h1 class="text-warning font-monospace  text-center my -3">Bag</h1>
<?php
 include 'config.php';
 $record = mysqli_query($con, "Select * from tblproduct");
 while (  $row=mysqli_fetch_array($record)){
  $check_page = $row['PCategory'];
  if($check_page==='bag'){
  echo "  
 
  <div class='col-md-6 col-lg-4 m-auto mb-3 '>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top' alt=''>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[Pimage]</h5>
    <h5 class='card-title'>$row[Pname]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>RS: $row[Pprice]</p>
    <input type='number' value = 'min= '1' max ='20'placeholder ='Quantity'><br><br>
    <input type='submit'class ='btn btn-warning text-white w-100' value='Add To Cart'>

    
  </div>
</div>
</div>
";
}
}
?>
</div>
</div>
</div>
</body>
</html>