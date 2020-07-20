
<?php
     include("connection.php");
     if(isset($_POST['btnsend']))
     {
         $search_box=$_POST['search_box'];
     }
     $sql=" SELECT * FROM `Query` WHERE Question ='$search_box' ";
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($result))
     {
     
        echo "<td>".$row['Answer']."</td>"; 
        
     }
?>