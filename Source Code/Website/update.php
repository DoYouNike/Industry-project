<!DOCTYPE html>
<html lang="en">

<?php

session_start();
if(!isset($_SESSION['username'])){
   header("Location:landingpage.php");
}

include("php/dbConnection.php");

if (!connect()) {
    echo 'Connection to DB failed';
}
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CompareTheHealthcare</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">
</head>
<body>

<?php
include 'nav.php';
?>

<form action="adminpage.php" style="margin: 0; padding: 0; display: inline;">
    <input style="display: inline;" type="submit" value="Back"/>
</form>
<form action="logout.php" style="margin: 0; padding: 0; display: inline;">
    <input style="display: inline;" type="submit" value="Logout"/>
</form>

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    
    <div class="" id="top">
        <div class="container animate-bottom">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <h1 class="mb-4" style="">Update Details</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-8 mx-auto">
                    <form action="/2019-projects/team4/results.php" method="GET">
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <input required type="text" placeholder="Enter the procedure" name="procedure" class="form-control my-2" id="procedure">
                            </div>
                            <div class="form-group col-md-3">
                                <select required class="form-control my-2" name="state">
                                    <option value="" disabled selected hidden>State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <input required type="text" placeholder="Zip Code" name="zipCode"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-6">
                                <input required type="text" placeholder="providerStreetAddress" name="providerStreetAddress"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="text" placeholder="providerCity" name="providerCity"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="number" placeholder="providerId" name="providerId"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="text" placeholder="providerName" name="providerName"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="text" placeholder="RRHRRD" name="RRHRRD"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="number" placeholder="Year" name="Year"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="number" placeholder="TotalDischarge" name="TotalDischarge"
                                       class="form-control my-2">
                            </div>
                                                       
                            <div class="form-group col-md-3">
                                <input required type="number" placeholder="averageCoveredCharges" name="averageCoveredCharges"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="number" placeholder="averageTotalPayments" name="averageTotalPayments"
                                       class="form-control my-2">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="number" placeholder="averageMedicarePayments" name="averageMedicarePayments"
                                       class="form-control my-2">
                            </div>                                                                       
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-lg btn-success" id ="submitB">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
        <?php
        include 'footer.php';
        ?>
</body>

</html>
