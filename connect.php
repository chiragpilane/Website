<html>
<body>
<?php

$connect=mysqli_connect('localhost','root','','a');
if ($connect)
{
echo 'connect database <br> ';
}
else
{
echo 'not connected';

}