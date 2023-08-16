<?php require('header.php');?>


<main id="main_g1947">
<div class="video_gucci"> <video class="video1947" loop muted src="media/Bambo.mp4" autoplay></video> 
<img src="media/s12.png" alt="">
</div>
<div class="sumka_info_text_DOP"> 
  <p>"Gucci Bamboo 1947"</p> 
   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    Ipsa non ipsam dicta deserunt laudantium,
    eligendi dolorem ratione maiores tempore nostrum ut. Impedit, nam 
    voluptate eos vel voluptatem debitis laboriosam! Labore.
    eligendi dolorem ratione maiores tempore nostrum ut. Impedit, nam 
    voluptate eos vel voluptatem debitis laboriosam! Labore.
  </div>
<div class="block_video_content1947 flex_mod">
         <img class="strelDown" src="media/strela_L.png" alt="">
    </div>
</main>


<section class="fotoBl_1947_1 flex_mod">
  <p>
  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    Ipsa non ipsam dicta deserunt laudantium,
    eligendi dolorem ratione maiores tempore nostrum ut. Impedit, nam
    voluptate eos vel voluptatem debitis laboriosam! Labore.
    eligendi dolorem ratione maiores tempore nostrum ut. Impedit, nam 
    voluptate eos vel voluptatem debitis laboriosam! Labore.
  </p>
</section>

<section class="fotoBl_1947_2 flex_mod">
<div class="text_fon1947">
  <p>Дизайн удивляет 
с 1947 года. 
Все то что
не стареет со временем.
Стиль на все случаи жизни</p>
</div>
<img src="media/199.jpg" alt="">
</section>


<section class="fotoBl_1947_3" style="">
<img src="media/198.jpg" alt="">
<img src="media/197.jpg" alt="">
</section>




<section class="tovar_list">

<div class="categrProd flex_mod"> <div class="categ_name flex_center"><p>Bags1</p><div class="borLine"></div></div>
    <div class="wrap_cards">

    <?php 
$posts = [
  1 => ['photo' => "media/sum1.jpg",'title' => "Штаны",'price' => "1255" ],
  2 => ['photo' => "media/sumca.png",'title' => "Свитер",'price' => "9999" ],
  3 => ['photo' => "media/sum2.jpg",'title' => "Платье",'price' => "1440" ],
  4 => ['photo' => "media/sum3.jpg", 'title' => "Куртка", 'price' => "3687"],
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

<div class="categrProd flex_mod"> <div class="categ_name flex_center"><p>Bags2</p><div class="borLine"></div></div>
    <div class="wrap_cards">


    <?php 
$posts = [
  1 => ['photo' => "media/sum1.jpg",'title' => "Штаны",'price' => "1255" ],
  2 => ['photo' => "media/sumca.png",'title' => "Свитер",'price' => "9999" ],
  3 => ['photo' => "media/sum2.jpg",'title' => "Платье",'price' => "1440" ],
  4 => ['photo' => "media/sum3.jpg", 'title' => "Куртка", 'price' => "3687"],
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

</section>


 <?php require('footer.php');?>
