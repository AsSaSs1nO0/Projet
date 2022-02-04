<?php
$host="localhost";
$database="inscription";
$username="root";
$password="";
    //creat connection
    $con = new mysqli ($host,$username,$password,$database);
    if(!$con){
        echo "there are some problem while connecting the database";
    }
    //there are no problem to errors so let's get data from the Clien
    $FirstName=$_POST["FirstName"];
    $LastName=$_POST["LastName"];
    $Adress=$_POST["Adress"];
    $Birthday=$_POST["Birthday"];
    $Gender=$_POST["Gender"];
    $NumeroTélèphone=$_POST["NumeroTélèphone"];
    $EMail=$_POST["EMail"];
    $Password=$_POST["Password"];
    //now we collect the form data in variables
    //let's insertthem to table
    $qry="INSERT INTO `clien` ( `FirstName`, `LastName`, `Adress`, `Birthday`, `Gender`, `NumeroTélèphone`, `EMail`, `Password`)
           VALUES ('$FirstName', '$LastName', '$Adress', '$Birthday', '$Gender', '$NumeroTélèphone', '$EMail', '$Password')";
        $insert=mysqli_query($con,$qry);
        if(!$insert){
            echo"there is some problem while inserting data";
        }
        else{
            echo"Thx For This Information ";
        }

?>