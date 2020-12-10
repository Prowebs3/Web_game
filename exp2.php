<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body onload="f1()">
       
   <div id="container"> 

    <h6>LEVEL 2 of 3</h6>
    <div id="time"></div>
    <div id="banner">
        <input type="image" src="cow.png"  alt="Submit"  onclick="loss()" id="img" >
        <input type="image" src="lion.png"  alt="Submit" onclick="loss()" id="img">
        <input type="image" src="donkey.png"  alt="Submit" onclick="loss()" id="img" >
        <input type="image" src="cat.png"  alt="Submit" onclick="loss()" id="img" >
    </div>
    
       <div id ="back">
           
           <h6>If you click the image of Tiger ......then you can go to the next level...</h6>
           <input type="button" onclick="location.href=''" value="BACK"/>
      </div>
      
      <div id="banner">
        <input type="image" src="Goat.png" alt="Submit"  onclick="loss()" id="img">
        <input type="image" src="monkey.png"  alt="Submit" onclick="loss()" id="img">
        <input type="image" src="dog.png"  alt="Submit" onclick="loss()" id="img">
        <input type="image" src="tiger.png"  alt="Submit" onclick="location.href='main2.html'" id="img"  >
    </div>
    
       
    
        <script>

        function f1()
        {
            
            var count = 4;
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