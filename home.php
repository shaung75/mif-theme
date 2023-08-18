<?php include('components/head.php');?>

  <body class="pb-6">

    <div class="container bg-white g-0 mx-auto overflow-hidden">

      <?php include('components/header.php');?>

      <div class="container hero p-0 color-white" style="background: url('img/Hero-image.png') no-repeat;">
        <div class="container pt-5 pb-5  bg-mif-green-gradient">
          <div class="row">
            <div class="col-6">
              <div class="content-block p-4 h-100">
                <h1>Strengthening the African voice on global challenges</h1>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6 offset-6">
              <div class="hot-topic-wrapper">
                <a href="#" class="open" data-toggle="tooltip" data-placement="top" title="View MIF's Hot Topic"><i class="fa-solid fa-plus"></i></a>
                <div class="content-block bg-mif-blue hot-topic p-4 h-100" style="display: none;">
                  <a href="#" class="close"><i class="fa-solid fa-xmark"></i></a>
                  <div class="row">
                    <div class="col-3">
                      <img src="img/hot-1.png" class="img-fluid">
                    </div>
                    <div class="col-9">
                      <h4>Do not take Africa for granted</h4>
                      <p>Read Mo's forward to the 2023 Forum Report</p>
                      <a href="#" class="btn btn-primary">Find out more</a></h3>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div> 

        </div>
      </div>




      <div class="container bg-grey  pt-5 pb-4">

        <div class="row pt-4 pb-5">
          <div class="col-6">
            <div class="content-block p-4 h-100">
              <h3 class="mb-4">The Mo Ibrahim Foundation is an African organisation providing an African voice on current global challenges. </h3>
              <p>The Foundation provides data and analysis to assess these challenges at the continental level, bringing together African stakeholders, including its youth, to discuss potential solutions, grounded in sound leadership and governance.</p>
            </div>
          </div>

          <div class="col-6">
            <div class="content-block p-4 h-100">
              <p>Our initiatives and programmes <em>inform</em> discussions, <em>convene</em> stakeholders, and <em>foster</em> Africa’s future leaders.</p>
              
              <div class="tab-panel bg-mif-additional-red">
                <ul class="tabs">
                  <li class="">
                    <div class="tab">
                      <a href="#tab-1" data-toggle="tab">Inform</a>
                      <div class="tab-pane" id="tab-1">
                        <ul>
                          <li><a href="#">Data Portal</a></li>
                          <li><a href="#">Our research</a></li>
                          <li><a href="#">Forum downloads</a></li>
                        </ul>                     
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="tab">
                      <a href="#tab-2" data-toggle="tab">Convene</a>
                      <div class="tab-pane" id="tab-2">
                        <ul>
                          <li><a href="#">Ibrahim Governance Weekend (IGW)</a></li>
                          <li><a href="#">Now Generation Network (NGN)</a></li>
                          <li><a href="#">Our Partners</a></li>
                        </ul>                     
                      </div>  
                    </div>
                  </li>
                  <li>
                    <div class="tab">
                      <a href="#tab-3" data-toggle="tab">Foster</a>
                      <div class="tab-pane" id="tab-3">
                        <ul>
                          <li><a href="#">Now Generation Network (NGN)</a></li>
                          <li><a href="#">Fellowships</a></li>
                          <li><a href="#">Scholarships</a></li>
                        </ul>                     
                      </div>
                    </div>
                  </li>
                </ul>         
              </div>    
            </div>
          </div>
        </div>

      </div>

      <?php include('components/news-carousel.php');?>

      <div class="container bg-mif-75-additional-red feature-quote text-white pt-7 pb-6" style="background-image: url('img/Africa2.png')">
        <div class="row pt-7 pb-7 justify-content-center">
          <div class="col-6">
            <div class="quote h-100">
              <img src="img/dr-ibrahim-main-photo.jpg" class="img-fluid mb-3">
              <blockquote class="text-white">
                Do not take Africa for granted
              </blockquote>
              <cite>Mo Ibrahim</cite>
            </div>
          </div>
        </div>
      </div>

      <?php include('components/governance-carousel.php');?>

      <?php include('components/video-carousel.php');?>

      <?php include('components/social-carousel.php');?>



      <div class="container hero data-portal pt-6 pb-6 bg-mif-25-blue text-black">

        <div class="row">
          <div class="col-6 content-block p-6">
            <h1>Explore and compare&hellip;</h1>
            <h3 class="my-5">over 300 measures of data yourself using our data portal</h3>
            <p><a href="#" class="btn btn-primary">View the online data portal</a></p>
          </div>
          <div class="col-6">
            <div class="africa-map">
              <img src="img/Africa3.png" class="map">
              <img src="img/map-icon9.png" class="animate shrink" style="top: 14px; left: 244px;">
              <img src="img/map-icon1.png" class="animate" style="top: 60px; left: 150px;">
              <img src="img/map-icon2.png" class="animate" style="top: 200px; left: 90px;">
              <img src="img/map-icon3.png" class="animate" style="top: 140px; left: 370px;">
              <img src="img/map-icon4.png" class="animate" style="top: 370px; left: 330px;">
              <img src="img/map-icon5.png" class="animate" style="top: 300px; left: 480px;">
              <img src="img/map-icon6.png" class="animate" style="top: 150px; left: 100px;">
              <img src="img/map-icon7.png" class="animate" style="top: 470px; left: 400px;">
              <img src="img/map-icon8.png" class="animate" style="top: 470px; left: 550px;">
              
            </div>
          </div>
        </div>  

      </div>

      <?php include('components/data-stories.php');?>


      <?php //include('components/title.php');?>

      <?php //include('components/hero.php');?>

      <?php //include('components/intro.php');?>

      <?php //include('components/boxes.php');?>

      <?php //include('components/testimonial.php');?>

      <?php include('components/footer.php');?>

    </div>

    <?php include('components/icon-bar.php');?>



<script>
let carousels = document.querySelectorAll('.carousel');
//console.log(carousels);  

carousels.forEach((carousel) => {
  let items = carousel.querySelectorAll('.carousel-item');
  items.forEach((el) => {
    const minPerSlide = 5
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
          next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
  });  
});
</script>

    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <script type="module" src="js/main.js"></script>

  </body>

</html>
