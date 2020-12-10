<?php include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body onload="f1()">
       
   <div id="container"> 
    
   <?php

/*$id = $_GET['id'];
// do some validation here to ensure id is safe

$link = mysql_connect("localhost:3307", "root", "");
mysql_select_db("game");
$sql = "SELECT image FROM signup WHERE id=$id";
$result = mysql_query("$sql");
$row = mysql_fetch_assoc($result);
mysql_close($link);

header("Content-type: image/jpeg");
echo $row['dvdimage'];
*/
$id=$_GET['id'];
 // Using database connection file here
 $query = "SELECT `image` FROM `signup` WHERE `id`='$id';";
//$records = mysqli_query($conn,"select image from signup where `id`='$id';"); // fetch data from database
$records= mysqli_query($conn,$query);

while($data = mysqli_fetch_array($records))
{
?>

<?php
echo  '<img src=" data:image/jpeg;base64,'.base64_encode($data['image'] ).'" width="100" height="100"/>';
}
?>

            
        
            
        
    <h6>LEVEL 1 of 3</h6>
    <div id="time">
        
    </div>
    <div id="banner">
        <input type="image" src="apple.png"  alt="Submit"  onclick="location.href='main.html'" id="img" >
        <input type="image" src="mango.png"  alt="Submit" onclick="loss()" id="img">
        <input type="image" src="grape.png"  alt="Submit" onclick="loss()" id="img" >
        <input type="image" src="lemon.png"  alt="Submit" onclick="loss()" id="img" >
    </div>
    
       <div id ="back">
           
           <h6>If you click the image of Apple ......then you can go to the next level...</h6>
           <input type="button" onclick="location.href=''" value="BACK"/>
      </div>
      
      <div id="banner">
        <input type="image" src="orange.png" alt="Submit"  onclick="loss()" id="img">
        <input type="image" src="pear.png"  alt="Submit" onclick="loss()" id="img">
        <input type="image" src="pomegranate.png"  alt="Submit" onclick="loss()" id="img">
        <input type="image" src="strawberrry.png"  alt="Submit" onclick="loss()" id="img"  >
    </div>
    
       
    
        <script>

        function f1()
        {
            
            var count = 5;
            var interval = setInterval(function(){
             document.getElementById('time').innerHTML=count;
            count--;
             if (count < -1){
            clearInterval(interval);
            document.getElementById('time').innerHTML='Try again';
             alert("You're out of time!");
            }
            }, 1000);
        }
        function loss()
        {
            document.getElementById('back').innerHTML="You clicked the wrong image....Please try again...";
        }
    </script>
    </div>
        
</body>

</html>