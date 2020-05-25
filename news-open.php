
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body> 
  <?php include 'header.php'; ?>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide-block flex-start" style="height: auto; overflow-y: auto;">
        <div class="wapclick ">WAPCLICK</div>
          <div class="news-container col-sm-6">
          <?php include 'one-new.php'; ?>
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
</body>
</html>
