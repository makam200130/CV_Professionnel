<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/regis.css">
    <title>Document</title>
</head>
<body>
    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="login.php" method="post">
            
        <input id="uname" type="text" name="Username" placeholder="Username">
        <input type="text" class="form-control item" id="email" placeholder="Email"> 
            <div class="inputBox"> 
                <div class="c1">
                    <input id="pass" type="password" name="Password" placeholder="Password"> 
                </div>
                <div class="c2">
                    <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
                </div>
            </div> 
            <input type="submit"  name="" value="create account">
        </form> 
        <div class="text-center">
            <a href="login.php">Sign-In</a> 
        </div>
    </div>
</body>
</html>