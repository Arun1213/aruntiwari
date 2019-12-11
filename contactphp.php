<?php
$connection = mysqli_connect("localhost","root","","tbl_contact");
if($_POST)
{ 
    $con_name=$_POST['con_name'];
    $con_email=$_POST['con_email'];
    $con_mess=$_POST['con_mess'];
    
    
    
    $query=mysqli_query($connection,"insert into tbl_contact(con_name,con_email,con_mess)values
('{$con_name}','{$con_email}','{$con_mess}')")
or die(mysqli_error($connection));
if ($query){
    echo"<script>alert('Record Added');</script>";
}

}
?>

<html>
    <body>
        <form method="POST">
            
           
            Name:<input type="text"name="con_name">
            Email:<input type="email"name="con_email">
            mess:<input type="text"name="con_mess">
            
            
            
            <input type="submit">
            
            
        </form>
        
    </body>
    
</html>
    
