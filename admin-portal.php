<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    
    <style>
        @media screen and (max-height: 450px) {
            .sdnv {padding-top: 15px;}
            .sdnv a {font-size: 18px;}
        }
        .sdnv{
            height: 100%;
            width: 200px;
            position: fixed;
            overflow-x: hidden;
            background-color: #090909;
            padding: 10px;
            opacity: 0.6;
        }
        .sdnv a{
            display: block;
            color: #ffffff;
            text-decoration: none;
            font-size: 25px;
            margin-top: 20px;
        }
        .sdnv a:hover{
            color: purple;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-4 col-md-4 col-sm-4 col-lg-4">
            <div class="sdnv">
                <a href="salaries.php">Salaries</a>
                <a href="#">Driver Penalties</a>
                <a href="#">Loading Cost</a>
                <a href="#">Vehicle Expenses</a>
            </div>
        </div>
        <div class="col-4 col-md-4 col-sm-4 col-lg-4"></div>
        <div class="col-4 col-md-4 col-sm-4 col-lg-4"></div>
    </div>


</body>
</html>