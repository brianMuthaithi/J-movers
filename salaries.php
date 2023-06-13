<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>
<body>
    <div class="row">
        <div class="col-1 col-md-1 col-sm-1 col-lg-1"></div>
        <div class="col-10 col-md-10 col-sm-10 col-lg-10">
            <div class="container">
                <table class="table table-dark table-hover">
                    <h2>Loaders</h2>
                    <tr>
                        <th>NAME</th>
                        <th>VEHICLES ASSIGNED</th>
                        <th>TYPE OF VEHICLES</th>
                        <th>SET SALARY</th>
                        <th>TOTAL AMOUNT</th>
                        <th>DELETE</th>
                        <th>UPDATE</th>
                    </tr>

                    <?php
                    $con = mysqli_connect('localhost', 'root', '');

                    //Prepare the select query
                    $select_query = "";

                    //Execute the select query
                    $sales = mysqli_query($con , $select_query);

                    //Loop the data to appear row by row
                    while ($row = mysqli_fetch_assoc($sales)){
                        extract($row);
                        echo "  <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href='#' class='btn btn-danger'>DELETE</a></td>
                            <td><a href='#' class='btn btn-primary'>UPDATE</a></td>
                        </tr>";
                    }
                    ?>
                </table>
                <br><br>
                <a href="#" class="btn btn-outline-primary">Back</a>
            </div>
        </div>
        <div class="col-1 col-md-1 col-sm-1 col-lg-1"></div>

        </div>
</body>
</html>