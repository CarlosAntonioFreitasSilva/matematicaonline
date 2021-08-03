<!DOCTYPE html>
<html>
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: retas</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>
		<h2>Equação Cartesiana da Reta</h2>

		<p>A equação de uma reta $r$ em $\mathbb R^2$ pode ser escrita na forma \begin{equation} y=mx+k\end{equation} chamada <b><i>equação cartesiana</i></b> da reta. Considere $r$ uma reta paralela ao vetor $v=(a,b),$ onde $b\neq0$, parametrizada por
		\begin{align}
		x=&x_0+at  \\
		y=&y_0+bt. 
		\end{align}
		Multiplicando $x$ e $y$ por $b$ e $a$, respectivamente, e em seguida subtraindo obtemos $$bx-ay=bx_0-ay_0,$$ o que nos dá $$y=\frac{b}{a}x+\frac{ay_0-bx_0}{b}.$$</p>
		
		<p>Assim, obtemos a equação da reta na forma da \autoref{cartesiana}, onde $m=\dfrac{b}{a}$ e $k=\dfrac{ay_0-bx_0}{b}.$  Observe que $m$ é igual a tangente do ângulo que o vetor $v$ faz com o eixo $x$ que é o mesmo ângulo que a reta faz com o eixo $x.$ Dizemos que $m$ é o <b><i>cofeciente angular da reta.</i></b></p>

	</section>


</body>
</html>
