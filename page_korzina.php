<?php require('header.php');?>
<style>
#header_g{ background-color: black;}
.bl_list{ display:none; }
</style>

<section class="wrap_korzina">
<div class="panel_down flex_center"> <h1>Create an order</h1> 
<div class="btn_back"><a href="page_men.php">back to shop</a></div>
</div>

<div class="wrap_block_order">
    <div class="block_order">
          <form class="formOrder" action="BD.php" method="post">
          <div class="bl_user">
          <label>Your First Name Last Name</label>
          <input name="Gu_name" type="text">
          </div>
          <div class="bl_user">
          <label>Phone</label>
          <input name="Gu_phone" type="text">
          </div>

          <div class="bl_user">
          <label for="Gu_deliv">Delivery methods</label>
          <select>
          <option value="1">In boutique</option>
          <option value="2">DHL</option>
          <option value="3">FedEx</option>
          </select>
          </div>
          <div class="bl_price flex_mod2">
          <p>to pay:</p> <p><b>1440 $</b></p>
          </div>
          <input class="btn_send" type="submit" value="to order">
          </form>
    </div>

    <div class="order_list">

<?php 
$posts = [
  1 => ['photo' => "media/sumca.png",'title' => "Bag №1",'price' => "1500" ],
  2 => ['photo' => "media/sumca.png",'title' => "Bag №2",'price' => "1500" ],
  3 => ['photo' => "media/sumca.png",'title' => "Bag №3",'price' => "1500" ],
  4 => ['photo' => "media/sumca.png",'title' => "Bag №4",'price' => "1500" ],
];
foreach ($posts as $post):?>
        <div class="order_tovar">
        <img class="btn_order_close" src="media/wClose.png" data-close="close" alt="">
        <img class="tovarImg" src="<?= $post['photo']; ?>" alt="">
        <div class="order_info">
        <div class="orderName"><p><?= $post['title']; ?></p></div>
        <div class="priceText"><p><?= $post['price']; ?> $</p></div>
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
<?php endforeach; ?>

</div>
</div>
</section>

 <?php require('footer.php');?>
