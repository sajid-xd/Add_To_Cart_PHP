<?php include "header.php"; 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>

            <div class="col-lg-8">

            <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Item_Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  
  <tbody>
  <?php
  if(isset($_SESSION['cart']))
  {
   foreach($_SESSION['cart'] as $key => $value)
   {
    echo"
    <tr>
    <td>1</td>
    <td>$value[Item_Name]</td>
    <td>$value[Price]</td>
    <td><input type='number' value='$value[Quantity]' min='1' max='10'></td>
    <td><button class='btn btn-sm btn-outline-danger'>Remove</button></td>
    </tr>";
  }
}
  ?>
  </tbody>
</table>

            </div>

        </div>
    </div>
</body>
</html>
