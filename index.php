 <!-- head -->
<?php include 'inc/head.php'; ?>

  <body>

    <!-- social -->
    <?php include 'inc/socialbar.php'; ?>
    
    <!-- main bar -->
    <?php include 'inc/main.php'; ?>

<!-- registration modal -->
<?php include 'inc/reg-form.php'; ?>

    <!-- nav-bar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 
                  <li class="nav-item">
                      <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Gallery
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="photo.php">Photo Gallery</a></li>
                      <li><a class="dropdown-item" href="video.php">Video Gallery</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="/support.php">Support</a></li>
               
                  </ul>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                  </li>
              </li>
                 
              </ul>
              <form class="d-flex">
                 
              </form>

<div class="mx-2">
      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">JOIN US</button>
</div>

          </div>
      </div>
  </nav>

<!-- slise-bar -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="img/slider1.jpg" class="d-block w-100" alt="RASTRIYA VIDYARTHI SABHA">
          <div class="carousel-caption ">
            <!-- <h2>WELCOME To RASTRIYA VIDYARTHI SABHA</h2> -->
            <!-- <p>Technology and Web-Development</p>
            <button type="button" class="btn btn-danger">Tech-Knowledge</button>
            <button type="button" class="btn btn-success">Web-Development</button> -->
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="img/slider2.jpg" class="d-block w-100" alt="RASTRIYA VIDYARTHI SABHA">
          <div class="carousel-caption ">
              <!-- <h2 class="text-danger">बाल पोषण कार्यक्रम</h2> -->
              <!-- <p>Technology and Web-Development</p>
                <button type="button" class="btn btn-primary">Technologyy</button>
                <button type="button" class="btn btn-success">Web-Development</button>
                <button type="button" class="btn btn-danger">Tech-Knowledge</button> -->
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img  src="img/slider3.jpg" class="d-block w-100" alt="RASTRIYA VIDYARTHI SABHA">
          <div class="carousel-caption ">
              <!-- <h2>WELCOME To RASTRIYA VIDYARTHI SABHA</h2> -->
              <!-- <p>Technology and Web-Development</p>
                <button type="button" class="btn btn-primary">Technologyy</button>
                <button type="button" class="btn btn-success">Web-Development</button>
                <button type="button" class="btn btn-danger">Tech-Knowledge</button> -->
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="img/slider4.jpg" class="d-block w-100" alt="RASTRIYA VIDYARTHI SABHA">
          <div class="carousel-caption ">
              <!-- <h2>WELCOME To RASTRIYA VIDYARTHI SABHA</h2> -->
              <!-- <p>Technology and Web-Development</p>
                <button type="button" class="btn btn-primary">Technologyy</button>
                <button type="button" class="btn btn-success">Web-Development</button>
                <button type="button" class="btn btn-danger">Tech-Knowledge</button> -->
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="img/slider5.jpg" class="d-block w-100" alt="RASTRIYA VIDYARTHI SABHA">
          <div class="carousel-caption ">
              <!-- <h2>WELCOME To RASTRIYA VIDYARTHI SABHA</h2> -->
              <!-- <p>Technology and Web-Development</p>
                <button type="button" class="btn btn-primary">Technologyy</button>
                <button type="button" class="btn btn-success">Web-Development</button>
                <button type="button" class="btn btn-danger">Tech-Knowledge</button> -->
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="img/slider6.jpg" class="d-block w-100" alt="RASTRIYA VIDYARTHI SABHA">
          <div class="carousel-caption ">
              <!-- <h2>WELCOME To RASTRIYA VIDYARTHI SABHA</h2> -->
              <!-- <p>Technology and Web-Development</p>
                <button type="button" class="btn btn-primary">Technologyy</button>
                <button type="button" class="btn btn-success">Web-Development</button>
                <button type="button" class="btn btn-danger">Tech-Knowledge</button> -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


