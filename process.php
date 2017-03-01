<?php include 'connect.php'; ?>


<?php
$app_id=$_POST['a'];
$pass_word=$_POST['b'];
mysqli_query($connect,"INSERT INTO app (a,b) VALUES('$app_id','$pass_word')");
?>