<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>RAIT ADMISSION FORM</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <table><tr><td> Name:</td><td> <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span></td></tr>
   
<tr><td>Date Of Birth</td> <td> <input type="number" name="d"></td></tr>
<tr><td>Place of Birth:-<td><input type="text" name="pob"></td>
   <tr><td>E-mail:</td><td> <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span></td></tr>
  
   <tr><td>Website:</td><td> <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span></td></tr>
  
   <tr><td>Address:-</td><td> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></td></tr>
   
   <tr><td>Gender:</td>
   <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span></td></tr>
  <tr><td>city*</td><td><input type="text" name="city"></td><td>pincode</td><td><input type="text" name="pob"></td></tr>
<tr><td>State*</td><td><select name="State">
<option value:"IT">MAHARASHTRA</option>
<option value:"COMP">GUJARAT</option>
<option value:"EXTC">GOA</option>
<option value:"INST">DELHI</option>
<option value:"ELECT">HARYANA</option>
<option value:"IT">HIMACHAL PRADESH</option>
<option value:"COMP">CHANDIGARH</option>
<option value:"EXTC">CHATTISGARH</option>
<option value:"INST">JHARKHAND</option>
<option value:"ELECT">MADHYA PRADESH</option>
</select>

<tr><td>Contact No:-</td><td><input type="text" name="dob"> (Enter 10 digit Contact Number Only)</td></tr>

<tr><td>Social reservation information of applicant:-</td><td> <input type="text" name="sr"></td></tr>
</table>
<br>
  <a href="a2.html"><b><p align="center">PROCEED TO NEXT STEP</p></b></a> 
</form>


</body>
</html>