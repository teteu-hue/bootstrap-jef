<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    
    <?php for($i = 0; $i < 10; $i++){ ?>
    <div class="carousel-item active" style="width: 1400px; height: 1000px;">
      <img src="https://desertfun.ae/images/gallery/IMG%20World%20Park%20By%20Desertfun.ae%203.jpg" class="d-block w-100" alt="...">
    </div>
    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>