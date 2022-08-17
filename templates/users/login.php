<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="static/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="static/style.css">
    
    
</head>
<style>
.card-body:hover{
        transform:scale(1.1);
        z-index: 2;}
        section{
            position:relative;
            width: 100%;
            background-image: linear-gradient(rgba(147, 135, 103, 0.344), rgba(158, 161, 99, 0.268)), url(../static/images/books.jpg);
            margin-right:0px;
            background-size: cover;
            display:flex;
        }
        .header-content{
            margin-bottom:150px;
            color:whitesmoke;
            text-align:center;
        }
        .header-content h2{
            font-size:4;
            text-align: center;
        }

        .dropdown-menu {
         display: none;
        }

        .navbar ul li:hover .dropdown-menu {
            display: block;
            position: absolute;
            top: 100%;
            background-color:rgb(157, 163, 167);
            text-align: center;
        }

        .navbar ul li:hover .dropdown-menu ul {
            display:inline;
        }

        .navbar ul li:hover .dropdown-menu ul li {
            list-style-type: none; 
            width: 120px;
            padding: 10px;
            margin-left: 1rem;
        }
        .navbar ul li:hover .dropdown-menu ul li a:hover {
            background-color: rgb(196, 100, 90);
            padding:15px;
        }
</style>
<body style="background-image: url(/static/images/fu.jpg); background-size: 100%;">
    <nav class="navbar" style="background-color:rgb(17, 47, 63); margin-bottom: 0rem;">
        <p class="navbar-brand" style="color:white"> Book Recommender</p>
        <ul class="nav navbar-nav" style="margin-left:47.5rem; font-size: 18px;">
        <li><a style="color:rgb(37, 227, 195);" href="/">Home</a></li>
        <li><a style="color:rgb(14, 95, 182);" href="/recommend">Recommend</a></li>
        <li><a style="color:rgb(186, 115, 115); cursor:pointer">Categories<i class="fas fa-caret-down"></i></a>
            <div class="dropdown-menu" >
                <ul>
                    <li><a style="text-decoration: none; font-size: 17px; color: white;" href="/history">Historical</a></li>
                    <li><a style="text-decoration: none; font-size: 17px; color: white;" href="/senti">Sentimental</a></li>
                    <li><a style="text-decoration: none; font-size: 17px; color: white;" href="/psycho">Psychological</a></li>
                    <li><a style="text-decoration: none; font-size: 17px; color: white;" href="/mystery">Mystery</a></li>
                    <li><a style="text-decoration: none; font-size: 17px; color: white;" href="/funny">Humor</a></li>
                    <li><a style="text-decoration: none; font-size: 17px; color: white;" href="/western">Western</a></li>
                    <li><a style="text-decoration: none; font-size: 17px; color: white;" href="/detective">Detective</a></li>
                </ul>
        </li>
        <li><a style="color:red" >Contact</a></li>
        <li><a style="color:#181818; background-color: whitesmoke; height:6rem; margin-left:1rem;">Login/SignUP</a></li>
        
        </ul>
    </nav>
    <div class="user">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">LogIn</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form action="/validation" method="post" id="login" class="input-group">
                <input type="text" name="user" class="input-field" placeholder="User Id" required>
                <input type="text" name="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <form action="/register" method="post" id="register" class="input-group">
                <input type="text" name="user" class="input-field" placeholder="Username" required>
                <input type="email" name="email" class="input-field" placeholder="Email-Id" required>
                <input type="text" name="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn" >Register</button>
            </form>
        </div>
    </div>
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("btn");
    function register(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";

    }j
    function login(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";

    }
</script>
</body>
</html>