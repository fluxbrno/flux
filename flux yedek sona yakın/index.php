<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.8, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/flux-122x123.png" type="image/x-icon">
  <meta name="description" content="">
  <title>v1</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu popup-btn-cards cid-qXnZQBAr9k" once="menu" id="menu2-1">

    
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="mbr-overlay" style="opacity: 0.8;"></div>

      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
        <div class="left-menu">
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                  <a class="nav-link link text-black display-4" href="https://mobirise.com">
                       Development
                  </a>
              </li></ul>
        </div>

        <div class="brand-container">
          <div class="navbar-brand">
              <span class="navbar-logo">
                  <a href="https://mobirise.com">
                      <img src="assets/images/flux-122x123.png" alt="Mobirise" title="" style="height: 4.8rem;">
                  </a>
              </span>
              
          </div>
        </div>

        <div class="right-menu">
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                <a class="nav-link link text-black display-4" href="https://mobirise.com">
                    Design
                </a>
            </li></ul>
        </div>
      </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
          </button>
    </nav>
</section>

<section class="mbr-gallery cid-qXo5uiCDvI" once="shops" id="shop2-2">

    

    <div>
        <div class="mbr-shop" sorting=""><!-- Shop Gallery --><div class=" col-md-12 sort-buttons clearfix"><div class="sort-buttons"><div class="filter-by-d mbr-section-btn item-button" style="text-align: center;"><a class="btn btn-sm btn-black disableSortButton" href="" style="position: relative; display: inline-block;">Default sorting</a></div><div class="filter-by-pu mbr-section-btn"><a class="btn btn-sm btn-black-outline disableSortButton" href="">Price: low to high</a></div><div class="filter-by-pd mbr-section-btn"><a class="btn btn-sm btn-black-outline disableSortButton" href="">Price: high to low</a></div></div></div><div class="row col-md-12"><div class="wrapper-shop-items col-md-12"><div class="mbr-gallery-row"><div><div class="shop-items">
            <?php
$url = 'https://japex.vaizard.xyz/glued/public/api/v1/vectors/event/10-15';
$content = file_get_contents($url);
$json = json_decode($content, true);




?>
            <?php
           
foreach($json['data'] as $item) {
                echo  ' <div class="mbr-gallery-item" data-tags="Awesome" data-slide-to="0" data-seller="false" data-price="61" data-oldprice="122"><div class="item_overlay" data-toggle="modal"></div><div class="galleryItem" data-toggle="modal"><div class="style_overlay"></div>'; ?><div class="img_wraper"><img src="<?php echo $item['attach']['0']['uri']; ?>"></div><span class="onsale mbr-fonts-style display-7" data-onsale="false" style="display: none;">-50%</span><div class="sidebar_wraper"><h4 class="item-title mbr-fonts-style mbr-text display-5"><?php echo $item['summary']['0']['data']; ?></h4><div class="price-block"><span class="shop-item-price mbr-fonts-style display-5"><?php echo $item['dt_start']; ?></span><span class="oldprice mbr-fonts-style display-7" style="display: none;">$122</span></div><div class="card-description">Casual shoes (contact us for sizing)<br><br><ul><li>Lightweight textured fabric</li> <li>Rounded v-neckline</li> <li>Pom pom trims</li> <li>Regular fit – true to size</li></ul> <br>Duis auctor hendrerit nisi, at lacinia ex vulputate quis. Suspendisse convallis iaculis tortor, quis mattis lectus rutrum a.<br><br>Product code: <strong>385DDF5p</strong></div><div class="mbr-section-btn" buttons="0" style="display: none;"><a href="<?php echo $item['rel']['uri']; ?>" class="btn btn-black display-7">Buy now!</a></div></div></div></div> <?php } ?>
                        
                  
            
            
            
            
            
            
            
            </div></div><div class="clearfix"></div></div></div></div><!-- Lightbox --><div class="shopItemsModal_wraper" style="z-index: 100;"><div class="shopItemsModalBg"></div><div class="shopItemsModal row"><div class="col-md-6 image-modal"></div><div class="col-md-6 text-modal"></div><div class="closeModal"><div class="close-modal-wrapper"></div></div></div></div></div>
    </div>








  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mobirise-shop/script.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  
  
</body>
</html>