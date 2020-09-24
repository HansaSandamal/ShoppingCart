<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

.header {
  text-align: center;
  padding: 32px;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}
.column img {
  margin-top: 8px;
  vertical-align: middle;
}
.column {
  -ms-flex: 25%; /* IE 10 */
  flex: 25%;
 
  padding: 0 4px;
}

</style>
</head>
<body>




<div class="header" id="myHeader">
  <h1>PLANTS</h1>
  <p>Please Select your Plant Category</p>
  <div class="tab">
  <button class="tablinks" onclick="openTab(event, 'cooking plants')">cooking plants</button>
  <button class="tablinks" onclick="openTab(event, 'colourful plants')">colourful plants</button>
  <button class="tablinks" onclick="openTab(event, 'aquatic plants')">aquatic plants</button>
</div>
</div>





<div class="tabcontent" id="cooking plants"> 
  <div class="column">
    <img src="images/items/cooking plants/Abelmoschus-esculentus-–-Bandakka-LP-S-Home-garden-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Allium-ascalonicum-–-rathu-lunu-LP-S-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Allium-sativum-–-Sudu-lunu-LP-S-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Alternanthera-amoena-Mukunuwenna-LP-S-GC-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Alternanthera-sessilis-–-Mucunuwenna-LP-S-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Basella-alba-–-Niviti-Climber-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Cinnamomum-zeylanicum-Kurundu-T-M-Indi-400x400.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/items/cooking plants/citrofortunella-mitis-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Cucumis-melo-–-Hen-kekiri-Creeper-Climber-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Cucumis-sativus-–-Pipingna-Creeper-Climber-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Cucurbita-maxima-–-Wattakka-Creeper-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Garcinia-cambogia-Goraka-T-L-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/ipomoea-aquatica-Kang-Kung-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Manihot-esculenta-–-Maiokka-LP-L-Home-garden-400x400.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="images/items/cooking plants/psophocarpus-tetragonolobus-Dambala-Climb-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/raphanus-sativus-Radish-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Sauropus-androgynus-Japan-Batu-T-S-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Sesbania-grandiflora-–-Katurumurunga-T-S-Home-Garden-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Solanum-lycopersicum-tomatoes-LP-S-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Solanum-melongena-Brinjal-LP-S-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Solanum-melongena-elabatu-LP-S-400x400.jpg" style="width:100%">
  </div>

</div>



<div class="tabcontent" id="colourful plants"> 
  <div class="column">
    <img src="images/items/colourful plants/Acalypha-godseffiana-Heterophylla-–-LP-S-Boder-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Alternanthera-dentata-–-Joyweed-LP-S-home-garden-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Amaranthus-paniculatus-–-Rana-tempala-LP-S-Medi-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Bougainvillea-spectabilis-nyctaginaceae-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Cassia-fistuala-Ehala-T-L-W-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Congea-velutina-Pink-Sandpaper-Vine-Cr-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Cordyline-fruticosa-–-Plam-lily-LP-L-400x400.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/items/colourful plants/Dracaena-reflexa-Dracaena-LP-L-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Impatiens-balsamina-–-Kudalu-kola-LP-S-Low-inter-land-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Ipomoea-horsfalliae-princess-vine-Cr-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Ixora-coccinea-Ratmal-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Malpighia-glabra-Barbados-cherry-–LP-S-Boder-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/Mesua-ferrea-Naa-T-M-400x400.jpg" style="width:100%">
    <img src="images/items/colourful plants/syzygium-campanulatum-christina-LP-L-1-400x400.jpg" style="width:100%">
  </div>  
  
  <div class="column">
    <img src="images/items/cooking plants/psophocarpus-tetragonolobus-Dambala-Climb-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/raphanus-sativus-Radish-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Sauropus-androgynus-Japan-Batu-T-S-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Sesbania-grandiflora-–-Katurumurunga-T-S-Home-Garden-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Solanum-lycopersicum-tomatoes-LP-S-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Solanum-melongena-Brinjal-LP-S-400x400.jpg" style="width:100%">
    <img src="images/items/cooking plants/Solanum-melongena-elabatu-LP-S-400x400.jpg" style="width:100%">
  </div>
  
  
  
  
  <!-- <div class="column">
    <img src="images/items/colourful plants/" style="width:100%">
    <img src="images/items/colourful plants/" style="width:100%">
    <img src="images/items/colourful plants/" style="width:100%">
    <img src="images/items/colourful plants/" style="width:100%">
    <img src="images/items/colourful plants/" style="width:100%">
    <img src="images/items/colourful plants/" style="width:100%">
    <img src="images/items/colourful plants/" style="width:100%">
  </div> -->

</div>



<div class="tabcontent" id="aquatic plants"> 
  <div class="column">
    <img src="images/items/aquatic plants/Aeschynomene-aspera-Mahadhiya-siyabala-FAQ-1-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Aponogeton-crispus-Kekatiya-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Azolla-pinnata-azolla-FAQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Eclipta-alba-Kekirindiya-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Eichhornia-crassipes-Japan-Jabara-FAQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Limnanthemum-indicum-Kumudu-Aq-Indi-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Nelumbo-nucifera-Nelum-AQ-400x400.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/items/aquatic plants/Nymphaea-lotus-Olu-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Nymphaea-lutea-Kaha-Olu-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Nymphaea-nouchali-Nil-Manel-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Nymphaea-rubra-Rathu-Olu-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Nymphaea-salphurea-La-Kaha-Olu-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Nymphea-stellate-Manel-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Nymphoides-hydrophylla-heen-abhala-AQ-400x400.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="images/items/aquatic plants/Trapa-bispinosa-ikiliya-AQ-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/raphanus-sativus-Radish-400x400.jpg" style="width:100%">
    <img src="images/items/aquatic plants/Victoria-amazonica-giant-water-lily-AQ-400x400.jpg" style="width:100%">
    <!-- <img src="images/items/aquatic plants/.jpg" style="width:100%">
    <img src="images/items/aquatic plants/.jpg" style="width:100%">
    <img src="images/items/aquatic plants/.jpg" style="width:100%">
    <img src="images/items/aquatic plants/.jpg" style="width:100%"> -->
  </div>

</div>


<script>
function openTab(evt, categoryName) {
  var i, tabcontent, tablinks,elements;
  
  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
 
  
  
  }
  document.getElementById(categoryName).style.display = "block";

 
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
