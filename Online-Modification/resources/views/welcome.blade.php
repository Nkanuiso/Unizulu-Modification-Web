<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Modification form</title>
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

        .Mod{
            margin-left: 600px;
            font-family: Arial;
            font-weight: bolder;
            font-size: 25px;
            font-family: arial;
            text-align: center;
            display: inline-block;
            margin-top: 0px;

        }

        .head{
            
            height: 100px;
            background-color: #5F96E8;
            /*color: white;*/
            padding-top: 10px;
            padding-left: 5px ;

        }

        .logo{
            margin-left:15px;
            height: 100px;
            margin-top: 10px;

        }

        .Menu_div{
            display: inline;
            float: right;
            height: 120px;
            margin-top: 15px;
            margin-right: 15px;
            font-family: arial;
           
        }

        .menu_icon{
            margin-left: 15px;
            cursor: pointer;
            height: 70px;
            width: 70px;
            margin-top: 15px;
            border-radius: 35px;
            /*opacity: 0.5;*/

        }

        .logout, .dash, .homeRoute{
            width: 120px;
            border: none;
            height: 20px;
            background-color: white;
            font-size: large;
            padding-left: 0px;
            text-decoration: none;
            color: black;
        }

        .username{
            margin-left: 2px;
            text-align: center;
            margin-bottom: 0%;
        }

        
        .click{
            margin-top: 50px;
            font-family: arial;
            text-align: center;

            
        }

        .bottom{
            height: 200px;
            background-color: #5F96E8;
            margin-top: 0px;
        }

        .buttons{

            margin-left: 35%;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 550px;
            height: 550px;
            background-color: whitesmoke;
            box-shadow: 10px 10px 10px darkgray;
            border-radius: 10px;
            background-image: url("/unizulubgd.jpg");

        }

        .F-SSH, .F-EDU, .F-CAL, .F-Science{

            width: 350px;
            height: 40px;
            border-radius: 10px;
            background-color: #5F96E8;
            margin-left: 90px;
            margin-top: 40px;
            cursor: pointer;
            border:none;

        }

        .F-Science{
            margin-top: 90px;
        }


        .Drop_down{
            border-radius: 10px;
            width: 120px;
            height: 70px;
            background-color: white;
        }

    
        .navH{
            height: 120px;
            background-color: #5F96E8;

        }



        .first_box{
           /* margin-left: 25%;*/
            width: 100%;
            height: 1000px;
            box-shadow: 10px 10px 10px darkgray;
            background-image: url('/unizulubgd.jpg');
        }



        .bedge{
            height: 70px;
            display: inline-block;
            margin-left: 15px;
            background-color: transparent;
        }

        .footer{
            height: 150px;
            width: 100%;
            background-color:  #5F96E8;
        }

        .paragraphF{
            text-align: center;
        }

        .form{
            margin-top: 0%;
            display: inline-block;
            font-size: large;
            text-decoration: none;
            color: black;
            text-align: center;
            margin-left: 35px;
        }

        .homeRoute{
            margin-left: 31px;
        }

        
        .University{
            display: inline;
            text-align: center;
            position:absolute;
            top: 450px;
            left: 32%;
            font-size: 50px;
            color: #5F96E8; 
        }

        .syakwamukela{
            position:absolute;
            top:520px;
            left: 43%;
            text-align: center;
        }
        

    </style>
</head>
<body>

    
   @auth 
  

   <nav class="navH">
       
       <img src="/Picture3.jpg" class="logo">
       <h1 class="Mod">Modification</h1>
       <div class="Menu_div" x-data = "{open: false}" @click="open=!open">
           <img src="/th.jpeg" alt="Menu Icon" class="menu_icon">
           {{--Drop down--}}
           <div x-show ="open" @click.outside = "open=false" class="Drop_down">
               <p class="username">{{auth()->user()->username}}</p><br>
               <a class= "form" href="{{route('form')}}">form</a> <br>
               <a class= "homeRoute" href="{{route('home')}}">Home</a><br>
               <form action="{{route('logout')}}" method="post">
                   @csrf
                   <button class="logout">Logout</button>
               </form>
               
           </div>
       </div>
       
           
         
         {{--<p class="UserName">{{auth()->user()->username}}</p> 
           <a href="{{route('logout')}}" class="loggout">Logout</a> 
       @guest

       <a class="Home" href="{{route('home')}}">Home</a>
       <a class="about" href="{{route('about')}}">About</a>
       <a class="login" href="{{route('loginn')}}">Login</a>

       @endguest
           
      --}} 
       
   </nav>

   <div>

       <div class="buttons">
        <form action="{{route('form')}}" method="post">
            @csrf
            @method('get')
           <h3 class="click">Click on the follwing Faculties</h3>
           <button class="F-Science">Faculty of Science</button><br>
           <button class="F-SSH">Faculty of SS and Humanities</button><br>
           <button class="F-EDU">Faculty of Education</button><br>
           <button class="F-CAL">Faculty of Commerce Admin and Law</button><br>
        </form>
       </div>

   </div>
   <footer class="bottom">

       <h3>Contacts</h3>

    </footer>

      @endauth 

      @guest
          
     

        <header class= "head">
            <img src="/logo.png" class="bedge">
            <h1 class="Mod">Modification</h1>
            <a class="about" href="{{route('about')}}">About</a>
            <a class="login" href="{{route('loginn')}}">Login</a>
            <a class="home" href="{{route('home')}}">Home</a>
        </header>
        
    
        <div class="first_box">
            <h1 class="University">University of Zululand</h1>
            <p class="syakwamukela">S'yakwamukela Ongoye</p>
        </div>

        

        <footer class="footer">
            <h1>Contacts</h1>
            <ul>
                <ol>


                </ol>
            </ul>
            <p class="paragraphF">© University of Zululand. All rights reserved.</p>
        </footer>
        
        @endguest
    
</body>
</html>