<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>eometria analítica: parametrização</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>
<h2>Parametrização</h2>

		<p>Quando uma partícula $P$ descreve uma trajetória em $\mathbb R^2$ podemos determinar sua posição a cada instante $t$, isto é, suas coordenadas podem ser dadas em função do tempo e escrevemos $P=(x(t),y(t)).$ Parametrização de curvas no espaço euclidiano consiste em determinar as coordenadas de seus pontos em função de um parâmetro $t\in \mathbb R$. Assim, uma curva parametrizada no espaço euclidiano é uma função que associa cada $t\in I\subset\mathbb R$ a um único ponto $P(t) \in \mathbb R^n.$</p>


		<p><b>Exemplo: </b> Uma particula descrevendo a trajetória no sentido anti-horário de uma circunferência de centro na origem e raio $r$ tem coordenadas $P(t)=(rcos(t),rsen(t)).$ A função $P(t)$ é uma parametrização para esta circunferência. 

		<center>Animação</center>

		Observe que para todo $t\in \mathbb R$ tem-se que $x=rcos(t)$ e $y=rsen(t)$ são soluções para a equação da circunferência $$x^2+y^2=r^2.$$</p>

		<p><b>Exemplo: </b> A trajetória descrita pela particula cujas coordenadas, para cada instante $t,$ são $P(t)=(e^{t}\cos(t),e^{t}\sin(t)),$ é uma espiral como mostra a figura abaixo.</p>

		<center>Animação</center>


		<p><b>Exemplo: </b> A função $P(t)=(-1+t, 3+2t)$ é a parametrização de uma reta em $\mathbb R^2.$ Para cada $t\in\mathbb R$ tem-se que $P(t)$ é um ponto desta reta.</p>

		<center>Animação</center>

	</section>


</body>
</html>
