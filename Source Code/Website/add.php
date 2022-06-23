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

include 'writeFile.php';
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
include 'adminnav.php';
?>



<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="row">
    <div class="col-xl-10 mx-auto">
          <h1 class="mb-4" style="">Insert DRG</h1>
        </div>
        <div class="col-md-10 col-lg-10 col-xl-10 mx-auto ">
                     <form  action="javascript:void(0);" onsubmit = "insertDrg()"  method = "GET">          
                        <div class="form-row d-flex flex-row justify-content-center align-items-center" >
                        <div class="form-group col-md-3">
                                <input required type="number" placeholder="Drg Code" name="drgid"
                                       class="form-control my-2" id = "drgid1">
                            </div>
                            <div class="form-group col-md-3">
                                <input required type="text" placeholder="Enter the procedure" name="definition" class="form-control my-2" id="definition1" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                            </div>
                            </div>
                         <div class="form-row d-flex flex-row justify-content-center align-items-center">
                             <div class="">
                                 <button  type="submit" class="btn btn-block btn-lg btn-success" id ="submit1">Submit</button>
                             </div>
                         </div>
                            </form>
                            </div>
                            </div>
    <br><br>
        <div class="row">             
        <div class="col-xl-10 mx-auto">
          <h1 class="mb-4" style="">Insert Provider</h1>
        </div>
        <div class="col-md-12 col-lg-10 col-xl-10 mx-auto">
                    <form action="javascript:void(0);" onsubmit= "insertProvider()" method ="GET">
                        <div class="form-row d-flex flex-row justify-content-center align-items-center">
                        
                        <div class="form-group col-md-2">
                                <input required type="text" placeholder="Enter the ProviderName" name="ProviderName" class="form-control my-2" id="providerName" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                            </div>
                            <div class="form-group col-md-2">
                                <input required type="text" placeholder="Enter the Street" name="street" class="form-control my-2" id="street" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                            </div>
                            <div class="form-group col-md-1">
                                <select required class="form-control my-2" name="state" id="state">
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
                            <div class="form-group col-md-1.5">
                                <input required type="text" placeholder="City" name="City" class="form-control my-2" id="city" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                            </div>
                            <div class="form-group col-md-1.5">
                                <input required type="text" placeholder="ProviderRRHRRD" name="rrhrrd"
                                       class="form-control my-2" id="rrhrrd" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                            </div>

                        <div class="form-group col-md-1">
                                <input required type="number" placeholder="ZipCode" name="zipCode"
                                       class="form-control my-2" id = "zipcode">
                            </div>
                            </div>

                        <div class="form-row d-flex flex-row justify-content-center align-items-center">
                            <div class="">
                                <button  type="submit" class="btn btn-block btn-lg btn-success" id ="submit2">Submit</button>
                            </div>
                        </div>
                            </form>
                            </div>
                            </div>
    <br><br>
        <div class="row">
        <div class="col-xl-10 mx-auto">
          <h1 class="mb-4" style="">Insert Procedure Figure</h1>
        </div>
        <div class="col-md-12 col-lg-10 col-xl-10 mx-auto">
                    <form action="javascript:void(0);" onsubmit= "insertProcedure()" method = "GET">
                        <div class="form-row d-flex flex-row justify-content-center align-items-center">
                        <div class="form-group col-md-2">
                                <input required type="number" placeholder="Enter the DRG code" name="Drgid" class="form-control my-2" id="drgid2">
                            </div>
                            <div class="form-group col-md-2">
                                <input required type="number" placeholder="Enter the ProviderID" name="ProviderId" class="form-control my-2" id="providerId2">
                            </div>
                            
                            <div class="form-group col-md-1">
                                <input required type="number" placeholder="Year" name="year" class="form-control my-2" id="year">
                            </div>
                            <div class="form-group col-md-1.5">
                                <input required type="number" placeholder="TotalDischarge" name="discharge"
                                       class="form-control my-2" id ="discharge">
                            </div>

                        <div class="form-group col-md-1">
                                <input required type="number" placeholder="CoveredCharges" name="ACC"
                                       class="form-control my-2" id="ACC">
                            </div>
                            <div class="form-group col-md-1">
                                <input required type="number" placeholder="TotalPayments" name="ATP"
                                       class="form-control my-2" id = "ATP">
                            </div>
                            <div class="form-group col-md-1">
                                <input required type="number" placeholder="MedicarePayments" name="AMP"
                                       class="form-control my-2" id="AMP">
                            </div>
                            </div>

                        <div class="form-row d-flex flex-row justify-content-center align-items-center">
                            <div class="">
                                <button  type="submit" class="btn btn-block btn-lg btn-success" id ="submit3">Submit</button>
                            </div>
                        </div>
                            </form>
                            </div>
                            </div>
    
