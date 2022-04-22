<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Registration</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180">
    <link rel="icon" href="assets/vvikas.png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg"
        color="#7952b3">
    <link rel="icon" href="assets/vvikas.png">
    <meta name="theme-color" content="#7952b3">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

        /* Show it is fixed to the top */
        body {
            min-height: 75rem;
            padding-top: 4.5rem;

            font-family: 'Poppins';
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: #DF3C4A !important;
        }

        .card {
            background-color: transparent !important;
            border: aliceblue;
        }

        .p-5 {
            padding: 1rem !important;
        }

        .bg-imgg {
            background: url(bg.png);
            background-size: 364px;
        }

        .lead {
            padding: 1px 10px 16px 12px;
            ;
        }


        .footer-img {
            background: url(bgg.png);
            background-size: 534px 219px;
            background-repeat: no-repeat;
        }

        .py-3 {
            padding-bottom: 0rem !important;
        }

        .alert {
            margin-bottom: 2rem !important;
        }

        .modal-header {
            border-bottom: 0px !important;
        }

        .modal-content {
            width: 63%;
            margin-left: 90px;
        }

        .modal-body {
            margin-top: -43px;
        }
    </style>


    <!-- Custom styles for this template -->

</head>

<body style="background: #FDF3DA;" <?php if (isset($_GET['result'])) {
    ?>
    class="modal-open" style="overflow: hidden; padding-right: 0px;"
    <?php
} ?>>


    <?php
    if (isset($_GET['result'])) {
        ?>
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade show" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" style="display: block;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> </h5>

                </div>
                <div class="modal-body">
                    <button type="button" class="btn-close" style="margin-left: 258px;margin-top: 3px;" onclick="fun()">
                    </button>
                    <div class="container1">
                        <?php
                                    $value = $_GET['result'];
        if ($value == "success") {
            ?>

                        <br>
                        <center> User Registered successfully. </center> <br>
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-check2-circle" viewBox="0 0 16 16" style="color: green;background: azure;">

                                <path
                                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z">
                                </path>
                                <path
                                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z">
                                </path>
                            </svg>
                        </center>

                        <?php
        } elseif ($value == "failed") {
            ?>
                        <br>
                        <center> Error in uploading. Please try after sometime </center> <br>
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                style="color: red;background: azure;" fill="currentColor"
                                class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                            </svg>

                        </center>
                        <?php
                            //echo "Error in uploading. Please try after some time... ";
        } elseif ($value == "duplicate") {
            ?><br>
                        <center> User already registered.</center> <br>
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                style="color: red;background: azure;" fill="currentColor"
                                class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                            </svg>
                        </center>
                        <?php
        } ?>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        function fun() {
            window.location = "index.php";
        }
        // $('#staticBackdrop').delay(3000).fadeOut('medium');
        // //$('.modal-backdrop').delay(4000).removeClass("show")

        // window.setTimeout(function() {
        //     //alert("helo");
        //     $('.modal-backdrop').removeClass("show");
        //     window.location = "index.php";
        // }, 3000);
    </script>
    <div class="modal-backdrop fade show"></div>
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
        <div style="white-space: nowrap;" class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="#"> <img style="margin-right: 12px;" src="assets/vvikas.png"
                    class="rounded float-start" width="34" height="28 " alt="..."> VIJAY VIKAS ACADEMY </a>

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

    <main class="container bg-imgg" style="margin-top: -31px;">
        <div class="p-5 rounded">
            <p>
                <center style="color:#D80000"> GUIDANCE PROGRAMME </center>
            </p>
            <p class="lead">Enroll now to experience the whole new dimension
                of school and Higher Education
            </p>

            <div class="card" style="width: 18rem;">

                <div class="card-body" style="background: #C9A885; border-radius: 25px;">
                    <h5 class="card-title">
                        <center> COURSE </center>
                    </h5>
                    <hr>

                    <p class="card-text">
                        <center>
                            NEET <br>
                            JEE <br>
                            CA <br>
                            CIVILS </center>
                    </p>

                </div>

                <br>

                <div class="card-body" style="background: #27D1B3; border-radius: 25px;">
                    <h5 class="card-title">
                        <center> CLASSES </center>
                    </h5>
                    <hr>

                    <p class="card-text">
                        <center>
                            Class 9 <br>
                            Class 10<br>
                            Class 11 <br>
                            Class 12</center>
                    </p>
                </div>



                <br>

                <div class="card-body" style="background: #FF8585; border-radius: 25px;">
                    <h5 class="card-title">
                        <center> TIME </center>
                    </h5>
                    <hr>



                    <p class="card-text">
                        <center>
                            Date : 24 <br>
                            Day : Sunday <br>
                            Time : 4.00pm to 7.00pm
                        </center>
                    </p>

                </div>



            </div>
        </div>

        <p>
            <center style="color:#D80000"> CHIEF GUEST</center>
        </p>
        <p>
            <center> Dr. Sharmila</center>
        </p>
        <p class="lead">Managing Director
            4Q Guidance Training & Development Academy &
            Vijay Vikas Academy renowned NEET,JEE & CA faculty team
        </p>
        <br> <br>
        </div>
    </main>
    <div style="margin-top: -44px;width: 90%;border-radius: 13px;background: #ffffff;" class="container">
        <br>
        <h5>
            <center style="color: #8D5D00"> REGISTER HERE</center>
        </h5>
        <hr>
        <form action="index.php" method="POST" class="row g-3">
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
                <input type="text" name="mail" class="form-control" id="inputAddress" placeholder="Eg: demo@gmail.com"
                    required>
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
                <button
                    style="background: #FFD076;border-radius: 33px;border: aliceblue;margin-left: 90px;margin-bottom: -15px;"
                    type="submit" class="btn btn-primary">Enroll Now</button>
            </div>
        </form>
    </div>

    <div class="footer-img container">
        <footer class=" d-flex flex-wrap justify-content-between align-items-center py-3 my-4">


            <div style="margin-top: 125px;" class="col">
                <p style="font-size: 11px;"> Venue </p>
                <p style="font-size: 11px;"> Annalakshmi Hall, By Pass, Perundurai </p>
            </div>
            <div style="margin-top: 140px;" class="col">
                <p style="font-size: 11px;"> Contact us / Whatsapp </p>
                <p style="font-size: 11px;"> 7373773738 / 7373717773 </p>
            </div>
            <br>
            <br>
        </footer>
    </div>

</body>

</html>