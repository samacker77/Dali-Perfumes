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
    <h1 class="display-3" style="text-align: center">Agarbatti Box Packs</h1>
    &nbsp
</div>
&nbsp
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Black</a>
        </li>
        <li class="page-item"><a class="page-link" href="agar_color.php">Colorful / White</a></li>
        <li class="page-item"><a class="page-link" href="agar_gift.php">Gift Pack</a></li>
        <li class="page-item"><a class="page-link" href="agar_metal.php">Mettalic</a></li>
    </ul>
</nav>
   </head>


<body>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/1%20BINDAS%20BOX%20150%20GMS%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>Bindas Box - 150gms</h2>

    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/2%20DHUADHAR%20BOX%20150%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>Dhuadhar Box - 150gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/3%20YOGI%20BOX%20200%20GMS%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>Yogi Box - 200gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/4%20HE%20RAM%20BOX%2060%20GMS%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity">
        <h2>He Ram Box - 60gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/5%20DHUADHAR%20BOX%2050%20GMS%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Dhuadhar Box - 50gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/6%20NAMASTE%20INDIA%20BOX%2090%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Namaste India - 90gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/7%20HE%20RAM%20BOX%2025%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>He Ram Box - 25gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/8%20BINDAS%20BOX%2025%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Bindax Box - 25gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/9%20SHIV%20MAHIMA%20BOX%2030%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Shiv Mahima - 30gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/14%20YOGI%20BOX%2012%20GMS%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Yogi Box - 12gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/10%20YOGI%20BOX%2030%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Yogi Box - 30gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/11%20NAMASTE%20INDIA%20BOX%2030%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Namaste India Box - 30gms</h2>
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/12%20SHIV%20MAHIMA%20BOX%2012%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Shiv Mahima Box - 12gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/13%20NAMASTE%20INDIA%20BOX12%20GMS%20PACK.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity "><h2>Namaste India Box - 12gms</h2>
    </div>
    <div class="w3-container w3-third">
        <img src="images/agarbatti/box/black/15%20BINDAS%20BOX%2012%20GMS%20PACK%20copy.jpg" style="width:70%;height: 70%;cursor:pointer"
             onclick="onClick(this)" class="w3-hover-opacity"><h2>Bindas Box - 12gms</h2>
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
