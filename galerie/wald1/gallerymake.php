<?php
$ordner = "img/";
$bilder = array_slice(scandir($ordner),2);
?><!DOCTYPE html>
<html lang="de">
<head>
<title>Osatokis Seite: Galerie: Wald 1</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, max-image-preview:none, notranslate" />
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🦊</text></svg>">
  <style>
	h1 {text-shadow: 0 0 0px #000000, 0 0 15px rgba(0,0,0,0.6);}
	details p {background-color:snow; 
	padding:1em;
	box-shadow: 0 0 0px #000000, 0 0 15px rgba(0,0,0,0.6);
	}
	summary {background-color:white;}
* {
  box-sizing: border-box;
}

.flex-container {
  display: flex;
  flex-wrap: wrap;
  font-size: 30px;
  text-align: center;
}

.flex-item {
  background-color: snow;
  padding: 10px;
  flex: 30%;
}

/* Responsive layout - makes a one column-layout instead of a two-column layout */
@media (max-width: 800px) {
	.flex-item {
    flex: 50%;
  }
}

@media (max-width: 500px) {
	.flex-item {
    flex: 100%;
  }
}

.galeriebild, .lazy {
	width:100%; 
	border-radius:1%;
	box-shadow: 0 0 0px #000000, 0 0 15px rgba(0,0,0,0.6);
	}
	
	
body { padding: 20px; font-family:  "Helvetica Neue", Helvetica, Arial, sans-serif;} blockquote { padding: 0 1em; color: #6a737d; border-left: 0.25em solid #dfe2e5;} code { padding: 0.2em 0.4em; background: rgba(27,31,35,0.05); border-radius: 3px;} pre > code { background: none } pre { padding: 16px; overflow: auto; line-height: 1.45; background-color: #f6f8fa; border-radius: 3px; } table { border-collapse: collapse; } td, th {  border: 1px solid #ddd; padding: 10px 13px; }	
	
</style>
<script src="../../assets/js/lazyload.min.js"></script>
</head>
<body>
<!--<script src="../../assets/js/oscarmorrison-md-page.js"></script><noscript>-->
<h1>Galerie: Wald 1</h1>
<ol>
<li><a href="./../../index.html">Start</a> </li>
<li><a href="./../../blog.html">Blog</a></li>
<li><a href="./../../galerie.html">Galerie</a></li>
<li><a href="./../../gutenachrichten.html">Gute Nachrichten</a></li>
<li><a href="./../../kontakt.html">Kontakt</a></li>
<li><a href="./../../links.html">Links</a></li>
<li><a href="./../../literatur.html">Literatur</a></li>
<li><a href="./../../musik.html">Musik</a></li>
</ol>
<hr>









<div class="flex-container">
<?php foreach($bilder as $bild)
{
	echo '<div class="flex-item"><a href="'.$ordner.$bild.'"><img class="lazy" data-src="'.$ordner.$bild.'" class="galeriebild"></a></div>
';
}
?>
</div>

</body>
<script>
var lazyLoadInstance = new LazyLoad({
  // Your custom settings go here
});
</script>
</html>


