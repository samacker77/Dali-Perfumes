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
    <h1 class="display-3" style="text-align: center">Hawan Samagiri</h1>
    &nbsp
</div>
&nbsp

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/hawan/FRESH%20AND%20NATURAL%20HAWAN%20SAMAGRI.jpg"  class="category-banner img-responsive"  width="400" height="400">
                    <span class="imagebox-desc">Hawan Samagri</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="imagebox">
                <a href="#hola">
                    <img src="images/hawan/YOGI%20HAWAN%20SAMAGRI%20500%20GMS%20PACK.jpg"  class="category-banner img-responsive"  width="200" height="400">
                    <span class="imagebox-desc">Hawan Samagri</span>
                </a>
            </div>
        </div>

    </div>


</div>


&nbsp
&nbsp
<?php include 'footer.php'?>
