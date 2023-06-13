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
<!-------------------Group Members Registration Form------------------->
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-md-4 col-4" style="padding-left: 30px; padding-top: 10px; height: auto; border-radius: 7px; margin: 10vh auto auto; background-color: rgba(0, 0, 0, 0.8); width: 65%;">
            <h3 style="text-decoration: underline; font-weight: bold; color: white; text-align: center">GROUP MEMBERS REGISTRATION FORM</h3>
            <form action="grp_mem_bck.php" method="post">
                <div class="form-group">
                    <label for="f_name" style="color: white">Full Name:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="f_name" required>
                </div>
                <div class="form-group">
                    <label for="i_d" style="color: white">ID No. :</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="i_d" required>
                </div>
                <div class="form-group">
                    <label for="e_mail" style="color: white">Email Address :</label><br>
                    <input type="email" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="e_mail" required>
                </div>
                <div class="form-group">
                    <label for="a_r" style="color: white">Area of Residence:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="a_r" required>
                </div>
                <div class="form-group">
                    <label for="grp_i" style="color: white">Group In:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="grp_i" required>
                </div>
                <div class="form-group">
                    <label for="ph_n" style="color: white">Phone No. :</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="ph_n" required>
                </div>
                <div class="form-group">
                    <label for="p_s" style="color: white">Produce Specialty:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="p_s" required>
                </div>
                <div class="form-group">
                    <label for="gmdor" style="color: white">Date of Registration:</label><br>
                    <input type="date" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="gmdor" required>
                </div>
                <button style="height: 35px; margin-top: 10px; width: 200px; border-radius: 5px; background-color: #29c72f" name="btn_gindr">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>