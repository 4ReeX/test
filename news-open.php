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
        <nav>
        <ul class="pagination pag3">
        </ul>
        </nav>
        <script>
          let count = 20;

function indexes(selector, page, range){
  if (page > 1){
    $(selector).append('<li class="page-item"><a class="page-link" href="./' + (page-1) + '">Предыдущая</a></li>');
  }
  for (let i = 1; i <= count; i++){
    if (i == 1 && page-range > 1){
      $(selector).append('<li class="page-item"><a class="page-link" href="./1">1</a></li>');
        if (page-range > 2){
          $(selector).append('<li class="page-item disabled"><a class="page-link" href="#">...</a></li>');
      }
    }
    if (i >= page-range && i <= page+range){
      if (i != page){
        $(selector).append('<li class="page-item"><a class="page-link" href="./' + i + '">' + i + '</a></li>');
      } else {
        $(selector).append('<li class="page-item active"><a class="page-link" href=""./' + i + '"">' + i + '</a></li>');
      }
    }
    if (i == count && page+range < count){
      if (page+range < count-1){
        $(selector).append('<li class="page-item disabled"><a class="page-link" href="#">...</a></li>');
      }
      $(selector).append('<li class="page-item"><a class="page-link" href="./' + count + '">' + count + '</a></li>'); 
    }
  }
  if (page < count){
    $(selector).append('<li class="page-item"><a class="page-link" href="./' + (page+1) + '">Следующая</a></li>');
  }
}

indexes('.pag1', 1, 3); 
indexes('.pag2', 15, 3); 
indexes('.pag3', 15, 1); 
indexes('.pag4', count, 3)
        </script>



        </div>
      </div>
  </div>

<?php include 'modal.php'; ?>
<?php include 'scripts.php'; ?>
</body>
</html>
