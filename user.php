<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        
        padding:0;
        margin:0;
    }


.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}




    </style>
</head>
<body>




<!-- Header -->
<div class="header" id="myHeader">
  <h1>PLANTS</h1>
  <p>Please Select your Plant Category</p>
  <button class="btn" onclick="one()">cooking plants</button>
  <button class="btn active" onclick="two()">colourful plants</button>
  <button class="btn" onclick="three()">aquatic plants</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
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







<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");
var elements2 = document.getElementsByClassName("column2");

// Declare a loop variable
var i;

// Full-width images
function one() {
 for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Two images side by side
function two() {
 for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Four images side by side
function three() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>