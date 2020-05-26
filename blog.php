<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body> 
  <?php include 'header.php'; ?>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide-block flex-start" style="height: 100%; overflow-x: hidden; overflow-y: auto; -webkit-overflow-scrolling:touch; transform: translateZ(0);">
        <div class="wapclick ">WAPCLICK</div>
          <div class="news-container col-sm-6 col-md-12 col-lg-6">
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
<?php include 'scripts.php'; ?>

</body>
</html>
