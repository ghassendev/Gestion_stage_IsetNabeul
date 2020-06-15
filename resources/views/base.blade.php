<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de Stage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        html,body{
            background-color: #BEE2D8;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .logo{
            width: 142px;
            height: 142px;
            margin: 45px;
            float: left;
        }
        .titre{
            float: center;
            padding-top: 80px;
            margin-left:300px ;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 30px;
            background-color: black;
            color: white;
            text-align: right;
            padding-top: 6px
            }
            .main{
                display: flex;
                justify-content:  space-around;
                margin-right: 200px;
                padding-top: 20px;
            }
            .mg-etud{
                width:140px ;
                height:148px ;
                margin-left: 50px;
            }
            .mg-chef{
                width:140px ;
                height:148px ;
                margin-left: 50px;
                
            }
            .mg-dep{
                width:140px ;
                height:148px ;
                margin-left: 50px;
            }
            .blok{
                width: 250px;
                height: 50px;
                background-color:#FF7000 ;
                border-color:#707070;
                border-style:solid;
                border-radius: 5px; 
                margin-top:15px; 
                box-shadow: 2px 2px #707070;

            }
            
            .blok h2{
                text-align: center;
                color: #FFFFFF;
                margin-top: 8px;
                font-size: 23px;
                font-family: "Comic Sans MS", cursive, sans-serif;
            }
            .blok:hover{
                
                cursor: pointer;
                background-color: #62E65D;

            }
            .etud,.chef,.dep{
                
            }
            .main a{
                text-decoration: none;

            }
            .box{
                background-color: white;
                border-radius: 10px;
                border-style: solid;
                border-color: #b8b8b8;
                height: 380px;
                width:300px;
                margin-left:500px ;
                box-shadow: 2px 2px #707070; 
                

            }
            .link{
                text-decoration: none;
                color: black;
                margin-left: 100px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-style: italic;
                font-size: large;

            }
            .link:hover{
                color: blue;
                text-decoration: none;
            }
            .form{
                margin-top:60px; 
            }
            .log-img{
                width:140px ;
                height:148px ;
                margin-top: 30px;
                margin-left: 340px;
                margin-bottom: 10px;
            }
            .box-1{
                background-color: white;
                border-radius: 10px;
                border-style: solid;
                border-color: #b8b8b8;
                height: 565px;
                width:350px;
                margin-left:500px ;
                box-shadow: 2px 2px #707070; 
                padding-left: 50px;
            }
            .reg-img{
                width: 80px;
                height: 80px;
                float: left;
                margin-left: 180px;
            }
            .nom{
                text-align: center;
                margin-right:100px;
                font-size:24px;
            }
            .depo{
                background-color: #62E65D;
                height: 120px;
                width: 412px;
                margin-left: 40px;
                text-align: center;
                font-family: "Comic Sans MS", cursive, sans-serif;
                border-radius: 20px;
                padding-top:20px; 
            }
            .right{
                float:right;
                margin-top:-200px;
                margin-right: 40px;
                background-color: black;
                color: white;
                text-align: center;
                width: 400px;
                height: 300px;

            }
            .note{
                margin-left:  480px;
                width: 360px;
                height: 120px;
                background-color: black;
                text-align: center;
                color:white;
                padding-top: 20px;


            }
            .up{
                margin-top: 80px;
                text-align: center;
                margin-right: 250px;
            }
            .depar{

                background-color: black;
                width: 500px;
                height: 60px;
                margin-left: 400px;
                text-align: center;
                color: white;
                padding-top: 6px;
                border-radius: 30px;
                
            }
    </style>
</head>
<body>
   <a href=""> <img class="logo" src="img\logo.png" alt=""></a>
   @include('inc.messages')
    @yield('content')
    <div class="footer">
    <footer>&copy 2020 ISET NABEUL &nbsp &nbsp &nbsp</footer>
    </div>
</body>
</html>