<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cards</title>
   </head>
   <body>



      <div class="container mt-5">
         <div class="row">
            <div class="col-lg-3">
               <form action="mcart.php" method="POST">
                  <div class="card">
                     <img src="images/1.webp" class="card-img-top">
                     <div class="card-body text-center">
                        <h5 class="card-title">Watch 1</h5>
                        <p class="card-text">Price : 999</p>
                        <button type="submit" class="btn btn-info" name="Add_To_Cart">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Watch 1">
                        <input type="hidden" name="Price" value="999">
                     </div>
                  </div>
               </form>
            </div> 
            <div class="col-lg-3">
               <form action="mcart.php" method="POST">
                  <div class="card">
                     <img src="images/2.webp" class="card-img-top">
                     <div class="card-body text-center">
                        <h5 class="card-title">Watch 2</h5>
                        <p class="card-text">Price : 300</p>
                        <button type="submit" class="btn btn-info" name="Add_To_Cart">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Watch 2">
                        <input type="hidden" name="Price" value="300">
                     </div>
                  </div>
               </form>
            </div> 
            <div class="col-lg-3">
               <form action="mcart.php" method="POST">
                  <div class="card">
                     <img src="images/3.webp" class="card-img-top">
                     <div class="card-body text-center">
                        <h5 class="card-title">Watch 3</h5>
                        <p class="card-text">Price : 700</p>
                        <button type="submit" class="btn btn-info" name="Add_To_Cart">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Watch 3">
                        <input type="hidden" name="Price" value="700">
                     </div>
                  </div>
               </form>
            </div> 
            <div class="col-lg-3">
               <form action="mcart.php" method="POST">
                  <div class="card">
                     <img src="images/4.webp" class="card-img-top">
                     <div class="card-body text-center">
                        <h5 class="card-title">Watch 4</h5>
                        <p class="card-text">Price : 1400</p>
                        <button type="submit" class="btn btn-info" name="Add_To_Cart">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Watch 4">
                        <input type="hidden" name="Price" value="1400">
                     </div>
                  </div>
               </form>
            </div> 
         </div>
      </div>
   </body>
</html>