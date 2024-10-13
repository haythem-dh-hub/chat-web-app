<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>
<?php
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form singup">
            <header>
                <img src="logo21.png">
            E.F.C Chat Community 
            </header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt">this is an error message!!</div>
                <div class="name-details">

                <div class="fieled input">
                    <label > first name</label>
                    <input type="text" name="fname" placeholder="first name" required>
                    </div>    

                    <div class="fieled input">
                    <label > last name</label>
                    <input type="text" name="lname" placeholder="last name" required>
                    </div>
                     </div>
                    
                    <div class="fieled input">                   
                    <label >Email-adress</label>
                    <input type="text" name="email" placeholder="Email-adress" required>
                    </div>

                    <div class="fieled input">
                    <label >Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-eye"></i>
                    </div>

                    <div class="fieled image">
                        <label>Select ur Image</label>
                        <input type="file" name="image" required>
                        </div>
                        
                        <div class="fieled button">
                    <input type="submit" value="contenue to chat">
                    </div>
                    
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="JavaScript/pass-show-hide.js"></script>
    <script src="JavaScript/singup.js"></script>

</body>
</html>