<style>

.carousel-control-prev-icon,.carousel-control-next-icon{
font-size:170%;
color:black;
}
.carousel-indicators li {
background-color:black;
}
</style>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
     <center> <img  width="80%" height="5%"src="images/schoolsable_c1.jpg" alt="Los Angeles"></center>
    </div>
   <div class="carousel-item ">
     <center> <img  width="80%" height="5%"src="images/schoolsable_c2.jpg" alt="Los Angeles"></center>
    </div>
   <div class="carousel-item ">
     <center> <img  width="80%" height="5%"src="images/schoolsable_c3.jpg" alt="Los Angeles"></center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"><i class="fas fa-arrow-left" aria-hidden="true"></i></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"><i class="fas fa-arrow-right" aria-hidden="true"></i></span>
  </a>

</div>