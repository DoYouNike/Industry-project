<!DOCTYPE html>
<html lang="en">

<?php
session_start();

//Query function courtesy of user 'Kevin' on Stack Overflow
//Link: https://stackoverflow.com/questions/16730213/pdo-prepared-statements-viewing-query-results

$host = 'silva.computing.dundee.ac.uk';
$user = '2019indteam4';
$password ='5478.ind4.8745';
$database = '2019indteam4db';
$success = true;

$formuser = null;
$formpass = null;

if (isset($_POST['username']))
    $formuser = $_POST['username'];

if (isset($_POST['password']))
    $formpass = $_POST['password'];

if ($formuser != null)
{
    try 
    {  
        # MySQL with PDO_MYSQL  
        $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);  

        $stmt = $pdo->prepare('CALL login(?)');  
        $stmt -> execute(array($formuser));
        $row_count = $stmt->rowCount();

        if ($row_count = 0 || $row_count > 1)
        {
            $success = false;
            return;
        }

        $results = $stmt->fetch();
        $hash = $results['password'];

        if (password_verify ($formpass, $hash))
        {
            $_SESSION['username'] = $formuser;
            header("Location: adminpage.php");          
        }
        else
        {
            $success = false;
        }

    }  
    catch(PDOException $e) 
    {  
        $success = false;
    }  
}
?>

<html>
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
    <link href="css/landing-page.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">


    <?php
    include 'nav.php';
    ?>
</head>
<body>
<br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Login</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="username" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if (!$success)
    {
        echo "<center><font size='3' color='red'>Username and/or password not valid!</font></center>";
    }
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <?php
        include 'footer.php';
        ?>
</body>
</html>