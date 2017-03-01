<html>
<head>
<style>
body {
    background-image: url("rait-logo.jpg");
    background-repeat: no-repeat;
     background-position: left top;
    margin-left: 300px;
    
}

h1 {
    color: orange;
    text-align: center;
}

p{
    font-family: Arial, Helvetica, sans-serif;

	 font-style: italic;}
</style>
</head>
<body>
<h1><b>RAIT ADMISSION LOGIN PAGE</b></h1>
<p><h2> The candidate / applicant option form filling process engineering access to online care system:</h2>
1]Application to the applicant by the login ID and password.<br>

 2]The applicant shall own application ID or password. Cyber ​​Cafe / ARC officer / friends to not tell the password. <br>
 3]If confirmed, or otherwise change the option if the form of the other person by the applicant in the form of direct option of the applicant's password will not be responsible for its Directorate.<br>
 4]Directorate of Organization and abhyasakramambabata is available on the website up to date information. To the review.<br>
 5]However, some organizations. High Court / Ma. The Supreme Court's access to note that adesanusara condensation are included in the process.<br>

 6]If access fees in accordance with the government's Institute courses or take some courses will not compensate for the benefit of the scheme should be noted in this regard.<br>
 7]After confirm, once the next allotment option will be in the form the applicant can not be any changes in the computing system, and according to.<br>
 8]After the change in the form of options or option to logout after unpaid confirm your login form so that the change will not have to walk through another person konatehi.<br>
</p>


<form method="post" action="process.php">

 <fieldset>
  <legend>LOGIN FORM</legend>
  
 

<table align="center">
<tr>
<td>Application Id:-</td>
<td><input type="text" name="a"></td>
</tr>
<td> password</td>
<td><input type="password" name="b"></td>
</tr>
</table>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="example.php" value="submit">submit</button>
</fieldset>
<script>
   
      function validateEmail()
      {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }
</form>
</body>
</html>

