<? php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


//Database connection
$conn = new mysqli('localhost', 'root', '', 'signup');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);

} else{
	$stmt = $conn->prepare("insert into registration(firstname, lastname, username, email, password)
values(?, ?, ?, ?, ?)");
	$stmt ->bind_param("sssss",$firstname, $lastname, $username, $email, $password);
	$stmt ->execute();
	echo "You have successfully subscribed to World Time News updates...";
	$stmt ->close();
	$conn ->close();
}

?>

