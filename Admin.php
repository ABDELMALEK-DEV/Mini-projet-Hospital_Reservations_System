<?php 

include "header.php";


?>

<table>
    <th>Number</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
 




<?php 

$host="localhost";
$user="root";
$password="";
$database="patients";
$port="82";

$connect=mysqli_connect($host,$user,$password,$database,$port);

/*if(isset($connect)){
    echo "Yes Database connected";
}else {
    echo "database not connected";
}*/


//afficher des donner

$query = "select * from patients";
$result = mysqli_query($connect, $query);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td><tr>";  
    }
    echo    "</table>";
}


?>