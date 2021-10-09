<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
</head>
<body>





<h1> Basic Form </h1>





<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<fieldset>
    <legend ><b><h2>Account Info</h2></b></legend>
  User Name: * <input type="text" name="name" required value="">
<br><br>
  Pass :*
  <input type="password" name="pass" required value=""><br><br>
  </fieldset>
<fieldset>
    <legend ><b><h2>Basic Info</h2></b></legend>
First Name: * <input type="text" name="firstname" required value="">
<br><br>
Last Name: * <input type="text" name="lastname"  required value="" >
<br><br>
Date Of Birth: * <input type="date" name="dob"  required value="" >
<br><br>
Choose your Gender : *
    <input type="radio" name="gender" value="male" required>
    Male
    <input type="radio" name="gender" value="female">
    Female
    <input type="radio" name="gender" value="other">
    Other
   <br><br>
Religion : *
  <select name="rel" id="rel" required>
    <option value="">None</option>
    <option value="islam">Islam</option>
    <option value="hindu">Hindu</option>
    <option value="boddho">Boddho</option>
    <option value="chris">Christian</option>
  </select>

</fieldset>
<fieldset>
    <legend><b><h2> Contact Information </h2></b></legend>
    Present Address :*
    <input type="text" name="add" required value="">
    <br><br>
    Permanent Address :*
    <input type="text" name="padd" required value="">
    <br><br>
    Phone number : *
  <input type="tel" name="phn"  required value="">
    <br><br>
    Email :*
  <input type="email" name="mail"  required value="">
  <br><br>
  Personal Website Link :
  <input type="url" name="prlink"  value="" ><br><br>

</fieldset>
<br><br>

<input type="submit" name="submit">
</form>

<br>
<?php
echo "<br>";
echo "<br>";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$rel = $_POST['rel'];
$add = $_POST['add'];
$padd = $_POST['padd'];
$mail = $_POST['mail'];
$phn = $_POST['phn'];
$prlink = $_POST['prlink'];
$name = $_POST['name'];
$pass = $_POST['pass'];
if (empty($fname) || empty($lname) || empty($dob) || empty($gender) || empty($rel) || empty($padd) || empty($add) || empty($mail) || empty($phn) || empty('username') || empty('$pass')){
echo "Please fill up the form properly";
}
else 
{
echo "First Name is : " . sanitize($fname);
echo "<br>";
echo "<br>";
echo "Last Name is : " . sanitize($lname);
echo "<br>";
echo "<br>";
echo "Date of birth is : " . sanitize($dob);
echo "<br>";
echo "<br>";
echo "Gender is : " . sanitize($gender);
echo "<br>";
echo "<br>";
echo "Religion is : " . sanitize($rel);
echo "<br>";
echo "<br>";
echo "Present Address is : " . sanitize($add);
echo "<br>";
echo "<br>";
echo "Permanent Address is : " . sanitize($padd);
echo "<br>";
echo "<br>";
echo "Email is : " . sanitize($mail);
echo "<br>";
echo "<br>";
echo "Phone no is : " . sanitize($phn);
echo "<br>";
echo "<br>";
echo "Url : " . sanitize($prlink);



}
}





function sanitize($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>





</body>
</html>