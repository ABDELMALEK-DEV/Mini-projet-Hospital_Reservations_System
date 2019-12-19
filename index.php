<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hassan II Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
    <style>
        *{
    font-family: 'janna lt';
    direction: ltr;
    box-sizing: border-box;
}
      .logo {
    text-align: center;
          margin: 40px 0;
          
}

.logo img {
    width: 300px;
    
}

.logo p {
    font-size: 30px;
    font-weight: bold;
    color: #cc5251;
}
        .Book{
    text-align: center;
}
        .Book p{
            font-size: 20px;
        }
        .Book input{
            width: 50%;
            margin-bottom: 10px;
            padding: 10px;
            border-color: #cc5251;
        }
        .Book input[type="submit"]{
            font-size: 16px;
            color: white;
            background: #cc5251;
            border: none;
        }
        
    </style>

</head>
<body>
    <div class="main"> 
        <div class="logo">
         
          <img src="images/logo.jpg">
            <p>Hassan II Hospital</p>
            
        </div>
        <div class="Book"> 
            <p>Welcome to Hassan II Hospital, complete the form below</p>
        <form action="">
            <input type="text" placeholder="Enter Your Name" name="name">
            <input type="text" placeholder="Enter Your Email" name="email">
            <input type="date"   name="date">
            <input type="submit" value="Book now" name="send">
         
        
        </form>
            <?php 
            //connect with database
            $host="localhost:82";
            $user="root";
            $password="";
            
            $database="hospital_reservations_system";

            $connect=mysqli_connect($host,$user,$password,$database);
            if(isset($connect)){
                echo 'yes';
            }
            
            
            //Insert des donner
            $pName  = $_POST['name'];
            $pEmail = $_POST['email'];
            $uDate  = $_POST['date'];
            $pSend  = $_POST['send'];
            
            if($pSend)
            {
                
            $query = "INSERT INTO patients (name,email,date) VALUE('$pName','$pEmail','$uDate')";
            $result = mysqli_query($connect , $query);
            echo "<p style='color:green'> Booked </p>";
            }
            else 
            {
                echo "<p style='color:green'> Oops, something went wrong ... try again </p>";
            }
            
            ?>
            
            
        </div>
    </div>
</body>
</html>