<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>
<body>
<!---------------Group Registration Form------------------------>
    <div class="row">
        <div class="col-md-4 col-4 col-sm-4 col-lg-4" style="padding-left: 30px;
        padding-top: 10px; height: auto; border-radius: 7px; margin: 10vh auto auto; background-color: rgba(0, 0, 0, 0.8); width: 65%;">
            <h3 style="text-decoration: underline; font-weight: bold; color: white; text-align: center">GROUP REGISTRATION FORM</h3>
            <form action="grp_reg_bck.php" method="post">
                <div class="form-group">
                    <label for="gname" style="color: white">Group Name:</label><br>
                    <input type="text"  style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="gname" required>
                </div>
                <div class="form-group">
                    <label for="loc" style="color: white">Location:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="loc" required>
                </div>
                <div class="form-group">
                    <label for="gl" style="color: white">Group Leader:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="gl" required>
                </div>
                <div class="form-group">
                    <label for="glp" style="color: white">Group Leader Phone No. :</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="glp" required>
                </div>
                <div class="form-group">
                    <label for="top" style="color: white">Type of Produce:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="top" required>
                </div>
                <div class="form-group">
                    <label for="gdor" style="color: white">Date of Registration:</label><br>
                    <input type="date" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="gdor" required>
                </div>
                <button style="height: 35px; margin-top: 10px; width: 200px; border-radius: 5px; background-color: #29c72f" name="btn_grp">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
