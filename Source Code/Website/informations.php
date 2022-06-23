<!DOCTYPE html>
<html lang="en">

<?php
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

    <!-- Table CSS -->
    <link href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/information-page.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="landingpage.php" style="font-size: 32px">CompareTheHealthcare.com <span class=""> <i
                        class="icon-heart m-auto text-success"></i></span></a>
        <a class="btn btn-success" href="#">Admin</a>
    </div>
</nav>

<!-- Masthead -->
<header class="infor-layout text-white text-center">
    <div class="overlay"></div>
    <div class="" id="top">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <h1 class="mb-5" style="">Finding something different!</h1>
                </div>
                <div class="col-md-20 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <input required type="text" placeholder="Enter search term..." name="Search" class="form-control my-2" id="Search">
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
                            <div class="form-group col-md-3">
                                <select required class="form-control my-2" name="price">
                                    <option value="" disabled selected hidden>Cost</option>
                                    <option value="3000"><$3,000</option>
                                    <option value="5000"><$5,000</option>
                                    <option value="10000"><$10,000</option>
                                    <option value="20000"><$20,000</option>
                                    <option value="30000"><$30,000</option>
                                    <option value="50000"><$50,000</option>
                                    <option value="100000"><$100,000</option>
                                    <option value="500000"><$500,000</option>
                                    <option value="-1">any</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-lg btn-success" onclick="hide('hide')" id ="submitB">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .loader {
        border: 10px solid #f3f3f3; /* Light grey */
        border-top: 10px solid #5cb85c; /* Green */
        border-radius: 50%;
        width: 100px;
        height: 100px;
        animation: spin 0.8s linear infinite;
    }

    div.visible {
        display: block;
    }

    div.hidden {
        display: none;
    }

    .banner {
        height: 150px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>


<div class="col-md-6">
	<figure class="card card-product">
		<figcaption class="maininfo-wrap">
				<h4 class="title">Hospital Name</h4>
				<p class="desc">DRG Definition</p>
                <p class="font-weight-bold">Address: </p>
                <div class="street">StreetAddress</div>
                <div class="city">City</div>
                <div class="zip">ZipCode</div>
				</figcaption>
	</figure>
</div> <!-- col // -->


<div class="row">
<div class="col-md-3">
	<figure class="card card-product">
		<figcaption class="info-wrap">
				<h4 class="title">AVERAGE TOTAL COST</h4>
				<p class="desc">Some small description goes here</p>
                <div class="result">
				<div class="latesty">result for the latest year</div>
                <div class="2015">2015 result</div>
                <div class="2014">2014 result</div>
                </div>
                <div class="totalCost" style="height: 200px; width: 100%;"></div>
		</figcaption>
		
	</figure>
</div> <!-- col // -->
<div class="col-md-3">
	<figure class="card card-product">
		<figcaption class="info-wrap">
				<h4 class="title">AVERAGE MEDICAL PAYMENTS</h4>
				<p class="desc">Some small description goes here</p>
                <div class="result">
				<div class="latesty">result for the latest year</div>
                <div class="2015">2015 result</div>
                <div class="2014">2014 result</div>
                </div>
                <div class="medicalCost" style="height: 200px; width: 100%;"></div>
		</figcaption>
		
	</figure>
</div> <!-- col // -->
<div class="col-md-3">
	<figure class="card card-product">
		<figcaption class="info-wrap">
				<h4 class="title">AVERAGE COVER CHARGES</h4>
				<p class="desc">Some small description goes here</p>
                <div class="result">
				<div class="latesty">result for the latest year</div>
                <div class="2015">2015 result</div>
                <div class="2014">2014 result</div>
                </div>
                <div class="coverCharges" style="height: 200px; width: 100%;"></div>
		</figcaption>		
	</figure>
</div> <!-- col // -->
<div class="col-md-3">
	<figure class="card card-product">
		<figcaption class="info-wrap">
				<h4 class="title">TOTAL DISCHARGE</h4>
				<p class="desc">Some small description goes here</p>
                <div class="result">
				<div class="latesty">result for the latest year</div>
                <div class="2015">2015 result</div>
                <div class="2014">2014 result</div>
                </div>
                <div class="discharge" style="height: 200px; width: 100%;"></div>
		</figcaption>
		
	</figure>
</div> <!-- col // -->
</div> <!-- row.// -->
</div>

<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#" class="text-success">About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#" class="text-success">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#" class="text-success">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#" class="text-success">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; CompareTheHealthcare Ltd 2019. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-facebook fa-2x fa-fw text-success"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-twitter-square fa-2x fa-fw text-success"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram fa-2x fa-fw text-success"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
</body>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

<!---->
<!--<script src="jquery.ui.autocomplete.scroll.js"></script>-->
<style>
.ui-autocomplete {
background-color: #ffffff;
}
* html .ui-autocomplete {
    background-color: #ffffff;
}
.ui-menu-item .ui-menu-item-wrapper.ui-state-active {
    background: #6693bc !important;
    font-weight: bold !important;
    color: #ffffff !important;
} 
.ui-menu .ui-menu-item:hover, .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus {
  cursor: pointer; 
}
</style>
<script>

    // Using TXT File Autocompolete (much faster than querying the DB)
    $(function() {
        $.get("Search-suggestions.txt" , function(data){
        var availableWords = data.split('\n');
        // this highlights the character that matchs user input
        $.extend( $.ui.autocomplete.prototype, {
            _renderItem: function( ul, item ) {
            var term = this.element.val(),
            regex = new RegExp( '(' + term + ')', 'gi' );
            html = item.label.replace( regex , "<b>$&</b>" );
            return $( "<li></li>" )
            .data( "item.autocomplete", item )
            .append( $("<a></a>").html(html) )
            .appendTo( ul );
            }
        });
        $("#Search").autocomplete({  
            
            minLength: 3,
            //that looks the text file to find the match 
            source : function(request, response) {      
                var results = $.ui.autocomplete.filter(availableWords, request.term);
                response(results.slice(0, 10));
            },
            // that will make the input only the drgdefinition
            select: function(event,ui){
            event.preventDefault();
            var selectProcedure = ui.item.value.split(':');
             $("#Search").val(selectProcedure[0]);
          
          }
          // minLength: 3,
          // select: function(event,ui){
          //     event.preventDefault();
          //     var selectProcedure = ui.item.value.split(':');
          //     $("#Search").val(selectProcedure[0]);
          //
          // }
          });
      });
    });
    
    // $(function () {
    //     $("#Search").autocomplete({
    //         source: 'AutoC.php',
    //
    //     });
    //
    // });
</script>

<script>
    $(document).ready(function(){

    });
</script>


<script>
    //move to div with id
    function moveToDiv(id) {
        window.location.hash = '#'+id;
    }
</script>

<script>
    //round val, add commas, add dollar sign
    function priceFormatter(value, row, index, field) {
        return '$' + Math.round(value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function detailFormatter(index, row) {
        var html = []
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>')
        })
        return html.join('')
    }
</script>

 
<script type="text/javascript">
// line graph
        $(function() {
	$(".totalCost").CanvasJSChart({
		title: {
			text: "Average Total Cost"
		},
		axisY: {
			title: "$",
			includeZero: false
		},
		axisX: {
			interval: 1
		},
		data: [
		{
			type: "line", 
			toolTipContent: "{label}: {y} mm",
			dataPoints: [
				{ label: "2014",  y: 5000 },
				{ label: "2015",  y: 4000 },
				{ label: "2016",y: 3000 },
				{ label: "2017",y: 8000 }
				
			]
		}
		]
	});
});
</script>
<script type="text/javascript">
// line graph
        $(function() {
	$(".medicalCost").CanvasJSChart({
		title: {
			text: "Average Medical Payments"
		},
		axisY: {
			title: "$",
			includeZero: false
		},
		axisX: {
			interval: 1
		},
		data: [
		{
			type: "line", 
			toolTipContent: "{label}: {y} mm",
			dataPoints: [
				{ label: "2014",  y: 5000 },
				{ label: "2015",  y: 4000 },
				{ label: "2016",y: 3000 },
				{ label: "2017",y: 8000 }
				
			]
		}
		]
	});
});
</script>
<script type="text/javascript">
// line graph
        $(function() {
	$(".coverCharges").CanvasJSChart({
		title: {
			text: "Average Cover Charges"
		},
		axisY: {
			title: "$",
			includeZero: false
		},
		axisX: {
			interval: 1
		},
		data: [
		{
			type: "line", 
			toolTipContent: "{label}: {y} mm",
			dataPoints: [
				{ label: "2014",  y: 5000 },
				{ label: "2015",  y: 4000 },
				{ label: "2016",y: 3000 },
				{ label: "2017",y: 8000 }
				
			]
		}
		]
	});
});
</script>
<script type="text/javascript">
// line graph
        $(function() {
	$(".discharge").CanvasJSChart({
		title: {
			text: "Total Discharge"
		},
		axisY: {
			title: "$",
			includeZero: false
		},
		axisX: {
			interval: 1
		},
		data: [
		{
			type: "line", 
			toolTipContent: "{label}: {y} mm",
			dataPoints: [
				{ label: "2014",  y: 5000 },
				{ label: "2015",  y: 4000 },
				{ label: "2016",y: 3000 },
				{ label: "2017",y: 8000 }
				
			]
		}
		]
	});
});
</script>
</body>
</html>
