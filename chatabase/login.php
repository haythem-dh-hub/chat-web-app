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
        <section class="form login">
            <header>
            <img src="logo21.png">
            E.F.C Chat Community
            </header>
            <form action="#">
                <div class="error-txt">this is an error message!!</div>

                    <div class="fieled input">                   
                    <label >Email-adress</label>
                    <input type="text" name="email" placeholder="Email-adress">
                    </div>

                    <div class="fieled input">
                    <label >Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <i class="fas fa-eye"></i>
                    </div>
                

                        <div class="fieled button">
                    <input type="submit" value="contenue to chat">
                    </div>

                    
            </form>
            <div class="link">Not yet signed up? <a href="index.php">sgin up now</a></div>
        </section>
    </div>
    <script src="JavaScript/pass-show-hide.js"></script>
    <script src="JavaScript/login.js"></script>
</body>
</html>