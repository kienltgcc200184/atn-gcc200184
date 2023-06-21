<?php 
    // $conn = mysqli_connect('localhost','root','','atndb') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","dac7v4de18gxoqyx","ujgpk2909e0s1deu","gcklq0a7mvnijizp") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>