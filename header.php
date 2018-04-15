<!DOCTYPE html>
<html>
<head>
	<title>
	Dali Perfumery Works
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Samar Srivastava">
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="engine0/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="engine0/jquery.js"></script>

    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Poiret+One|Quicksand');
        @import url('https://fonts.googleapis.com/css?family=Sanchez');
        @import url('https://fonts.googleapis.com/css?family=Cormorant+Garamond');
        @import url('https://fonts.googleapis.com/css?family=Gugi|Julius+Sans+One|Nixie+One|Cinzel+Decorative');
        #navbarDropdown, .nav-item{
            font-size: 20px;
            font-family: Quicksand;
        }
        .dropdown-item{
            font-size: 20px;
            font-family: Quicksand;
        }
        .imagebox {
            background: black;
            padding: 0px;
            position: relative;
            text-align: center;
            width: 100%;
        }

        .imagebox img {
            opacity: 1;
            transition: 0.5s opacity;
        }

        .imagebox .imagebox-desc {
            background-color: rgba(0, 0, 0, 0.6);
            bottom: 0px;
            color: white;
            font-size: 1.2em;
            left: 0px;
            padding: 10px 15px;
            position: absolute;
            transition: 0.5s padding;
            text-align: center;
            width: 100%;
        }

        .imagebox:hover img {
            opacity: 0.7;
        }

        .imagebox:hover .imagebox-desc {
            padding-bottom: 10%;
        }
        div.imagebox {
            /*width: 250px;*/
            box-shadow: 0 20px 20px 0 rgba(3, 0, 0, 0.7), 0 10px 20px 0 rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        /*div.container {
            padding: 10px;
        }

</style>
</head>
<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="index.php">
        <img src="images/cover/Dali_Logo.png" width="120px;" height="80px;" style="margin-left: 125px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 35px">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    BRAND
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="about-us.php">About Dali Perfumery Works</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vision And Values</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="dist.php">Distribution Network</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PRODUCT
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="agarbatti_box.php">Agarbatti Box</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="agarbatti_zipper.php">Agarbatti Zipper Pack</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="dhoopbatti.php">Dhoopbatti</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="hawan.php">Hawan Samagri</a>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="media.php">MEDIA</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CONTACT US
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#test">Visit Us</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#test">Email Us</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="dist.php">Distribution Network</a>
                </div>
            </li>


        </ul>
        <a href="https://www.facebook.com/daliperfumeryworks" target="_blank"><i class="fa-2x fab fa-facebook" style="color: #3b5998;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.twitter.com/daliperfumeryworks" target="_blank"><i class="fa-2x fab fa-twitter" style="color: #1da1f2;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.youtube.com/channel/UCvfua-Pl-u5u5lzQtCFNLbQ" target="_blank"><i class="fa-2x fab fa-youtube" style="color: #ff0000"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.instagram.com/daliperfumeryworks/" target="_blank"><i class="fa-2x fab fa-instagram" style="color: #c13584"></i></a>
    </div>
</nav>



