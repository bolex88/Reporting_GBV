<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Reporting GBV Mockup</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/fontawesome-all.js"></script>
</head>
<body>
     <!-- NAVBAR  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-primary py-2">
        <div class="container">
                <a class="navbar-brand text-white" href="#">Reporting GBV Cases</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
      </nav>
      <!-- NAVABAR END -->

       <!-- CAROUSEL SECTION -->
   <section id="carousel">
        <!-- <div class="carousel-container"> -->
         <div class="row">
             <div class="col-lg-12">
                      <!-- CAROUSEL SECTION START -->
                  <div id="carousel-images" class="carousel slide" data-ride="carousel">
                      <!-- indicators below image -->
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-images" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-images" data-slide-to="1"></li>
                          <li data-target="#carousel-images" data-slide-to="2"></li>
                          <li data-target="#carousel-images" data-slide-to="3"></li>
                          <li data-target="#carousel-images" data-slide-to="4"></li>
                          <li data-target="#carousel-images" data-slide-to="5"></li>
                      </ol>
                      <!-- indicators end -->
                      <!-- slides wrapper start -->
                      <div class="carousel-inner" >
                          <div class="carousel-item active">
                              <img src="img/GBV.jpg" alt="" class="d-block w-100">
                              <div class="carousel-caption">
                                  <h3>Gender Base Violence</h3>
                                  <p></p>
                              </div>
                          </div>
                          <div class="carousel-item">
                             <img src="img/GBV Care.png" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>Gender Base Violence Care</h3>
                                 <p></p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="img/stop-domestic-violence.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>A World Free of Violence</h3>
                                 <p></p>
                             </div>stop-domestic-violence
                         </div>
                         <div class="carousel-item">
                             <img src="img/16daysactivism-1.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>Hey STOP Abusing Women</h3>
                                 <p></p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="img/No-violence.png" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>Violence Is Not Good</h3>
                                 <p></p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="img/Violence free homes.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>A World Free of Violence</h3>
                                 <p></p>
                             </div>stop-domestic-violence
                         </div>
                      </div>
                      <!-- slides wrapper end -->
                      <!-- controls start -->
                      <a href="#carousel-images" class="carousel-control-prev" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a href="#carousel-images" class="carousel-control-next" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                  </div>
             </div>
         </div>
        <!-- </div> -->
    </section>
    <!-- CAROUSEL END -->

    <!-- PRODUCTS START -->
    <section id="products-category">
        <div class="row">
            <div class="col">
                <div class="container">
                    <h3 class="h3 text-center my-2">Types of Abuses</h3><hr>
                </div>
            </div>
        </div>
    </section>

    <section id="AbusesTypes">
            <div class="row mb-5">
                <div class="container">
                    <div class="col">
                                <div class="btn btn-3">
                                  <a href="{{route('sexuals.add')}}" class="btn btn-info">Sexual Abuse</a>
                                </div> <br/>
                                <div class="btn btn-1">
                                    <a href="#" class="btn btn-info">Physical Abuse</a>
                                </div> <br/>
                                 <div class="btn btn-2">
                                    <a href="#" class="btn btn-info">Domestic Violence or Abuse</a>
                                </div> <br/>  
                                 <div class="btn btn-4">
                                  <a href="#" class="btn btn-info">Psychological or Emotional Abuse</a>
                                </div> <br/>
                                 <div class="btn btn-5">
                                    <a href="#" class="btn btn-info">Discriminatory Abuse</a>
                                </div> <br/>
                                 <div class="btn btn-6">
                                    <a href="#" class="btn btn-info">Organisational or Institutional Abuse</a>
                                </div> <br/>
                                 <div class="btn btn-7">
                                    <a href="#" class="btn btn-info">Neglect or Acts of Omission</a>
                                </div> <br/>
                </div>
         </div>
    </section>
    <!-- PRODUCTS END HERE -->

    <!-- FOOTER -->
    <footer  class="bg-primary py-1">
       <p class="text-center py-2 text-white">Bolex88 &copy; 2019</p>
    </footer>

</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- script for toggle sidebar button -->
<script>
    // $(document).ready(function () {

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //         $('#content').toggleClass('active');
    //      });

    // });

</script>

<!--[if lt IE 9]--/>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</html>

