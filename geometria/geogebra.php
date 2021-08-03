<!DOCTYPE html>
<html>
<head lang="pt-br">
<?php include("config.php") ?>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>

<title>Calculadora gráfica - Geogebra</title>
</head>
<body>

	<header>
			<span class="botao" id="menu">&#9776; Menu</span>
			<span style="color: transparent;">Geometria Analítica</span>
			<a href="../index.html"><img src="logo.png" style="height: 50px ; position: absolute; right: 15px; top: 15px;"></a>
	</header>

<section> 
<!-- http://dev.geogebra.org/trac/wiki/WikiStart -->
 <div id="ggb-element"></div> 
</section>

<script>  
    var ggbApp = new GGBApplet({"appName": "graphing", "width": 800, "height": 550, "showToolBar": true, "showAlgebraInput": true, "showMenuBar": true }, true);
    window.addEventListener("load", function() { 
        ggbApp.inject('ggb-element');
    });
</script>
</body>
</html>