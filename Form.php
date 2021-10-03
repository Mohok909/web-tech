<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
</head>
<body>
<h1> Basic Form </h1>
<br>
<<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

  <fieldset>
    <legend ><b>Account Info</b></legend>
  <label for="uname">User Name:</label>
  <input type="text" id="uname" name="uname"  required value="<?php echo $_POST['uname']??"; ?>">><br><br>
  <label for="pass">Pass:</label>
  <input type="password" id="pass" name="pass" required value="<?php echo $_POST['pass']??"; ?>><br><br>
  </fieldset>
  <br>
  <br>

  <fieldset>
    <legend ><b>Basic Info</b></legend>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" required value="<?php echo $_POST['fname']??" ; ?>><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" required value="<?php echo $_POST['lname']??" ; ?>><br>
  <p>
     <label for="dob">Date Of Birth:</label>
  <input type="date" id="dob" name="dob" required value="<?php echo $_POST['dob']??" ; ?>><br><br>
   </p> <p>Choose your Gender :
  <input type="radio" id="male" name="Gender" value="Male">
  <label for="male">Male</label>
   <input type="radio" id="female" name="Gender" value="Female">
  <label for="female">Female</label>
   <input type="radio" id="others" name="Gender" value="Others">
  <label for="Others">Others</label><br>
  </p> <br>
 

</p>

  <label for="Religion">Choose Your Religion:</label>
  <select name="religion" id="religion" required value="<?php echo $_POST['religion']??" ; ?>>
    <option >Islam</option>
    <option >Hindu</option>
    <option >Christian</option>
    <option >Boddho</option>
  </select>
  <br><br>
  </fieldset> <br> <br>
  <fieldset>
    <legend><b> Contact Information </b></legend>
     <label for="padd">Present Address:</label>
  <input type="textarea" id="padd"  required value="<?php echo $_POST['padd']??" ; ?>><br><br>
     <label for="pradd">Permanent Address:</label>
  <input type="textarea" id="pradd"  required value="<?php echo $_POST['pradd']??" ; ?>><br><br>
     <label for="phn">Phone number</label>
  <input type="tel" id="phn"  required value="<?php echo $_POST['phn']??" ; ?>><br><br>
     <label for="mail">Email:</label>
  <input type="email" id="mail"  required value="<?php echo $_POST['mail']??" ; ?>><br><br>
     <label for="prlink">Personal Website Link:</label>
  <input type="url" id="prlink"  "><br><br>
  </fieldset>
<br> <br>



  <input type="submit" value="Submit">
  
</form> 

<?php
              if ($_SERVER['REQUEST_METHOD'] === "POST") {

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $dob = $_POST['dob'];
                $religion = $_POST['religion'];
                $padd = $_POST['padd'];
                $pradd = $_POST['pradd'];
                $phn = $_POST['phn'];
                $mail = $_POST['mail'];
                $uname = $_POST['uname'];
                $pass = $_POST['pass'];
                if (empty($fname)||empty($lname)||empty($dob)||empty($religion)||empty($padd)||empty($pradd)||empty($phn)||empty($mail)||empty($uname)||empty($pass)) {
                  echo "Please fill up the form properly";
                }

              }

            ?>

</body>
</html>