<!DOCTYPE html>
<html>
<head>
    <title>
        Dali Perfumery Works
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Samar Srivastava">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        #navbarDropdown, .nav-item {
            font-size: 20px;
            font-family: Quicksand;
        }

        .dropdown-item {
            font-size: 20px;
            font-family: Quicksand;
        }

        .imagebox {
            background: white;
            padding: 0px;
            position: relative;
            text-align: center;
            width: 100%;
            border-radius: 10px;
        }

        .imagebox img {
            opacity: 1;
            transition: 0.5s opacity;
        }
        .imagebox:hover{
            transform: scale(1.5);
            

        }
        .imagebox .imagebox-desc {
            background-color: rgba(255, 255, 255, 0.7);
            bottom: 0px;
            color: black;
            font-size: 1.2em;
            left: 0px;
            padding: 10px 15px;
            position: absolute;
            transition: 0.5s padding;
            text-align: center;
            width: 100%;
            border-top-left-radius: 10px;
            font-family: Gugi;

        }

        

        .imagebox:hover .imagebox-desc {
            padding-bottom: 5%;
        }

        div.imagebox {
            /*width: 250px;*/
            box-shadow: 0 20px 20px 0 rgba(3, 0, 0, 0.7), 0 10px 20px 0 rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        /*div.container {
            padding: 10px;
        }*/
        a{color: white;}

</style>
</head>





<!--
<nav class="navbar navbar-expand-lg navbar-inverse sticky-top">
  <a class="navbar-brand" href="#">
      <img src="images/cover/Dali_Logo.png" width="120px;" height="80px;" style="margin-left: 125px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top ">
  <a class="navbar-brand" href="index.php">
  <img src="images/cover/Dali_Logo.png" width="120px;" height="80px;" style="margin-left: 125px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color: yellow"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 35px">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    ABOUT US
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="about-us.php">About Dali Perfumery Works</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="vision.php">Vision And Values</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="achievements.php">Specialities and Achievements</a>


                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
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
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">FEEDBACK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dist.php">DISTRIBUTION NETWORK</a>
            </li>


        </ul>
        <a href="https://www.facebook.com/daliperfumeryworks" target="_blank"><i class="fa-2x fab fa-facebook"
                                                                                 style="color:  yellow;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.twitter.com/daliperfumeryworks" target="_blank"><i class="fa-2x fab fa-twitter"
                                                                                style="color:  yellow;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.youtube.com/channel/UCvfua-Pl-u5u5lzQtCFNLbQ" target="_blank"><i
                    class="fa-2x fab fa-youtube" style="color:  yellow;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.instagram.com/daliperfumeryworks/" target="_blank"><i class="fa-2x fab fa-instagram"
                                                                                   style="color:  yellow;"></i></a>
    </div>
</nav><!--
<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="index.php">
        <img src="images/cover/Dali_Logo.png" width="120px;" height="80px;" style="margin-left: 125px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white;">
        <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 35px">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    ABOUT US
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="about-us.php">About Dali Perfumery Works</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="vision.php">Vision And Values</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="achievements.php">Specialities and Achievements</a>


                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
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
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">FEEDBACK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dist.php">DISTRIBUTION NETWORK</a>
            </li>


        </ul>
        <a href="https://www.facebook.com/daliperfumeryworks" target="_blank"><i class="fa-2x fab fa-facebook"
                                                                                 style="color:  yellow;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.twitter.com/daliperfumeryworks" target="_blank"><i class="fa-2x fab fa-twitter"
                                                                                style="color:  yellow;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.youtube.com/channel/UCvfua-Pl-u5u5lzQtCFNLbQ" target="_blank"><i
                    class="fa-2x fab fa-youtube" style="color:  yellow;"></i></a>
        &nbsp
        &nbsp
        &nbsp
        <a href="https://www.instagram.com/daliperfumeryworks/" target="_blank"><i class="fa-2x fab fa-instagram"
                                                                                   style="color:  yellow;"></i></a>
    </div>
</nav>


-->