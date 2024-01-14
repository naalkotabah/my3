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
            <img src="img/logo.png" width="150px">
            <h3>مستشفى الشفاء</p>
          
        </div>
        <div class="book">
        <p>اهلا وسهلا بكم في مستشفى الشفاء الرجاء ادخال البينات للحجز</p>

        <form action="index.php" method="POST">
            <input type="text" placeholder="ادخل اسم المريض" name="name">
            <input type="text" placeholder="ادخل البريد الكتروني" name="email">
            <input type="date"  name="date">
            <input type="submit" class="btn"  name="send" style="    cursor: pointer;">
        </form>


    <?php 
    $host="localhost";
    $user="root";
    $pass="";
    $db="my3";
    
    
     $conn=mysqli_connect($host,$user,$pass,$db);

    
     








@$pName=    $_POST['name'];
@$pEmail=    $_POST['email'];
@$pDate=    $_POST['date'];
@$pSend=    $_POST['send'];




if($pSend){
  $query="INSERT INTO  patients(name,email,date)VALUE('$pName','$pEmail','$pDate')";

  $result=mysqli_query($conn,$query);

  echo  '<h3>'.'تم الحجز'.'</h3>';
    }else{
        echo '<h3>'. 'لم تتم العملية بنجاح'.'</h3>';
    }



    
    
    ?>    





        </div>
    </div>
    
</body>
</html>