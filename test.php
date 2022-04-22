<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if ($username == "admin" && $pass == "#PaPWskfjA$") {
        //setcookie("admin","lssdkfj23o7sldkfjKJFKDSJF3sd","/",)
        setcookie("admin", "lssdkfj23o7sldkfjKJFKDSJF3sd", time() + 86400 * 7, "/", $_SERVER['SERVER_NAME']);
        header("Location: info.php");
    } else {
        header("Location: login.php?failed");
    }
}

?>

<?php
echo "<pre>";

include_once("_backend_.php");

$db = new user();

$result = $db->get_all();
print_r($result);

foreach ($result as $key => $info) {
    echo $info['name'];
}
echo "</pre>";


?>

<main class="form-signin">
    <?php
    if (isset($_GET['failed'])) {
        ?>
    <div class="alert alert-danger" role="alert">
        username or password incorrect
    </div>
    <?php
    }
?>
    <form action="login.php" method="POST">
        <img class="mb-4" src="assets/vvikas.png" alt="" width="90" height="80">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
            <label for="floatingInput">Username</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

    </form>
</main>


<?php
include "_backend_.php";

$db = new user();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $mail = $_POST['mail'];
    $c_num_1 = $_POST['number1'];
    $c_num_2 = $_POST['number2'];
    $father_name = $_POST['fname'];
    $father_mobile = $_POST['fnumber'];
    $mother_name = $_POST['mname'];
    $mother_mobile = $_POST['mnumber'];
    $course = $_POST['course'];
    $filed_type = $_POST['field_type'];

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $insert_user = $db->insert_user($name, $class, $mail, $c_num_1, $c_num_2, $father_name, $father_mobile, $mother_name, $mother_mobile, $course, $filed_type);
    if ($insert_user == 1) {
        header("Location: index.php?success");
    } else {
        header("Location: index.php?failed");
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="assets/vvikas.png">
    <title> Registration page</title>
    <style>
        body {
            font-family: 'Poppins';
            background: floralwhite;
        }
    </style>
</head>

<body>
    <div>
        <center>
            <h1 style="margin-top: 10px"> Student Registration Form </h1>
        </center>
    </div>

    <div class="container">
        <?php
    if (isset($_GET['success'])) {
        ?>
        <div class="alert alert-primary" role="alert">
            Registered successfully
        </div>
        <?php
    }
?>
        <div class="row">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>