<!-- degignation holdres -->
<div class="container text-center my-5" >
  <div class="row bg-light">
    <div class="col">
      
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/premdeep.png" alt="Premdeep jaysawal">
    
        <h4><b>प्रेमदीप जायसवाल</b></h4>
        <h5>राष्ट्रीय अध्यक्ष</h5>
        <!-- एवं 
        <p>जिला पंचायत सदस्य</p>  -->
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
     
    </div>
    <!-- <div class="col">
      
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/piyush.png" alt="Piyush shukla">
    
        <h4><b>पीयूष शुक्ल </b></h4>
        <h5>संगठन प्रमुख </h5> 
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
     
    </div> -->
    <div class="col">
     
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/ranjeet.png" alt="Ranjeet yadav">

    
      <h4><b> रंजीत यादव 'रीशू'</b></h4>
      <h5>जिला संगठन प्रमुख</h5>
      <p> (सीतापुर)</p>  
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      
    </div>
  </div>
</div>

<!-- all dignities -->
<div class="container">
  <div class="d-grid gap-2">
    <button class="btn btn-outline-danger border-5" onclick="document.location='dignities.php'" type="button">KNOW ALL DIGNITIES</button>
  </div>
</div>
<!-- OUR MISSIONS -->
<div class="container bg-light">
<div class="px-4 py-5 my-5 text-center ">
  <h3 class="display-5 fw-bold">OUR MISSION</h3>
  <div class="col-lg-6 mx-auto ">
    <p class="lead mb-4"><b> The mission of <i> Rashtriya Vidyarthi Sabha</i> is to develop <i>Culture</i> along with <i> Education</i> in the students and society.</b></p>
    </div>
  </div>
</div>

<!-- ideal -->
<div class="container">
  <div class="d-grid gap-2">
    <button class="btn btn-outline-primary border-5"  type="button" ><b>OUR IDEALS</b>  </button>
  </div>
</div>

<div class="container my-3  mobileview">
  <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"></strong>
            <h3 class="mb-0">Swami Vivekanand</h3><br>
            <div class="mb-1 text-muted"></div>
            <p class="card-text mb-auto"><b> " ARISE, AWAKE AND DO NOT STOP UNTIL THE GOAL IS REACHED."</b></p>
          </div>
          <div class="col-auto  d-lg-block center">
            <img class="bd-placeholder-img " width="200" height="250" src="img/vivekanand.jpg" alt="Swami Vivekanand">
         </div>
        </div>
      </div>
      <div class="col-md-6 p">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success"></strong>
            <h3 class="mb-0">Pandit Ganesh Shankar Vidyarthi</h3>
            <div class="mb-1 text-muted"></div>
            <p class="mb-auto"><b> " We are neither Hindu nor Muslim, the welfare of the motherland is our religion and it is our duty to face its obstacles."</b></p>
          </div>
          <div class="col-auto  d-lg-block">
            <img class="bd-placeholder-img" width="200" height="250" src="img/Pandit_Ganesh_Shankar_Vidyarthi.jpg" alt="Pandit Ganesh Shankar Vidyarthi">
  
          </div>
        </div>
      </div>
    </div>
  <div class="row mb-2">
      <div class="col-md-6 c">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-auto  d-lg-block ">
            <img class="bd-placeholder-img" width="200" height="250" src="img/Chandra Shekhar Azad.jfif" alt="Chandra Shekhar Azad">
         </div>
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"></strong>
            <h3 class="mb-0">Chandra Shekhar Azad</h3>
            <div class="mb-1 text-muted"></div>
            <p class="card-text mb-auto"><b> " Dont's see others doing better than you, beat your records everyday because success is a fight between you and yourself." </b></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 a">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-auto  d-lg-block text-center">
          <img class="bd-placeholder-img" width="200" height="250" src="img/kalam.jfif" alt="A. P. J. Abdul Kalam">
         </div>
         <div class="col-md-12 col-6 col-sm-6 col-lg-6">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"></strong>
            <h3 class="mb-0">A. P. J. Abdul Kalam</h3>
            <div class="mb-1 text-muted"></div>
            <p class="card-text mb-auto"><b> " Confidence and Hard work is the best medicine to kill the disease called failure. It will make you successful person." </b></p>
          </div></div>
        </div>
      </div>
   
    </div>
</div>

<!--footer -->
<?php include 'inc/footer.php'; ?>

  </body>
</html>