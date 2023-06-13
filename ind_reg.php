<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>
<body>
<!----------------Large Scale Farmer Registration Form------------>
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-md-4 col-4" style="padding-left: 30px; padding-top: 10px; height: auto; border-radius: 7px; margin: 10vh auto auto; background-color: rgba(0, 0, 0, 0.8); width: 65%;">
            <h3 style="text-decoration: underline; font-weight: bold; color: white; text-align: center">LARGE SCALE FARMERS' REGISTRATION FORM</h3>
            <form action="ind_reg_bck.php" method="post" style="width: 100%; height: 100%;">
                <div class="form-group">
                    <label for="fname" style="color: white">Full Name:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="fname" required>
                </div>
                <div class="form-group">
                    <label for="fid" style="color: white;">ID No. :</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="fid" required>
                </div>
                <div class="form-group">
                    <label for="email" style="color: white;">Email address:</label><br>
                    <input type="email" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="ar" style="color: white;">Area of Residence:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="ar" required>
                </div>
                <div class="form-group">
                    <label for="phn" style="color: white;">Phone No. :</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="phn" required>
                </div>
                <div class="form-group">
                    <label for="ps" style="color: white;">Produce Specialty:</label><br>
                    <input type="text" class="form-control" style="width: 90%; height: 30px; border-radius: 5px;" name="ps" required>
                </div>
                <div class="form-group">
                    <label for="dor" style="color: white;">Date of Registration:</label><br>
                    <input type="date" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="dor" required>
                </div>
                <button style="height: 35px; margin-top: 10px; width: 200px; border-radius: 5px; background-color: #29c72f" name="btn_indr">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>