<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda">
<style>
label {
    color: #246563;
    font-weight: bold;
}
.searchbar{
    display: flex;
    
}
.form-control{
    background: transparent;
    border: none;
}
header{
    background-image: url("https://images.pexels.com/photos/616358/pexels-photo-616358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
}
.signupbutton{
    border: 0;
    background-color:#246563;
    color: white;
}
.btn{
    border: none;
}
h1{
    margin-top: 200px;
    margin-left: 600px;
    letter-spacing: 3px;
    font-weight: bolder;
    font-family: "Merienda", sans-serif;
    letter-spacing: 15px;
    font-size: 90px;
    color: #246563;
}
h4{
    margin-top: 10px;
    margin-left: 550px;
    letter-spacing: 3px;
    font-family: "Mulish", sans-serif;
}
.container-fluid{
    padding-top: 20px;
}
@media screen and (min-width: 375px) and (max-width: 767px){

        header{
            overflow: scroll;
        }
        .texthide{
            font-size: 0;
        }

        .btn:hover + .texthide{
            font-size: x-small;
            display: block;
         }
         .signupbutton{
            font-size: 8px;
         }
         .btn{
            font-size: 8px;
         }
         h1{
            margin-top: 50px;
            margin-left: 120px;
            font-size: 20px;
         }
         h4{
            margin-top: 5px;
            margin-left: 60px;
            font-size: 10px;
         }
    }
    @media screen and (min-width: 768px) and (max-width: 1024px){
        .texthide{
            font-size: 0;
        }
        .btn:hover + .texthide{
            font-size: medium;
            display: block;
         }
        header{
            overflow: scroll;
        }
        .signupbutton{
            font-size: 10px;
        }
        h1{
            margin-top: 100px;
            margin-left: 200px;
        }
        h4{
            margin-left: 130px;
        }
    }
    @media screen and (min-width: 950px) and (max-width: 1280px){
        h1{
            margin-left: 400px;
        }
        h4{
            margin-left: 350px;
        }
    }
</style>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row p-3 ">
            <div class="col">
                <img src="siram-logo.png" style="width:150px ; height: 100px; margin-top: -30px;">
            </div>
            
            <div class="col border border-1 rounded-pill">
                <div class="searchbar">
                    <input type="text" class="form-control" placeholder="Search.." >
                    <i class=" fa fa-search mt-2" type="submit"></i>
                </div>
            </div>
            
        </div>
    </div>

    <h1> SIRAM</h1>
    <h4>Hundreds of flavors under one site.</h4>
    <div class="col d-flex justify-content-center">
<<<<<<< HEAD
        <a type="button" class="signupbutton btn" href="homepage.html">START</a>
=======
        <a type="button" class="signupbutton btn" href="{{ ('HomeController.php') }}">START</a>
        <button onclick="location.href='{{ url('home') }}'">Start</button>
>>>>>>> edfa13072f4159bbe4372570fad9c8279e769c68
    </div>
</header>
<div class="container p-5 m-5">
    <h1 class="fw-bold">🍜 Foodhub Vlogs</h1>
    <p>Welcome to Foodhub Vlogs, where you can upload your recipes.</p>
<<<<<<< HEAD
=======

>>>>>>> edfa13072f4159bbe4372570fad9c8279e769c68
</body>
</html>
