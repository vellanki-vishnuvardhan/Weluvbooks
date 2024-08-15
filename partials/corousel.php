<!--corausel-->
<?php $var= rand(1,5);?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo "img/book1[".$var."].jpg";?>" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>A reader lives a thousand lives before he dies . . . ...</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo "img/water[".$var."].jpg";?>" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Water is beautiful as well as necessary !!!!</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo "img/buddha[".$var."].jpg";?>" class="d-block w-100" alt="..." width="800" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Buddha Sutra!!!!</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--end-->