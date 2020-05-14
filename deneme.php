<!DOCTYPE html>
<html lang="tr-TR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bootstrap Hide Show Password</title>
	<link rel="stylesheet" type="text/css" href="css/Deneme.css">
</head>
<body>
<div class="container">
<header class="page-top">
	<img src="image/images.png" alt="">
    <h1> HTML5 ve CSS3 Dersleri </h1>
	<div style="clear: left;"></div>
</header>
<nav class="menu">
<ul>
     <li><a href="">Home</a></li>
     <li><a href="">About</a></li>
     <li><a href="">Services</a></li>
     <li><a href="">News</a></li>
     <li><a href="">Privacy Policy</a></li>
     <li><a href="">Contact</a></li>
</ul>
</nav>

<aside class="sidebar">
<ul>
	<li><a href="">HTMl</a></li>
	<li><a href="">CSS</a></li>
	<li><a href="">Javascript</a></li>
	<li><a href="">PHP</a></li>
	<li><a href="">SQL</a></li>

</ul>
</aside>

<section class="change">
	<header class="header">
		<h2 style="text-align: center;border-bottom: 1px solid; padding: 7px;">Resim Gruplandırma İşlemleri</h2>
	</header>
    <figure>
	        <img src="image/img1.jpg" width="333" height="auto" alt="">
	        <img src="image/img2.jpg" width="348" height="auto" alt="">
	        <img src="image/img3.jpg" width="333" height="auto" alt="">
	        <figcaption>HTML5 ve CSS3 figure ve figcaption uygulaması</figcaption>
    </figure>
<meter value="0.31" low="30" optimum="50" high="75"></meter>
<label>Loading...</label>
<progress value="o" max="100" id="load" style="width: 300px;"></progress>
<h3 id="result"></h3>
</section>
</div>
<script>
	var valueload=0;
	progressBar(valueload);
	function progressBar(valueload){
		var bar=document.getElementById("load");
		bar.value=valueload;
		valueload++;
		var loadtime=setTimeout("progressBar("+valueload+")",50);
		if (valueload>100) {
			clearTimeout(loadtime);
			document.getElementById("result").innerHTML="Yüklenme Tamamlandı";
		}
	}	
</script>
</body>
</html>