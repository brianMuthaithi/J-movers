<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">

    <style>
        body{
            background-size: cover;
            background-image: url("res/purple1.jpg");
            align-items: center;
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
<!----------------------------------REGISTRATION---------------------------------------->
    <div class="row" style="height: auto; margin-top: 10vh;">
        <div class="col-4 col-md-4 col-sm-4 col-lg-4"></div>
        <div class="col-4 col-md-4 col-sm-4 col-lg-4">
                <div class="dropdown dropright">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">REGISTRATION</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="ind_reg.php">LARGE SCALE FARMER</a>
                        <a class="dropdown-item" href="grp_reg.php">GROUP</a>
                        <a class="dropdown-item" href="grp_mem_reg.php">GROUP MEMBERS</a>
                        <a class="dropdown-item" href="employees.php">EMPLOYEES</a>
                    </div>
                </div>
            <!-------------------FLEET MGMT-------------------------->
                <div class="dropdown dropright">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">FLEET MANAGEMENT</button>
                    <div class="dropdown-content">
                        <a href="#" class="dropdown-item" style="width:auto; color: black;font-size: medium; font-family: 'Manjari Bold',serif" onclick="document.getElementById('id01').style.display='block'">DRIVER REGISTRATION</a>
                        <div id="id01" class="modal">
                            <form class="modal-content animate" action="drivers_bck.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <h3 style="text-decoration: underline; font-weight: bold;">DRIVER REGISTRATION</h3>
                                </div>
                                <div class="container">
                                    <input type="text" placeholder="Full Name" name="dname" required><br>
                                    <input type="number" style="width: 100%; height: 40px; border-radius: 5px;" placeholder="ID No." name="ddid" required><br>
                                    <input type="email"  style="width: 100%; height: 40px; border-radius: 5px;"placeholder="Email Address" name="dem" required><br>
                                    <input type="number" style="width: 100%; height: 40px; border-radius: 5px;" placeholder="Phone No." name="dphn" required><br>
                                    <input type="text" placeholder="Area of Residence" name="resd" required><br>
                                    <input type="text" placeholder="Vehicle Assigned" name="va" required><br>
                                    <input type="date" style="width: 100%; height: 40px; border-radius: 5px;" placeholder="Date of Employment" name="ddoe" required><br>
                                </div>
                                <div class="container">
                                    <button class="btn btn-primary" name="btn_dreg">Save</button>
                                </div>
                            </form>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById('id01');
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>

                        <a href="#" class="dropdown-item" onclick="document.getElementById('id02').style.display='block'" style="width:auto; color: black;font-size: medium; font-family: 'Manjari Bold',serif">VEHICLE REGISTRATION</a>
                        <div id="id02" class="modal">
                            <form class="modal-content animate" action="vehicles_bck.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <h3 style="text-decoration: underline; font-weight: bold;">VEHICLE REGISTRATION</h3>
                                </div>
                                <div class="container">
                                    <input type="text" placeholder="Vehicle Reg No." name="vreg" required><br>

                                    <label for="tovv">Type of Vehicle:</label><br>
                                    <select class="form-control" style="width: 100%; height: 40px; border-radius: 5px;"name="tovv" required>
                                        <option>Pickup</option>
                                        <option>Lorry</option>
                                        <option>Trailer</option>
                                        <option>Refrigerated Truck</option>
                                    </select><br>

                                    <input type="text" placeholder="Recommended Load(Tonnes)" name="rl" required><br>
                                    <input type="text" placeholder="Cost/Km" name="ckm" required><br>
                                    <input type="text" placeholder="Trips" name="trps" required><br>
                                    <label for="dt">Date:</label><br>
                                    <input type="date" style="width: 100%; height: 40px; border-radius: 5px;" name="dt" placeholder="Date" required><br>
                                </div>
                                <div class="container">
                                    <button class="btn btn-primary" name="btn_vreg">Save</button>
                                </div>
                            </form>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById('id02');
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>

                        <a href="#" class="dropdown-item" onclick="document.getElementById('id03').style.display='block'" style="width:auto; color: black;font-size: medium; font-family: 'Manjari Bold',serif">DRIVER OFFENSES</a>
                        <div id="id03" class="modal">
                            <form class="modal-content animate" action="offenses_bck.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <h3 style="text-decoration: underline; font-weight: bold;">OFFENSES</h3>
                                </div>
                                <div class="container">
                                    <input type="text" placeholder="Driver Name" name="d_name" required><br>
                                    <input type="number" placeholder="Driver ID No." style="width: 100%; height: 40px; border-radius: 5px;" name="d_id" required><br>
                                    <input type="text" placeholder="Offence" name="off" required><br>
                                    <label for="pun">Punishment:</label><br>
                                    <select class="form-control" style="width: 100%; height: 40px; border-radius: 5px;" name="pun" required>
                                        <option>Surcharge</option>
                                        <option>1st Warning Letter</option>
                                        <option>2nd Warning Letter</option>
                                        <option>3rd Warning Letter</option>
                                        <option>1st Suspension</option>
                                        <option>2nd Suspension</option>
                                        <option>Termination</option>
                                    </select><br>
                                    <label for="do_p">Date of Punishment:</label><br>
                                    <input type="date" style="width: 100%; height: 40px; border-radius: 5px;" name="do_p" placeholder="Date of Punishment" required><br>
                                    <label for="do_res">Date of Resumption:</label><br>
                                    <input type="date" style="width: 100%; height: 40px; border-radius: 5px;" name="do_res" placeholder="Date of Resumption" required><br>
                                </div>
                                <div class="container">
                                    <button class="btn btn-primary" name="btn_off">Save</button>
                                </div>
                            </form>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById('id03');
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>

                        <a href="#" class="dropdown-item" onclick="document.getElementById('id04').style.display='block'" style="width:auto; color: black;font-size: medium; font-family: 'Manjari Bold',serif">VEHICLE EXPENSES</a>
                        <div id="id04" class="modal">
                            <form class="modal-content animate" action="vexpenses_bck.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <h3 style="text-decoration: underline; font-weight: bold;">VEHICLE EXPENSES</h3>
                                </div>
                                <div class="container">
                                    <input type="text" placeholder="Vehicle Reg No." name="v_reg" required><br>
                                    <label for="tove">Type of Vehicle:</label><br>
                                    <select class="form-control" style="width: 100%; height: 40px; border-radius: 5px;" name="tove">
                                        <option>Pickup</option>
                                        <option>Lorry</option>
                                        <option>Trailer</option>
                                        <option>Refrigerated Truck</option>
                                    </select><br>
                                    <input type="text" placeholder="Fuel" name="fl" required><br>
                                    <input type="text" placeholder="Service Charge" name="sc" required><br>

                                    <label for="dtee">Date:</label><br>
                                    <input type="date" style="width: 100%; height: 40px; border-radius: 5px;" name="dat" placeholder="Date" required><br>
                                </div>
                                <div class="container">
                                    <button class="btn btn-primary" name="btn_expense">Save</button>
                                </div>
                            </form>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById('id04');
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                    </div>
                </div>
        </div>
        <div class="col-4 col-md-4 col-sm-4 col-lg-4"></div>
    </div>
<!---------------------------------ORDERS/ADMIN------------------------------------------>
    <div class="row" style="height: auto; margin-top: 2vh;">
        <div class="col-4 col-md-4 col-sm-4 col-lg-4"></div>
        <div class="col-4 col-md-4 col-sm-4 col-lg-4">
            <a href="orders.php" class="btn-primary btn btn-group">ORDERS</a>
            <a href="admin-portal.php" class="btn-primary btn btn-group" >ADMIN PORTAL</a>
        </div>
        <div class="col-4 col-md-4 col-sm-4 col-lg-4"></div>
    </div>

</body>
</html>
