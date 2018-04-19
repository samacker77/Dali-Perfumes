<?php include 'header.php' ?>
<script>
    function showDiv(id){
        document.getElementById(id).style.display = "block";
    }
</script>
<style>
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
    .card-body {
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
    .card-body:hover card-text
    {
        padding-bottom: 10%;
    }
</style>
<div class="container-fluid main">
    <h1 class="display-3" style="text-align: center">Agarbatti Zipper Packs</h1>
    &nbsp
</div>
&nbsp
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="agarbatti_zipper.php" tabindex="-1">Black</a>
        </li>
        <li class="page-item disabled"><a class="page-link" href="agar_zip_color.php">Colorful</a></li>
        <li class="page-item"><a class="page-link" href="agar_zip_twin.php">Twin Pack</a></li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/1M%20MOOD%20FRESH%20500%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Mood Fresh</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/1N%20NEW%20GENERATION%20500%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Generation</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/1O%20SARVA%20GUN%20500%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Sarvgun</span>
                </a>
            </div>
        </div>
    </div>&nbsp
    <div class="row">
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/1Q%20HE%20RAM%20400%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Hey Ram - 400 gm</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/1W%20HE%20RAM%20140%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Hey Ram - 150 gm</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/2C%20JALWA%20140%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Jalwa - 150 gm</span>
                </a>
            </div>
        </div>
    </div>&nbsp
    <div class="row">
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/2D%20MOOD%20FRESH%20140%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Mood Fresh - 150 gm</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/2E%20NEW%20GENERATION%20140%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Generation - 150 gm</span>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/agarbatti/zipper/colorful/2F%20SARVA%20GUN%20140%20GM%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Sarvagun - 150 gm</span>
                </a>
            </div>
        </div>
    </div>


</div>


&nbsp
&nbsp
<?php include 'footer.php'?>
