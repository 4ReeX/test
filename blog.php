
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Партнёрская партнёрская программа Affimob! Партнёрка WapClick подписок - для арбитражников и вебмастеров"/>
  <meta property="og:title" content="Аффимоб"/>
  <meta property="og:description" content="Партнерская программа"/>
  <meta property="og:image" content="ССЫЛКА НА КАРТИНКУ ИЗ ВИКИПЕДИИ С НАШИМ ЛОГО"/>
  <meta property="og:type" content="profile"/>
  <meta property="og:url" content= "ССЫЛКА НА СТАТЬЮ В ВИКИПЕДИЮ про нас" />
  <title>Affimob - wap-click партнерская программа</title>
  <!--<meta name="viewport" content="width=device-width">-->
  <meta content='width=device-width, initial-scale=1.1, maximum-scale=1.1, shrink-to-fit=no, user-scalable=yes' name='viewport' />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <!-- Link Swiper's CSS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/popup.css">
  <link rel="stylesheet" href="css/media.css">
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>
<body> 
  <?php include 'header.php'; ?>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide-block flex-start" style="height: auto; overflow-y: auto;">
        <div class="wapclick ">WAPCLICK</div>
          <div class="news-container col-sm-6">
          <?php include 'one-new.php'; ?>
          <div class="card-footer"><button class="btn btn-success" onclick="link();">Подробнее</button></div></div>
           <?php include 'one-new.php'; ?>
           <div class="card-footer"><button class="btn btn-success" onclick="link();">Подробнее</button></div></div>
            <?php include 'one-new.php'; ?>
            <div class="card-footer"><button class="btn btn-success" onclick="link();">Подробнее</button></div></div>
             <?php include 'one-new.php'; ?>
             <div class="card-footer"><button class="btn btn-success" onclick="link();">Подробнее</button></div></div>
        </div>

        </div>
      </div>
  </div>

<?php include 'modal.php'; ?>

<!-- JQUERY -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
  focusMethod = function getFocus() {           
  document.getElementById("#signin-email").focus();
}
  focusMethodRega = function getFocus() {           
  document.getElementById("#signup-username").focus();
}
</script>

<!-- Initialize Swiper -->

<script type="text/javascript" src="js/main.js"></script>
<script>
  // ---------Responsive-navbar-active-animation-----------
function test(){
  var tabsNewAnim = $('#navbarSupportedContent');
  var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
  var activeItemNewAnim = tabsNewAnim.find('.active');
  var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
  var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
  var itemPosNewAnimTop = activeItemNewAnim.position();
  var itemPosNewAnimLeft = activeItemNewAnim.position();
  $(".hori-selector").css({
    "top":itemPosNewAnimTop.top + "px", 
    "left":itemPosNewAnimLeft.left + "px",
    "height": activeWidthNewAnimHeight + "px",
    "width": activeWidthNewAnimWidth + "px"
  });
  $("#navbarSupportedContent").on("click","li",function(e){
    $('#navbarSupportedContent ul li').removeClass("active");
    $(this).addClass('active');
    var activeWidthNewAnimHeight = $(this).innerHeight();
    var activeWidthNewAnimWidth = $(this).innerWidth();
    var itemPosNewAnimTop = $(this).position();
    var itemPosNewAnimLeft = $(this).position();
    $(".hori-selector").css({
      "top":itemPosNewAnimTop.top + "px", 
      "left":itemPosNewAnimLeft.left + "px",
      "height": activeWidthNewAnimHeight + "px",
      "width": activeWidthNewAnimWidth + "px"
    });
  });
}
$(document).ready(function(){
  setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
  setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
  setTimeout(function(){ test(); });
});
</script>


<script>
$(document).ready(function(){
         $("#blog a").addClass('active');
         $('#navlist').siblings('li').removeClass('active');
});
</script>
<script>
  function link() {
    location.href = "news-open.php";
  };
</script>
</body>
</html>
