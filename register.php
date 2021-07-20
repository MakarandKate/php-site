<?php
    include('core/header.php');
    if(isset($_SESSION["uid"])){
        header('Location: home.php');
        die();
    }
    if(isset($_POST["username"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if($username=="mak"){
            $_SESSION["uid"]=1;
        }
        header('Location: home.php');
        die();
    }
    
?>
<div class="container" style="margin-top:150px;">
    <form action="register.php" method="POST">
        <div class="row justify-content-center">
                                    <div class="col-lg-12" style="margin-bottom:10px">
                                        <h3 class="text-secondary text-uppercase mb-0">Register</h3>
                                    </div>
                                    <div class="col-6 border-right">    
                                        <p>Never Remeber Username Password</p>
                                        <h6>Try One Verify</h6>
                                    </div>
                                    <div class="col-6">
                                        
                                        <div class="form-floating mb-3">
                                            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
                                            <label for="floatingInput">Username</label>
                                        </div>
                                        <div class="form-floating">
                                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>

                                        
                                    </div>
                                    <div class="col-6"></div>
                                    <div class="col-6" style="margin-top:10px;">
                                        <a href="register.php" style="float:left">Register here</a>
                                        <button type="submit" class="btn btn-primary" style="float:right">Login</button>
                                    </div>
        </div>
    </form>
</div>                        


<?php
    include('core/footer.php');
?>