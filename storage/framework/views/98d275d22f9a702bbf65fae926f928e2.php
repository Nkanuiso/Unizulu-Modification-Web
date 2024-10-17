<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>

        .home, .about, .login{
            color: black;
            float: right;
            margin-right: 15px;
            text-decoration: none;
            margin-top: 38px;
            font-size: large;
        }

        *{
            margin: 0;
            font-family: arial;
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

        .Sub-Container{
            background-color: rgb(248, 245, 245);
            border-radius: 10px;
        }

        .S-Container{
            height: 600px;
            width: 450px;
            background-color: whitesmoke;
            box-shadow: 10px 10px 10px darkgray;
            margin-left: 35%;
            margin-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 40px;
            padding-bottom: 20px;
            border-radius: 10px;
            
        }

        .login-t{
            text-align: center;
            margin-top: 30px;
            
        }

        .image-div{
            height: 120px;
            width: 80px;
            margin-left: 185px;
            background-color: blue;
            margin-top: 35px;
            border-radius: 10px;
            background-image: url('/Picture3.jpg')

        }

        .username, .Password, .Button{
            border-radius: 10px;
            height: 35px;
            margin-left: 35px;
            margin-top: 15px;
            
            
        }
        .username, .Password{
            width: 360px;
            border-color:#5F96E8;
            font-size: larger;
        }

        .Button{
            width: 150px;
            border: none;
            background-color: #5F96E8;
            margin-bottom: 30px;
            cursor: pointer;
        }

        .action-div{
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .hrr{
            text-align: center;
        }

        .as, .admin, .hod, .lect{
            text-decoration: none;
            font-size: large;
            color: black;
        }

        .hr3{
            margin-bottom: 30px;
        }

        .bottom{
            height: 200px;
            background-color: #5F96E8;
            margin-top: 30px;
        }

        .error{
            color: red;
        }

         .logo{
            margin-left:15px;
            height: 100px;
            margin-top: 10px;

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

    <div class="S-Container">
        <div class="Sub-Container">
            <h1 class="login-t">Login</h1>
            <div class="image-div">

            </div>

            <div class="action-div">

                <form action="<?php echo e(route('log')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <hr>
                    <h3 class="hrr">Modification</h3>
                    <hr>
                    <input placeholder="Username" type="text" value="<?php echo e(old('username')); ?>"
                    class="username" name="username"><br>
                   <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input  placeholder="Password" type="password" value="<?php echo e(old('password')); ?>"
                    class="Password" name="password"><br>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <button type="submit" class="Button">Login</button>
                    <?php $__errorArgs = ['failed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <hr class="hr3">
                </form>
            </div>
        </div>
    </div>

    <footer class="bottom">

        <h1>Contacts</h1>

    </footer>
        
    

</body>
</html><?php /**PATH C:\Xampp\htdocs\Online-Modification\resources\views/Login.blade.php ENDPATH**/ ?>