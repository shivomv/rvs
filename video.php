 <!-- head -->
 <?php include 'inc/head.php'; ?>
 
  <body>
    <!--social -->
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
                      <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Gallery
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="photo.php">Photo Gallery</a></li>
                      <li><a class="dropdown-item" href="video.php">Video Gallery</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="contact.php">Support</a></li>
                      
                  </ul>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                  </li>
              </li>
                 
              </ul>
              <form class="d-flex">
                 
              </form>

<div class="mx-2">
      <button class="btn btn-danger" onclick="document.location='index.php'">JOIN US</button>
</div>

          </div>
      </div>
  </nav>


<!-- ABOUT-->
<div class="container text-center"><h2>Video Gallery</h2></div>
<div class="album py-5 bg-light">
  <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<?PHP 

include 'conn.php';

// if($conn){
// 	echo "connection succussful";
// }else{
// 	echo "no connection";
// }

$query = "SELECT * FROM `video` order by id DESC ";

$queryfire = mysqli_query($conn, $query);
  $num = mysqli_num_rows($queryfire);

if($num > 0){
  while($video = mysqli_fetch_array($queryfire)){
    ?>

  <!-- card- -->
        <div class="col">
            <div class="card shadow-sm">
            <iframe width='100%' height='225' 
    src="https://www.youtube.com/embed/<?php echo $video['video_id']?>" allowfullscreen="allowfullscreen">
    </iframe>                <div class="card-body text-center" >
                <h6>Video Discription</h6> 
                <?php echo $video['dis'];?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        
   <?php		
  }
}
?>     
    </div>
  </div>
</div>

<!--footer -->
<?php include 'inc/footer.php'; ?>

  </body>
</html>