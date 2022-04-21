<?php

include_once("_backend_.php");
$db = new user();

$result = $db->get_all();
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title> Total Information </title>
    <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <style type="text/css" class="init">
        body {
            font-family: 'Poppins';
            background: floralwhite;
        }
    </style>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</head>

<body class="wide comments example dt-example-bootstrap5">
    <br>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>Class</th>
                <th>Mail_id</th>
                <th>Contact number_1</th>
                <th>Contact number_2</th>
                <th>Father name</th>
                <th>Father mobile</th>
                <th>Mother name</th>
                <th>Mother mobile</th>
                <th>Course</th>
                <th>Field_type</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($result as $key => $info) {
    //echo $info['name'];

          ?>
            <tr>
                <td><?=$key + 1?>
                </td>
                <td><?=$info['name']?>
                </td>
                <td><?=$info['class']?>
                </td>
                <td><?=$info['mail_id']?>
                </td>
                <td><?=$info['contact_number_1']?>
                </td>
                <td><?=$info['contact_number_2']?>
                </td>
                <td><?=$info['father_name']?>
                </td>
                <td><?=$info['father_mobile']?>
                </td>
                <td><?=$info['mother_name']?>
                </td>
                <td><?=$info['mother_mobile']?>
                </td>
                <td><?=$info['course']?>
                </td>
                <td><?=$info['field_type']?>
                </td>
            </tr>
            <?php
}

?>
        </tbody>

    </table>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-365466-5']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>

</html>