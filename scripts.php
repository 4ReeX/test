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
  function link() {
    location.href = "news-open.php";
  };
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"> </script>
<script>
$('.share-button').on('click',function(){  
  $('.share-button').width(100 + "px");
  $(this).addClass('open');
})
$( ".share-items" ).draggable({ 
  axis: "x",
  containment : ".share-items-wrapper"
});
$( ".share-item" ).on('click',function(){

   $('.share-button').addClass('shared');
   
   setTimeout(function(){
    $('.share-button').addClass('thankyou');
  }, 800);
  setTimeout(function(){
    $('.share-button').removeClass('open');
    $('.share-button').removeClass('shared');
    $('.share-button').removeClass('thankyou');
    $('.share-button').css("opacity", '0');
  }, 2500);
  setTimeout(function(){
  $('.share-button').width(38 + "px");
  $('.share-button').css("opacity", '1');
  }, 2900);


});
</script>

<script>
  $(window).on('load resize', function () {
    $('.share-button').width(38 + "px");
});
</script>