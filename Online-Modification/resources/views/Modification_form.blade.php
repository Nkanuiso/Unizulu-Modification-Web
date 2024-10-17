<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification form</title>
    <style>

       
        .Mod{
            margin-left: 440px;
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
            margin-bottom: 20px;
            padding-left: 5px ;

        }

        input{
            margin-top: 15px;
            width: 500px;
            height: 40px;
            border-radius: 10px;
            border:solid rgb(0,0,200);
            margin-left: 90px;
        }

        textarea{
            margin-top: 15px;
            width: 500px;
            height: 100px;
            border: solid rgb(0,0,200);
            margin-left: 90px;
            border-radius: 10px;
        }

        .first_box{
            margin-left: 25%;
            width: 700px;
            box-shadow: 10px 10px 10px darkgray;
            background-color: whitesmoke;
            border-radius: 10px;
        }

        .Personal_Details, .Add, .Cancel{
            text-align: center;
        }

        button{
            width: 100px;
            height: 30px;
            background-color: rgb(0,0,200);
            color: white;
            border: none;
            border-radius: 5px;
            margin-left: 71%;
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .bedge{
            height: 70px;
            display: inline-block;
            margin-left: 15px;
            background-color: transparent;
        }

        .footer{
            margin-top: 50px;
            height: 150px;
            width: 100%;
            background-color:  #5F96E8;
        }

        .paragraphF{
            text-align: center;
        }
        
        .error{
            color: red;
        }

    </style>
</head>
<body>

        <header class= "head">
            <img src="/logo.png" class="bedge">
            <h1 class="Mod">Unizulu Modification Form</h1>
        </header>
        
        <hr>
        <div class="first_box">

    
            <form action="{{route('store')}}" method="post">
                @csrf
                

                <h1 class="Personal_Details">Personal Particulars</h1>
                <input class="input1" type="text" name="name" 
                placeholder="Name" value={{old('name')}}><br>
               
                <input class="input2" type="text" name="Surname" 
                placeholder="Surname" value={{old('Surname')}}><br>
              
                <input class="input3" type="text" name="Student_number" 
                placeholder="Student number" value={{old('Student_namber')}}><br>
                @error('Student_number')
                    <p>{{$message}}</p>
                @enderror
                
                <input class="input4" type="email" name="Email"
                 placeholder="Email" value={{old('Email')}}><br>
                
                <input class="input5" type="text" name="cellphone"
                 placeholder="Contact number" value={{old('cellphone')}}><br>
             
                <input class="input6" type="text" name="Old_Programme" {{--value={{old('Old_Programme')}}--}}
                placeholder="Old Programme (e.g. BSc Agriculture 4BSC50)"><br>
              
                <input class="input17" type="text" name="New_Programme" {{--value={{old('New_Programme')}}--}}
                 placeholder="New Programme (e.g. BSc Biochemistry 4BSC10)"><br>
                 

                <h1 class="Cancel">Add the following modules</h1>
                <input class="input1" type="text" name="Modules" 
                placeholder="Module_Code" value={{old('Modules')}}><br>
                
                <input class="input1" type="text" name="Semesta" 
                placeholder="Semester" value={{old('Semesta')}}><br>
                
                <input class="input1" type="text" name="Module_Descriptions"
                 placeholder="Module Discription" value={{old('Module_Descriptions')}}><br>
                
                <textarea name="Reasons" placeholder="Reason for modification" value={{old('Reasons')}}></textarea><br>
               
                
                <h1 class="Add" >Cancel the following modules</h1>
                <input class="input1" type="text" name="Module" 
                placeholder="Module_Code" value={{old('Module')}}><br>
                
                <input class="input1" type="text" name="Semester" 
                placeholder="Semester" value={{old('Semester')}}><br>
               
                <input class="input1" type="text" name="Module_Description"
                 placeholder="Module Discription" value={{old('Module_Description')}}><br>
                
                <textarea name="Reason" placeholder="Reason for modification"
                value={{old('Reason')}}></textarea><br>
                
                <button name="submit" type="submit">Submit</button>
                
               
            </form>
        </div>

        <footer class="footer">
            <h1>Contacts</h1>
            <ul>
                <ol>


                </ol>
            </ul>
            <p class="paragraphF">© University of Zululand. All rights reserved.</p>
        </footer>
        
  
    
</body>
</html>