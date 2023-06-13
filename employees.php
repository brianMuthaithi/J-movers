<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Form</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>
<body>
<!---------------------Employee Registration Form---------------------->
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-md-4 col-4" style="padding-left: 30px; padding-top: 10px; height: auto;
         border-radius: 7px; margin: 10vh auto auto; background-color: rgba(0, 0, 0, 0.8); width: 65%;">
            <h3 style="text-decoration: underline; font-weight: bold; color: white; text-align: center">EMPLOYEES REGISTRATION FORM</h3>
            <form action="emp_bck.php" method="post">
                <div class="form-group">
                    <label for="ename" style="color: white">Full Name:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="ename" required>
                </div>
                <div class="form-group">
                    <label for="eid" style="color: white">ID No. :</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="eid" required>
                </div>
                <div class="form-group">
                    <label for="e_email" style="color: white">Email Address:</label><br>
                    <input type="email" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="e_email" required>
                </div>
                <div class="form-group">
                    <label for="er" style="color: white">Area of Residence:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="er" required>
                </div>
                <div class="form-group">
                    <label for="ephn" style="color: white">Phone No. :</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="ephn" required>
                </div>
                <div class="form-group">
                    <label for="dept" style="color: white">Department:</label><br>
                    <select class="form-control" style="width: 90%; height: 30px; border-radius: 5px;" name="dept">
                        <option>PoS Staff</option>
                        <option>Loaders</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="do_ee" style="color: white">Date of Employment:</label><br>
                    <input type="date" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="do_ee" required>
                </div>
                <button style="height: 35px; margin-top: 10px; width: 200px; border-radius: 5px; background-color: #29c72f" name="btn_emp">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
