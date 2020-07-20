<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Chat_Page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="bg">
        <nav>
           <div class="logo">
               <img src="picture/logo.png" alt="">
               <h4>Chat Bot</h4>
           </div>   
           <div class="menu">
               <a href="index.html">Home</a>
               <a href="">Pricing</a>
               <a href="">About</a>
               <a href="">Contact</a>
               <div class="menu_sign">
                   <a  href="login.html">SignUp</a>
               </div>
           </div>
        </nav>  
        <section>
           <div class="chat_container">
                <div class="profile">
                    <i class="fa fa-user-circle-o user_icon" aria-hidden="true"></i>
                    <h2>Akil Raza</h2>
                    <i class="fa fa-times btnclose" aria-hidden="true"></i>
                </div>
                <div class="question"></div>
                <div class="answer">
                <?php   //fetch answer
                    include("connection.php");
                    if(isset($_POST['btnsend']))
                    {
                        $search_box=$_POST['search_box'];
                        $sql=" SELECT * FROM `Query` WHERE Question ='$search_box' ";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result))
                        {
                            echo "<p>{$row['Answer']}</p>";
                        }
                    }
                 
                ?>
                <?php   //check answer not
                         if(isset($_POST['btnsend']))
                         {
                            include("connection.php");
                            $search_box=$_POST['search_box'];
                            $sql=" SELECT * FROM `Query` WHERE Question ='$search_box' ";
                            $result=mysqli_query($conn,$sql);
                             if(mysqli_num_rows($result) <= 0)
                                 {
                                     echo '<p style="color:rgb(66, 128, 170);font-size:12px;font-family:Montserrat ;"> Sorry Answer Not Found.... </p> ';
     
                                 }
                        }
                ?>
                </div>
              
                <div class="typing">
                    <form action="" method="POST">
                        <input type="text" name="search_box" placeholder="Typing.......">
                        <input type="submit" name="btnsend" onclick="myfunction()" value="Send">
                    </form>
                </div>
           </div>
        </section>

        <footer>
           <p> © 2020 Copyright </p>
        </footer>
        <script src="chat.js"></script>
</div>
</body>
</html>