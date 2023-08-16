<?php require('header.php');?>

<main id="main_g">
<div class="video_gucci"> <video loop muted src="media/vid1.mp4" autoplay></video></div>
<div class="wrap_fon_toget flex_mod2">
  <div class="fon_toget_text">
    <p>Travel together with Gucci</p>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto 
      dolore ea, quia ipsam deleniti 
      quas porro quos asperiores, sint laudantium deserunt odio voluptatem 
      repudiandae unde, eius ratione. Eaque, cumque dolores.
    </p>
  </div>

  <div class="foto_collage flex_mod2">
    <img src="media/girl2.webp" alt="">
    <img src="media/girl3.webp" alt="">
   <img src="media/tov_catg1.webp" alt="">
  </div>
</div>
</main>

<section class="tovar_list">

<div class="categrProd flex_mod"> <div class="categ_name flex_center"><p>Category1</p><div class="borLine"></div></div>
    <div class="wrap_cards">
      
    <?php 
$posts = [
  1 => ['photo' => "media/tov_catg1.webp",'title' => "Штаны",'price' => "1255" ],
  2 => ['photo' => "media/tov_catg2.webp",'title' => "Свитер",'price' => "9999" ],
  3 => ['photo' => "media/tov_catg1.webp",'title' => "Платье",'price' => "1440" ],
  4 => ['photo' => "media/girl3.webp", 'title' => "Куртка", 'price' => "3687"],
];
foreach ($posts as $post):?>
        <div class="cardProduct"> 
          <div class="card_img"><img src="<?= $post['photo']; ?>" alt=""></div>
          <div class="card_descrp"> <p><?= $post['title']; ?></p> <p> <?= $post['price']; ?> </p> </div>
          <div class="card_btn flex_center"><div class="btn_pg"><a href="page_templ_tovar.php">MORE</a></div>
          <img src="media/heart.png" alt=""></div>
        </div> 
<?php endforeach; ?>
</div>
</div>

<div class="categrProd flex_mod"> <div class="categ_name flex_center"><p>Category1</p><div class="borLine"></div></div>
    <div class="wrap_cards">
    <?php 
$posts = [
  1 => ['photo' => "media/tov_catg1.webp",'title' => "Штаны",'price' => "1255" ],
  2 => ['photo' => "media/tov_catg2.webp",'title' => "Свитер",'price' => "9999" ],
  3 => ['photo' => "media/tov_catg1.webp",'title' => "Платье",'price' => "1440" ],
  4 => ['photo' => "media/girl3.webp", 'title' => "Куртка", 'price' => "3687"],
];
foreach ($posts as $post):?>
        <div class="cardProduct"> 
          <div class="card_img"><img src="<?= $post['photo']; ?>" alt=""></div>
          <div class="card_descrp"> <p><?= $post['title']; ?></p> <p> <?= $post['price']; ?> </p> </div>
          <div class="card_btn flex_center"><div class="btn_pg"><a href="page_templ_tovar.php">MORE</a></div>
          <img src="media/heart.png" alt=""></div>
        </div> 
<?php endforeach; ?>
</div>
</div>

<div class="categrProd flex_mod"> <div class="categ_name flex_center"><p>Category1</p><div class="borLine"></div></div>
    <div class="wrap_cards">
    <?php 
$posts = [
  1 => ['photo' => "media/tov_catg1.webp",'title' => "Штаны",'price' => "1255" ],
  2 => ['photo' => "media/tov_catg2.webp",'title' => "Свитер",'price' => "9999" ],
  3 => ['photo' => "media/tov_catg1.webp",'title' => "Платье",'price' => "1440" ],
  4 => ['photo' => "media/girl3.webp", 'title' => "Куртка", 'price' => "3687"],
];
foreach ($posts as $post):?>
        <div class="cardProduct"> 
          <div class="card_img"><img src="<?= $post['photo']; ?>" alt=""></div>
          <div class="card_descrp"> <p><?= $post['title']; ?></p> <p> <?= $post['price']; ?> </p> </div>
          <div class="card_btn flex_center"><div class="btn_pg"><a href="page_templ_tovar.php">MORE</a></div>
          <img src="media/heart.png" alt=""></div>
        </div> 
<?php endforeach; ?>
</div>
</div>
 <?php require('footer.php');?>

