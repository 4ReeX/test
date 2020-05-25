<div class="header">

<nav class="navbar navbar-expand-lg navbar-dark">

<!--  Show this only on mobile to medium screens  -->
  <a class="navbar-brand d-lg-none" href="#">
  	<div class="logo">
	  <img src="img/new-logo.svg" alt="" class="icon-logo">
	  <img src="img/only-affimob.svg" alt="" class="text-logo"></div>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!--  Use flexbox utility classes to change how the child elements are justified  -->
  <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

    <ul class="navbar-nav" id="navlist">
      <li class="nav-item" id="index">
        <a class="nav-link" href="index.php">Главная</a>
      </li>
      <li class="nav-item" id="blog">
        <a class="nav-link" href="blog.php">Блог</a>
      </li>
    </ul>
    
    
<!--   Show this only lg screens and up   -->
    <a class="navbar-brand d-none d-lg-block" href="#">
    	<div class="logo">
	  <img src="img/new-logo.svg" alt="" class="icon-logo">
	  <img src="img/only-affimob.svg" alt="" class="text-logo"></div>
	</a>
    
    <ul class="navbar-nav">
      <li class="nav-item">
        	<a class="nav-link autorize cd-log" href="#0" onclick="focusMethod();">
	   			<span class="icon-enter"></span>
	   		    <span class="auth">Авторизация</span>
	  		</a>
      </li>
    </ul>
  </div>
</nav>  
</div>
