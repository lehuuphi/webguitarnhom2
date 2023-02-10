<div class="banner">
  <div class="slideshow-container">
  <div class="mySlides fade">
    <img src="/webguitar/img/banner1.jpg" class="img-banner">
  </div>
  <div class="mySlides fade">
    <img class="img-banner" src="/webguitar/img/banner2.jpg">
  </div>
  <div class="mySlides fade">
    <img class="img-banner" src="/webguitar/img/banner5.jpg">
  </div>
  <div class="mySlides fade">
    <img class="img-banner" src="/webguitar/img/banner3.jpeg">
  </div>
  <div class="mySlides fade">
    <img class="img-banner" src="/webguitar/img/banner3.png">
  </div>
  <div class="mySlides fade">
    <img class="img-banner" src="/webguitar/img/banner6.jpg" >
  </div>

  <div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>  
</div>
</div>
<div class="sub-banner">
    <img src="/webguitar/img/subbanner1.jpg" alt="" class="img-sub-banner">
    <img src="/webguitar/img/subbanner2.jpg" alt="" class="img-sub-banner">
    <img src="/webguitar/img/subbanner3.jpg" alt="" class="img-sub-banner">
</div>
<script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 2000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
</div>

<style>
  .banner{
    max-width: 1300px;
    margin: auto;
    margin-top: 5px;
}

.slideshow-container{
    width: 60%;
    float: left;
}

.img-banner{
    width: 100%;
    height: 360px;
}

.mySlides {
    display: none;
}
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.3s ease;
}

.active, .dot:hover {
    background-color: #717171;
  }
.fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 5s;
    animation-name: fade;
    animation-duration: 5s;
  }
  @-webkit-keyframes fade {
    from {opacity: .8} 
    to {opacity: 1}
  }
   
  @keyframes fade {
    from {opacity: .8} 
    to {opacity: 1}
  }

.sub-banner{
    display: flex;
    width: 40%;
    flex-direction: column;
    align-items: flex-end;
}
</style>