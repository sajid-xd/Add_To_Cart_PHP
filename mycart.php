<?php include "header.php"; ?>
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
            <div class="col-lg-9">
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
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                         foreach($_SESSION['cart'] as $key => $value)
                         {
                           $sr=$key+1;
                          $total=$total+$value['Price'];
                          echo"
                          <tr>
                          <td>$sr</td>
                          <td>$value[Item_Name]</td>
                          <td>$value[Price]</td>
                          <td><input type='number' value='$value[Quantity]' min='1' max='10'></td>
                          <form action='mcart.php' method='POST'>
                               <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button></td>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                          </tr>";
                        }
                        }
                        ?>
                  </tbody>
               </table>
            </div>

            <div class="col-lg-3">
              <div class="border bg-light rounded p-4 text-center">
              <h4>Total:</h4>
              <h5><?php echo $total?></h5>
              <br>
              <form>
              <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                       <label class="form-check-label" for="flexRadioDefault1">
    Cash On Delivery
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
  Delivery On Cash
  </label>
</div>
<br>
                <button class="btn btn-danger btn-block">Purchase</button>
              </form>
              </div>
            </div>

         </div>
      </div>
   </body>
</html>