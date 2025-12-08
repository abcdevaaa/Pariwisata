<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .banner {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.40),rgba(0,0,0,0.40));
        background-position: center;
        background-size: center;
    }

    .navbar {
        width: 90%;
        padding: 30px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        width: 160px;
        margin-top: -10px;
        cursor: pointer;
    }

    .navbar ul li {
        list-style: none;
        display: inline-block;
        margin: 20px;
    }

    .navbar ul li a{
        text-decoration: none;
        text-transform: uppercase;
        color: white;
        font-weight: 600;
    }

    li a:hover {
        transition: 0.5s;
    }

    .navbar a:hover {
        color: 4C7DA2;
    }
</style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="" alt="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Destination</a></li>
            </ul>
            <a href="#" class="login-btn">Login</a>
            <a href="#" class="register-btn">Register</a>
        </div>

        <div class="content">
            <h1>PAPUA BARAT</h1>
            <div>
                <button type="button">Explore</button>
            </div>
        </div>
    </div>
</body>
</html>