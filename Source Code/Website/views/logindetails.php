$loginurl = "localhost:1337/login?username=?&password=?";

$username = $_POST['username'];
$password = $_POST['password'];

//Hash password
hash = brcypt($password);

//Make request to api
$requesttomake = insert username and password into $loginurl

//make request to that url
response = req($loginurl)

if "Success" in response.body
//Success
else
// OH NO