</header>
        <?php
        include 'footer.php';
        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    // get search parameters
    var apiCall;
    var id;
    var def;
    var pid;
    var pname;
    var street;
    var city;
    var state;
    var rrhrrd;
    var zipcode;
    var drgDef;
    var year;
    var totalD;
    var acc;
    var atp;
    var amp;

 
        function insertDrg()
        {
            id = document.getElementById("drgid1").value;
            def = document.getElementById("definition1").value;
            apicall = "http://localhost:5432/insertdrg?drgid=" + id + "&definition=" + def; 
            $.get(apicall, function(result){
            var response = result;
            //alert(response);
        });
        //$(document).ready(function () {
            createCookie("drgID", id, 10);
            createCookie("def", def, 10);
            window.location.href = "add.php";
        //});
        }

        function createCookie(name, value, days) {
            var expires;
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (30*1000));//(days * 24 * 60 * 60 * 1000));
               expires = "; expires=" + date.toGMTString();
            }
            else {
                expires = "";
            }
            document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
        }

      //  localhost:5432/insertprovider?providerid=1&providername=h&providerstreetaddress=w&providercity=g&providerstate=AL&providerzipcode=00210&hospitalrrhrrd=f
      //localhost:5432/insertprocedurefigures?drgid=001&providerid=10001&year=1998&totaldischarge=95&acc=3&atp=2&amp=1


        function insertProvider()
        {
            
            pname = document.getElementById("providerName").value;
            street = document.getElementById("street").value;
            city = document.getElementById("city").value;
            state = document.getElementById("state").value;
            rrhrrd = document.getElementById("rrhrrd").value;
            zipcode = document.getElementById("zipcode").value;
            apicall=  "http://localhost:5432/insertprovider?providername=" + pname + "&providerstreetaddress=" + street + "&providercity=" + city + "&providerstate=" + state + "&providerzipcode=" + zipcode + "&hospitalrrhrrd=" + rrhrrd; 
            $.get( apicall, function(result){
            var response = result;
            alert(response);
        });
        }

        function insertProcedure()
        {
            id = document.getElementById("drgid2").value;
            pid = document.getElementById("providerId2").value;
            year = document.getElementById("year").value;
            totalD = document.getElementById("discharge").value;
            acc = document.getElementById("ACC").value;
            atp = document.getElementById("ATP").value;
            amp = document.getElementById("AMP").value;
            apicall=  "http://localhost:5432/insertprocedurefigures?drgid=" + id + "&providerid=" + pid + "&year=" + year + "&totaldischarge=" + totalD + "&acc=" + acc + "&atp=" + atp + "&amp=" + amp; 
            $.get( apicall, function(result){
            var response = result;
            alert(response);
        });
        }
    // function test()
    // {
    //     var request = new XMLHttpRequest()
    //     request.open('GET', 'http://localhost:5432/insertdrg?drgid=009&definition=hello',true)
    //     request.onload = function()
    //     {

    //     }
    //     request.send()
    //      //window.location.href= "http://localhost:5432/insertdrg?drgid=" + id + "&definition=" + def;
    //     // $.get("http://localhost:5432/insertdrg?drgid=" + id + "&definition=" + def, function(result){
    //     //     var test = result;
    //     //     console.log(test);
    //     // });
    // }
    

</script>
</body>
</html>
