<?php require('header.php');?>
<style>
#header_g{ background-color: black;}
.bl_list{ display:none; }
</style>

<section class="wrap_korzina">
<div class="panel_down flex_center"> <h1>Create an order</h1> <button class="btn_back"><a href="page_men.php">back to shop</a></button></div>

<div class="wrap_block_order">
    <div class="block_order">
          <form class="formOrder" action="" method="post">
          <div class="bl_user">
          <label for="">Your First Name Last Name</label>
          <input class="" name="" type="text">
          </div>
          <div class="bl_user">
          <label for="">Phone</label>
          <input class="" name="" type="text">
          </div>
          <div class="bl_user">
          <label for="">Delivery methods</label>
          <select name="" class="">
          <option value="">In boutique</option>
          <option value="">DHL</option>
          <option value="">FedEx</option>
          </select>
          </div>
          <div class="bl_price flex_mod2">
          <p>to pay:</p> <p><b>1440 $</b></p>
          </div>
          <input class="btn_send" type="submit" value="to order">
          </form>
    </div>

    

    <div class="order_list">
<!---------------------------------------------------------------------------------------->
        <div class="order_tovar">
        <img class="btn_order_close" src="media/wClose.png" data-close="close" alt="">
        <img class="tovarImg" src="media/sumca.png" alt="">
        <div class="order_info">
        <div class="orderName"><p>Bag №4444</p></div>
        <div class="priceText"><p>1500$</p></div>
        <div class="orderSize ord"><p>Size:</p><p>S</p></div>
        <div class="orderColor ord"><p>Color:</p><p>Yellow</p></div>
        <div class="orderCount">
        <div class="btnCount btnMinus" data-minus="min">-</div>
        <input class="countOut" type="text" value="0">                
        <div class="btnCount" data-plus="pl">+</div>
        </div> 
        <input class="orderPrice" type="text" value="1">
        <div class="outSum"><p>0</p> <p>$</p></div>      
        </div>
        </div>
<!---------------------------------------------------------------------------------------->
<div class="order_tovar">
    <img class="btn_order_close" src="media/wClose.png" data-close="close" alt="">
    <img class="tovarImg" src="media/sumca.png" alt="">
    <div class="order_info">
    <div class="orderName"><p>Bag №4444</p></div>
    <div class="priceText"><p>1500$</p></div>
    <div class="orderSize ord"><p>Size:</p><p>S</p></div>
    <div class="orderColor ord"><p>Color:</p><p>Yellow</p></div>
    <div class="orderCount">
    <div class="btnCount btnMinus" data-minus="min">-</div>
    <input class="countOut" type="text" value="0">                
    <div class="btnCount" data-plus="pl">+</div>
    </div> 
    <input class="orderPrice" type="text" value="1">
    <div class="outSum"><p>0</p> <p>$</p></div>      
    </div>
    </div>
<!---------------------------------------------------------------------------------------->
<div class="order_tovar">
    <img class="btn_order_close" src="media/wClose.png" data-close="close" alt="">
    <img class="tovarImg" src="media/sumca.png" alt="">
    <div class="order_info">
    <div class="orderName"><p>Bag №4444</p></div>
    <div class="priceText"><p>1500$</p></div>
    <div class="orderSize ord"><p>Size:</p><p>S</p></div>
    <div class="orderColor ord"><p>Color:</p><p>Yellow</p></div>
    <div class="orderCount">
    <div class="btnCount btnMinus" data-minus="min">-</div>
    <input class="countOut" type="text" value="0">                
    <div class="btnCount" data-plus="pl">+</div>
    </div> 
    <input class="orderPrice" type="text" value="1">
    <div class="outSum"><p>0</p> <p>$</p></div>      
    </div>
    </div>
<!---------------------------------------------------------------------------------------->
<div class="order_tovar">
    <img class="btn_order_close" src="media/wClose.png" data-close="close" alt="">
    <img class="tovarImg" src="media/sumca.png" alt="">
    <div class="order_info">
    <div class="orderName"><p>Bag №4444</p></div>
    <div class="priceText"><p>1500$</p></div>
    <div class="orderSize ord"><p>Size:</p><p>S</p></div>
    <div class="orderColor ord"><p>Color:</p><p>Yellow</p></div>
    <div class="orderCount">
    <div class="btnCount btnMinus" data-minus="min">-</div>
    <input class="countOut" type="text" value="0">                
    <div class="btnCount" data-plus="pl">+</div>
    </div> 
    <input class="orderPrice" type="text" value="1">
    <div class="outSum"><p>0</p> <p>$</p></div>      
    </div>
    </div>
<!---------------------------------------------------------------------------------------->

</div>
</div>
</section>



 <?php require('footer.php');?>
