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
        <!--Пагинация-->
        <a href="" class="prev float-left"><i class="ti ti-arrow-left "></i> Предыдущая</a>
        <a href="" class="next float-right">Следующая <i class="ti ti-arrow-right"></i></a>
       


        </div>
      </div>
  </div>

<?php include 'modal.php'; ?>
<?php include 'scripts.php'; ?>
</body>
</html>
