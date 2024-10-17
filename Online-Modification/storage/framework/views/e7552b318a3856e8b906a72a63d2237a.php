<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>

        .home, .about, .login{
            color: black;
            float: right;
            margin-right: 15px;
            text-decoration: none;
            margin-top: 38px;
            font-size: large;
            font-family: arial;
        }

        *{
            margin: 0;
        }
        .navH{
            height: 120px;
            background-color: #5F96E8;

        }

        .Mod{
            display: inline;
            position:absolute;
            top:38px;
            left: 95px;
            

        }

        .logo{
            margin-left:15px;
            height: 100px;
            margin-top: 10px;

        }

        .click{
            margin-top: 15px;
            font-family: arial;
            
        }

        .bottom{
            height: 200px;
            background-color: #5F96E8;
            margin-top: 30px;
        }

        .About-MESSAGE{
            height: 800px;
        }

        
    </style>
</head>
<body>
    <nav class="navH">
        <img src="/Picture3.jpg" class="logo">
        <h1 class="Mod">Modification</h1>
        <a class="about" href="<?php echo e(route('about')); ?>">About</a>
        <a class="login" href="<?php echo e(route('loginn')); ?>">Login</a>
        <a class="home" href="<?php echo e(route('home')); ?>">Home</a>
    </nav>

    <div class="About-MESSAGE">
        <h3 class="click">About This Modification</h3>

        <h4>This is an Online Modification for University of Zululand Students who wish to modify their 
            <br>modules.
        </h4>

    </div>

    <footer class="bottom">

        <h1>Contacts</h1>

    </footer>


</body>
</html><?php /**PATH C:\Xampp\htdocs\Online-Modification\resources\views/About.blade.php ENDPATH**/ ?>