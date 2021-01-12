<?php  
include_once("server.php");
if(isset($_POST['add'])){
    $username =$_POST['username'];
    $qry ="SELECT * FROM `signup` where username ='".$username."' ";
    $run =mysqli_query($conn,$qry);
   $rowcount=mysqli_num_rows($run);
    if($rowcount >0){
        echo "<span style='color:red' class='status-not-available'>  Not Available.</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
       
    }else{
         echo "<span style='color:green' class='status-available'>  Available.</span>";
         echo "<script>$('#submit').prop('disabled',false);</script>";
    }
}

?>