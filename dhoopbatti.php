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
    <h1 class="display-3" style="text-align: center">Dhoopbatti Packs</h1>
    &nbsp
</div>
&nbsp
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item  disabled">
            <a class="page-link" href="dhoopbatti.php" tabindex="-1">Dry Packs</a>
        </li>
        <li class="page-item"><a class="page-link" href="dhoop_wet.php">Wet Packs</a></li>
        <li class="page-item"><a class="page-link" href="dhoop_zip.php">Zipper Packs</a></li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/dhoop/dry/1%20JALWA%20DRY%20DHOOP%208%20STICKS%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/dhoop/dry/2%20HIMALAY%20CHANDAN%20DRY%20DHOOP%208%20STICKS%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
                </a>
            </div>
        </div>

    </div>


</div>


&nbsp
&nbsp
<?php include 'footer.php'?>
