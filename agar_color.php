<?php include 'header.php' ?>
<script>
    function showDiv(id){
        document.getElementById(id).style.display = "block";
    }
</script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Dancing+Script|Gugi');
    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }
    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    img {
        image-orientation: from-image;
    }
    .main
    {
        background-color: #007bff;
    }
    .imagebox-desc{
        font-family: Gugi;
    }
    .card-body {
        background-color: rgba(0, 0, 0, 0.6);
        bottom: 0px;
        color: black;
        font-size: 1.2em;
        left: 0px;
        padding: 10px 15px;
        position: absolute;
        transition: 0.5s padding;
        text-align: center;
        width: 100%;
    }
    .card-body:hover card-text
    {
        padding-bottom: 5%;
    }
</style>
<div class="container-fluid main">
    <h1 class="display-3" style="text-align: center">Agarbatti</h1>
    &nbsp
</div>
&nbsp
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="agarbatti_box.php" tabindex="-1">Black</a>
        </li>
        <li class="page-item disabled"><a class="page-link" href="agar_color.php">Colorful</a></li>
        <li class="page-item"><a class="page-link" href="agar_gift.php">Gift Pack</a></li>
        <li class="page-item"><a class="page-link" href="agar_metal.php">Mettalic</a></li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/box/colorful/1%20HIMALAY%20ROSE%20BOX%2016%20GMS%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Rose</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/box/colorful/2%20HIMALAY%20SANDAL%20BOX%2016%20GMS%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Sandal</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/box/colorful/3%20JALWA%20BOX%2016%20GMS%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Jalwa</span>
                </a>
            </div>
        </div>
    </div>
</div>
&nbsp
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/box/colorful/4%20HIGHLIGHT%20BOX%2016%20GMS%20PACK.jpg"  class="category-banner img-responsive" width="400">
                    <span class="imagebox-desc">Highlight - 16 gm</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/box/colorful/5%20NAMASTE%20INDIA%20BOX%2016%20GMS%20PACK.jpg"  class="category-banner img-responsive" width="400">
                    <span class="imagebox-desc">Namaste India - 16 gm</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/box/colorful/6%20GOA%20BOX%2016%20GMS%20PACK.jpg"  class="category-banner img-responsive" width="400">
                    <span class="imagebox-desc">Goa - 16 gm</span>
                </a>
            </div>
        </div>
    </div>
</div>

&nbsp
&nbsp
<?php include 'footer.php'?>
