<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> UrbanReserve </title>
        <link rel="stylesheet" href="./styles/style-index.css">

        <link href="https://fonts.googleapis.com/css2?
        family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}
.background{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(../images/background.jpg);
    background-position: center;
    background-size: cover;
    padding-left: 8%;
    padding-right: 8%;
    box-sizing: border-box;
} 
.navigationbar{
    height: 12%;
    display: flex;
    align-items: center;
}
.logo{
    width: 50px;
    cursor: pointer;
}
.menu-icon{
    width: 30px;
    cursor: pointer;
    margin-left: 40px;
}
nav{
    flex: 1;
    text-align: right;
}
nav ul li{
    list-style: none;
    display: inline-block;
    margin-left: 60px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
}
.row{
    display: flex;
    height: 88%;
    align-items: center;
}
.col{
    flex-basis: 50%;
}
h1{
    color: #fff;
    font-size: 100px;
}
p{
    color: #fff;
    font-size: 20px;
    line-height: 15px;
}
button{
    width: 180px;
    color #000;
    font-size: 12px;
    padding: 12px 0;
    background: #fff;
    border: 0;
    border-radius: 20px;
    outline: none;
    margin-top: 30px;
}
.venue {
    width: 200px;
    height: 230px;
    display: inline-block;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    cursor: pointer;
    margin: 10px 15px;
    background-position: center;
    background-size: cover;
    transition: transform 0.5s;
}
.venue1{
    background-image: url(../images/pic-1.jpg);
}
.venue2{
    background-image: url(../images/pic-2.jpg);
}
.venue3{
    background-image: url(../images/pic-3.jpg);
}
.venue4{
    background-image: url(../images/pic-4.jpg);
}
.venue5{
    background-image: url(../images/pic-5.jpg);
}
.venue6{
    background-image: url(../images/pic-6.jpg);
}

.venue:hover{
    transform: translateY(-10px);
}

h5{
    color: #fff;
    text-shadow: 0 0 5px #999;
}
        </style>
    </head>
    <body>
        <div class="background">
            <div class="navigationbar">
                <img href="urban-reserve-index.html" src="images/logo.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><a href="/venues">VENUES</a></li>
                        <li><a href="/reservation">RESERVATION</a></li>
                        <li><a href="/contact">CONTACT</a></li>
                        <li><a href="/about">ABOUT</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col">
                    <h1>CONTACT PAGE</h1>

                    <a href="/reservation"><button type="button"> Book Now </button></a>
                </div>

</body>
</html>