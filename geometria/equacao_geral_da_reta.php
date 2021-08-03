<!DOCTYPE html>
<html>
<head>
<?php include("config.php") ?>
	<title>eometria analítica: retas</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>
		<h2>Equação Geral da Reta</h2>
		<p>Dados um ponto $A=(x_0,y_0)$ e um vetor $u=(a,b)$ em $\mathbb R^2,$ podemos definir a reta $s$ perpendicular ao vetor $u$ que contém o ponto $A.$ A reta $s$ é o conjunto de todos os pontos $P=(x,y)$ tais que o vetor $\overrightarrow{AP}$ é perpendicular ao vetor $u$, $$s=\left \{(x,y)\in\mathbb R^2;\quad <\overrightarrow{AP},v>=0\right\}.$$ Temos que $$<\overrightarrow{AP},v>=0 \Longleftrightarrow ax+by=ax_0+by_0 .$$
		Considerando a constante $c=ax_0+by_0,$ obtemos a equação da reta na forma \begin{equation}ax+by=c.\end{equation}
		A \autoref{reduzida} é chamada \textit{\bfseries equação geral da reta} perpendicular ao vetor $u=(a,b).$</p>

		<p><b>Exemplo: </b>A equação $$2x-1y=-1$$ é de uma reta perpendicular ao vetor $u=(2,-1).$</p>
		<center>Figura</center>


		<p><b>Exemplo: </b> Considerando a reta $r$ do \autoref{ex4}, vamos determinar uma parametrização de tal maneira que a reta passe pelo ponto $A$ em $t=0$ e no ponto $B$ em $t=3.$</p>

	</section>


</body>
</html>
