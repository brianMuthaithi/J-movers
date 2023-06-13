<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>
<body>
<!---------------------Orders Form------------------------->
    <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-4 col-4"></div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-4" style="padding-left: 30px;
        padding-top: 10px; height: auto; border-radius: 7px; margin: 10vh auto auto; background-color: rgba(0, 0, 0, 0.8); width: 65%;">
            <h3 style="text-decoration: underline; font-weight: bold; color: white; text-align: center">ORDER FORM</h3>
            <form action="orders_bck.php" method="post">
                <div class="form-group">
                    <label for="fgname" style="color: white">Farmer/Group Name:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="fgname" required>
                </div>
                <div class="form-group">
                        <label for="togo" style="color: white">Type of goods:</label><br>
                        <select class="form-control" style="width: 90%; height: 30px; border-radius: 5px;" name="togo" required>
                            <option>Cereals</option>
                            <option>Livestock</option>
                            <option>Perishable Goods eg Fish</option>
                            <option>Farm Inputs</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="wgt" style="color: white">Weight(Tonnes):</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="wgt" required>
                </div>
                <div class="form-group">
                    <label for="dst" style="color: white">Distance(Km):</label><br>
                    <input type="number" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="dst" required>
                </div>
                <div class="form-group">
                    <label for="asv" style="color: white">Assigned Vehicle:</label><br>
                    <input type="text" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="asv" required>
                </div>
                <div class="form-group">
                    <label for="tov" style="color: white">Type of Vehicle:</label><br>
                    <select class="form-control" style="width: 90%; height: 30px; border-radius: 5px;" name="tov" required>
                        <option>Pickup</option>
                        <option>Lorry</option>
                        <option>Trailer</option>
                        <option>Refrigerated Truck</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="doo" style="color: white">Date:</label><br>
                    <input type="date" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="doo" required>
                </div>
                <div class="form-group">
                    <label for="al" style="color: white">Assigned Loaders:</label><br>
                    <textarea rows="6" style="width: 90%; height: 30px; border-radius: 5px;" class="form-control" name="al" required></textarea>
                </div>

                <button style="height: 40px; margin-top: 10px; width: 300px; border-radius: 5px; background-color: #29c72f" name="btn_orders">Submit</button>
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-4"></div>
    </div>
</body>
</html>
