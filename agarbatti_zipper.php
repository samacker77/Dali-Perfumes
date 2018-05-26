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
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Black</a>
        </li>
        <li class="page-item"><a class="page-link" href="agar_zip_color.php">Colorful / White</a></li>
        <li class="page-item"><a class="page-link" href="agar_zip_twin.php">Twin Pack</a></li>
        <li class="page-item"><a class="page-link" href="agar_rich.php">Rich Collection</a></li>
    </ul>
</nav>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1D%20HIGHLIGHT%20%201%20KG%20%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>Highlight Box - 1kg</h2>

    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1D%20HIGHLIGHT%20%201%20KG%20%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>Highlight Box - 500gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1E%20DEO%201.KG%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>Deo - 1 kg</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1F%20FAVOURITE%201.KG%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>Favourite - 1 kg</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1H%20NAMASTE%20INDIA%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Namaste India - 500gm</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1I%20MAHALABH%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Mahalabh - 500gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1J%20HATTRICK%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Hattrick - 500 gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1K%20DEO%20500%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Deo - 500 gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1L%20FAVOURITE%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Favourite - 500gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1P%20CHOCOLATE%20500%20GM%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Chocolate - 500gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1R%20HIGHLIGHT%20200%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Highlight - 200 gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1S%20NAMASTE%20INDIA%20200%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Namaste India - 200gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1T%20GOA%20200%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Goa - 200gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1U%20MAHALABH%20200%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>Mahalabh - 200gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/1V%20CHOCOLATE%20200%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Chocolate - 200gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2G%20MAHALABH%2080%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Mahalabh - 80 gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2J%20HIGHLIGHT%2030%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>Highlight - 30 gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2K%20NAMASTE%20INDIA%2030%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Namaste India - 30gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2L%20GOA%2030%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Goa - 30gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2M%20MAHALABH%2030%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>Mahalabh - 30gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2N%20SHUBH%20LABH%2030%20GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Shubh Labh - 30gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2O%20BINDAS%2015GM%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Bindas Pack - 15gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/zipper/black/2P%20SHAHI%20GOLD%202%20MRP%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>Shahi Gold</h2>
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
