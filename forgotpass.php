<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/login.css">
    <title>Document</title>
</head>
<body>

    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="login.php" method="post">
            <input id="uname" type="text" name="Username" placeholder="Username"> 
            <input id="pass" type="password" name="Password" placeholder="Password"> 
            <div class="inputBox"> 
                <div class="c1">
                    <input class="form-check-input pass-show" type="checkbox" id="inlineCheckbox1" value="option1">   
                </div>
                <div class="c2">
                    <label class="form-check-label" for="inlineCheckbox1">Remember me</label>
                </div>
            </div> 
            
            <input type="submit" name="" value="Login">
        </form> 
        
        <div class="text-center">
            <a href="#">Forget Password? </a>
            <a href="regis.php">Sign-Up</a> 
            
        </div>
    </div>
</body>
</html>