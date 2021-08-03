<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: espaço euclidiano</title>
<style>
	th{
	width: 80px;
	}

	td{
	height: 25px;
	text-align: center;
	}
</style>

</head>
<body>

<?php include("header.php") ?>
	
	<section>
			<h2>Espaço Euclidiano</h2>
			<p>O espaço euclidiano $\mathbb R^n$ é o conjunto de listas ordenadas $$A=(x_1,...,x_n),$$ cujos  elementos $x_i$ são números reais.  Os elemento $x_1, x_2,...,x_n$ são chamdos de <i><b>coordenadas.</b></i></p>

			<p>É mais comum chamarmos estas listas ordenadas de pontos do espaço euclidiano.</p>

			<p>Dados pontos $A=(x_1,...,x_n)$ e $B=(y_1,...,y_n)$ em $\mathbb R^n$ dizemos que $A=B$ se, e somente se,
			$$x_1=y_1,...,x_n=y_n.$$</p>
			
			<br>
			<p><b>Exemplo</b>: Os pontos $E=(2,1,-3,4)$ e $F=(2,3,-3,4)$ não são iguais, pois têm a segunda coordenada diferente</p>
			<br>

			<p><b>Exemplo</b>: Para $n=2$ temos que os pontos de $\mathbb R^2$ são os pares ordenados $A=(x_1,x_2)$ com $x_1,x_2\in \mathbb R.$ O espaço euclidiano $\mathbb R^2$ é representado geometricamente no plano cartesiano.</p>
		
			<figure>
				<img src="imagens/ponto_no_plano.PNG" alt="Ponto no Plano">
				<figcaption>
					Figura 1: Ponto em R <sup>2</sup>
				</figcaption> 
			</figure>
		
			<p><b>Exemplo</b>: O espaço $\mathbb R^3$  pode ser representado geometricamente por três retas $x,y$ e $z$ perpendiculares entre si em um ponto em comum chamado <i>origem do espaço.</i>
			Cada ponto de $\mathbb R^3$ é uma terna  $P=(x_1,x_2,x_3)$ e a origem é o ponto $O=(0,0,0).$</p>
			
			<figure>			
				<img src="imagens/ponto_no_espaco.PNG" alt="Ponto no espaço">
				<figcaption>
					Figura 2: Ponto em R <sup>3</sup>
				</figcaption>
			</figure>
			
			<p><b>Exemplo</b>: No sistema <span style="color: red">R</span><span style="color: green">G</span><span style="color: blue">B</span>, cada cor é definida pela quantidade de vermelho, verde e azul. As cores no sistema RGB são pontos do espaço $\mathbb R^3$ cujas coordenadas $(r,g,b)$ são números inteiros que variam de $0$ a $255$.
			O Espaço RGB pode ser representado geometricamente em um cubo de aresta de tamanho igual a 255.</p>
			<div style="display: block; max-width: 400px; margin: auto;">
				<table cellspacing="10">
					<tr>
						<th>Cor</th>
						<th>$(r,g,b)$</th>
					</tr>
					<tr>
						<td style="background-color: rgb(255,117,24);"></td>
						<td>(255,117,24)</td>
					</tr>
					<tr>
						<td style="background-color: rgb(102,205,170);"></td>
						<td>(102,205,170)</td>
					</tr>
					<tr>
						<td style="background-color: rgb(227,38,54);"></td>
						<td>(227,38,54)</td>
					</tr>
					<tr>
						<td style="background-color: rgb(255,255,0);"></td>
						<td>(255,255,0)</td>
					</tr>
					<tr>
						<td style="background-color: rgb(173,255,47);"></td>
						<td>(173,255,47)</td>
					</tr>
					<tr>
						<td style="background-color: rgb(221,160,221);"></td>
						<td>(221,160,221)</td>
					</tr>
				</table>
			</div>
	</section>


</body>
</html>