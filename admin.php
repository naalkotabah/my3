
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="mane">
        <div class="logo"> 
            <img src="img/logo.png" width="150px" style="padding-top: 20px;">
            <h3>مستشفى الشفاء</h3>



            
          
        </div>


     <table style=" width: 100%; text-align: center;border-collapse: collapse; font-size: 25px;padding: 20px;">
         <th style="      font-size: 16px; color: #fff; background-color: #00a9d0;border:none ;padding: 15px;">الرقم</th>
         
         <th style="font-size: 16px; color: #fff; background-color: #00a9d0;border:none ;padding: 15px;">الاسم</th>
         <th style="font-size: 16px; color: #fff; background-color: #00a9d0;border:none ;padding: 15px;">التاريخ </th>
         <th style="font-size: 16px; color: #fff; background-color: #00a9d0;border:none ; padding: 15px;">البريد الكتروني</th>
         
    
     </table>

   

     <?php

$host="localhost";
$user="root";
$pass="";
$db="my3";


 $conn=mysqli_connect($host,$user,$pass,$db);











 $query="SELECT * FROM patients";
 $result=mysqli_query($conn,$query);



 if($result){

    while($row=mysqli_fetch_assoc($result)){
        echo "<h2> <tr><td>" . $row['id'] ."-----------------------------------". "</td> <td>".$row['name']."------------------------------". "</td> <td>".$row['email']. "---------------------------------------". "</td> <td>".$row['date']."</td> </h2>";
    }
 }





 












     ?>


</body>
</html>


