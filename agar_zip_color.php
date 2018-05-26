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
        <li class="page-item"><a class="page-link" href="agar_rich.php">Rich Collection</a></li>
    </ul>
</nav>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/1M%20MOOD%20FRESH%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Mood Fresh - 500gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/1N%20NEW%20GENERATION%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>New Gen - 500gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/1O%20SARVA%20GUN%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Sarv Gun - 500gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/1Q%20HE%20RAM%20400%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>He Ram - 400 gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/1W%20HE%20RAM%20140%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>He Ram - 140gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/2C%20JALWA%20140%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>Jalwa - 140gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/2D%20MOOD%20FRESH%20140%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Mood Refresh - 140 gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/2E%20NEW%20GENERATION%20140%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>New Gen- 140gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/colorful/2F%20SARVA%20GUN%20140%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>Sarva Gun - 140gms</h2>
    </div>
</div>
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
        <img id="img01" style="width:100%">
    </div>
</div>

<script>
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
    }
</script>




&nbsp
&nbsp
<?php include 'footer.php'?>
