
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Registration Form </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="assets/vvikas.png">
        <link rel="icon" href="assets/vvikas.png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="assets/vvikas.png">
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="assets/vvikas.png">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        min-height: 75rem;
        padding-top: 4.5rem;
        font-family: 'Poppins';
        }

        .container {
    padding: 150px 47px;
}

            .bg-dark {
            background-color: #DF3C4A!important;
            }

            .footer-img {
                background: url(bgg.png);
                background-size: 534px 219px;
                background-repeat: no-repeat;
            }

            .card{
                background-color: transparent!important;
                border: aliceblue;
            }

            .bg-img{

            background: url(bg.png);
            background-repeat: no-repeat;
            background-size: 1887px 633px
            }

            .alert{
                margin-bottom: 2rem!important;
            }

            @media (min-width: 1400px){
                .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
                    max-width: 1930px!important;
                }
            }

            @media only screen and (min-width: 1800px) and (max-width: 2500px) {
                .top-text-with-logo {
                    margin-left: 1013px!important;
                }
            }

            @media (min-width: 1400px){
               
            }
    </style>

  </head>
  <body style="background: #FDF3DA;" class="d-flex flex-column h-100">
  <?php
    if (isset($_GET['success'])) {
        ?>
        <div class="alert alert-primary" role="alert">
          <center>    Registered successfully </center>
        </div>
        <?php
    }elseif(isset($_GET['failed'])){
        ?>
<div class="alert alert-danger" role="alert">
          <center> User already registered ... </center>
        </div>
    <?php
    }
?>  

            <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="//codeply.com"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </div>
                <div style="white-space: nowrap;"  class="mx-auto order-0">
                    <a class="navbar-brand mx-auto" href="#"> <img  style="margin-right: 12px;" src="assets/vvikas.png" class="rounded float-start" width="34" height="28 " alt="..."> VIJAY VIKAS ACADEMY </a>
                   
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </div>
            </nav>
<!-- 
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                        <div class="mx-auto order-0">
                    <a class="navbar-brand mx-auto" href="#">Navbar 2</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                            <div class="container-fluid">
                                <a class="navbar-brand top-text-with-logo" href="#"> <img style="margin-right: 12px;" src="assets/vvikas.png" class="rounded float-start" width="34" height="28 " alt="...">  <center style="margin-left: 5px;"> VIJAY VIKAS ACADEMY  </center></a>
                                
                            
                                </div>
                            </div>
            </nav>
-->       
            <main class="container bg-img" style="margin-top: -31px;">


          
                <div style="margin-top: -141px;">

                    <p> <center style="color:#D80000"> GUIDANCE PROGRAMME </center>  </p>
                    <p class="lead">Enroll now to experience the whole new dimension
                        of school and Higher Education
                    </p>
                </div>
           
                
               
               
        
                <div class="row">
               
                    <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body" style="background: #C9A885; border-radius: 25px;">
                        <h5 class="card-title">  <center> COURSE </center></h5>
                        <hr>
                        
                        <p class="card-text"> <center> 
                            NEET <br>
                                JEE <br>
                                CA <br>
                                CIVILS </center>
                        </p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;"  >
                            <div class="card-body" style="background: #27D1B3; border-radius: 25px;">
                            <h5 class="card-title">  <center> CLASSES </center></h5>
                                    <hr>
                                    
                                    <p class="card-text"> <center> 
                                        Class 9 <br>
                                        Class 10<br>
                                        Class 11 <br>
                                        Class 12</center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;" >
                            <div class="card-body" style="background: #FF8585; border-radius: 25px;">
                            <h5 class="card-title">  <center> TIME </center></h5>
                                    <hr>
                                    


                                    <p class="card-text"> <center> 
                                    Date : 24 <br>
                                    Day  : Sunday <br>
                                    Time : 4.00pm to 7.00pm 
                                             </center>
                                    </p>
                            </div>
                            </div>
                        </div>
                </div>
                <br>
                        <p > <center style="color:#D80000"> CHIEF GUEST</center>  </p>
                <p> <center> Dr. Sharmila</center>  </p>
                    <p class="lead">Managing Director
                        4Q Guidance Training & Development Academy &
                        Vijay Vikas Academy renowned NEET,JEE & CA faculty team
                </p>
            </main>

           
                <div style="width: 50%;margin-top: -85px;border-radius: 13px;background: #ffffff;" class="container">
                
                    <h5 style="margin-top: -116px;" >   <center style="color: #8D5D00"> REGISTER  HERE</center></h5>
                    <hr>
                    <form style="margin-bottom: -164px;" action="index.php" method="POST" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Class</label>
                            <input type="text" name="class" class="form-control" id="inputPassword4" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Mail Id</label>
                            <input type="text" name="mail" class="form-control" id="inputAddress"
                                placeholder="Eg: demo@gmail.com" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress2" class="form-label">Contact Number 1</label>
                            <input type="number" name="number1" class="form-control" id="inputAddress2" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputAddress2" class="form-label">Contact Number 2 (optional)</label>
                            <input type="number" name="number2" class="form-control" id="inputAddress2">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label"> Father Name</label>
                            <input type="text" class="form-control" name="fname" id="inputCity" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label"> Father Number</label>
                            <input type="text" class="form-control" name="fnumber" id="inputCity" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label"> Mother Name</label>
                            <input type="text" class="form-control" name="mname" id="inputCity" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label"> Mother Number (optional)</label>
                            <input type="text" class="form-control" name="mnumber" id="inputCity">
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Course</label>
                            <select id="inputState" name="course" class="form-select">
                                <option selected disabled>Choose...</option>
                                <option value="JEE"> JEE</option>
                                <option value="NEET"> NEET</option>
                                <option value="CA"> CA </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label"> Field type </label>
                            <select id="inputState" name="field_type" class="form-select">
                                <option selected disabled>Choose...</option>
                                <option value="Crash Course"> Crash Course </option>
                                <option value="Reputation"> Reputation</option>

                            </select>
                        </div>

                        <div class="col-12">
                            <center> 
                            <button style="background: #FFD076;border-radius: 33px;border: aliceblue;" type="submit" class="btn btn-primary">Enroll Now</button>
                            </center>
                        </div>
                    </form>
                </div>
           
                <footer style="background-color: #FFDE67;" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p style="padding-left: 10px;" class="col-md-4 mb-0 ">Venue <br>  Annalakshmi Hall, By Pass, Perundurai</p>

                    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    </a>

                    <ul class="nav col-md-4 justify-content-end">
                    

                    <p class="col-md-6 mb-0     "> Contact us / Whatsapp <br> 7373773738 / 7373717773</p>
                
                    </ul>
                </footer>

           
            


    
  </body>
</html>
