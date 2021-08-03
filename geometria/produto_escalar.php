<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: produto escalar</title>

</head>
<body>

<?php include("header.php") ?>

	<section>
		<h2>Produto escalar</h2>
		<p>Sejam $u=(x_1,...,x_n)$  $v=(y_1,...,y_n)$ vetores em $\mathbb R^n.$ Definimos o produto escalar entre os vetores $u$ e $v$ por $$u\cdot v=x_1y_1+...+x_ny_n.$$</p> 
		<p><b>Exemplo:</b> Dados os vetores $v=(1,5,0,3-2)$ e $w=(3,1,-1,2,2)$ o produto escalar de $v$ por $w$ é
		$$v\cdot w=1\cdot3+5\cdot 1+0\cdot(-1)+3\cdot2+(-2)\cdot2=10$$
		Observe que o produto escalar entre dois vetores é um número. </p>
		
		<p><b>Proposição </b>:  Sejam $u, v$ e $w$ vetores em $\mathbb R^n$ e $\lambda \in\mathbb R$.
		<ol type="i">
			<li>$u\cdot v =v \cdot u$</li>
			<li>$u+v \cdot w =u \cdot w + v\cdot w$</li>
			<li>$\lambda v \cdot u =\lambda v\cdot u$</li>
			<li>$\|v\|^2=v \cdot v$</li>
		</ol>
				<p><b>Proposição [Desiguldade de Cauchy-Schwarz]</b>: Sejam $u, v$ vetores em $\mathbb R^n$. Então
		$$|u\cdot v|\le\|u\|\|v\|.$$</p>
		 
		<p><b><i>Demonstração: </i></b> Seja $\lambda>0$ e considere o vetor $\lambda v+u.$ Temos então que $$\|\lambda v+u\|^2\ge 0.$$ Desta forma, obtemos $$(v\cdot v)\lambda^2+2 (u\cdot v) \lambda+u \cdot u\ge0.$$</p>
		
		<p>A desigualdade é uma inequação de segundo grau  da forma $$A\lambda^2+B\lambda+C\ge0, \quad \forall\lambda\in\mathbb R.$$
		Assim é suficiente que $\Delta\le0$, ou seja, $$4(v\cdot u)^2-4(v\cdot v)(u\cdot u)\le0.$$ Portanto $$\vert v \cdot u\vert\le\|v\|\|u\|.$$</p>
		
		<p><b>Proposição [Desigualdade Triângular]</b>: Para quaisquer vetores $u,v \in\mathbb R^n$ tem-se
		$$\|u+v\|\le\|u\|+\|v\|.$$</p>
		
		<p><b><i>Demonstração: </i></b>
		Para quaisquer vetores $u,v \in\mathbb R^n$ tem-se que
		$$\|u+v\|^2=\|u\|^2+2u\cdot v\|v\|^2.$$
		Segue da desigualdade de Cauchy-Schwarz que
		$$u \cdot v\le\|u\|\|v\|,$$
		consequentemente
		$$\|u+v\|^2\le\|u\|^2+2\|u\|\|v\|+\|v\|^2=\left(\|u\|+\|v\|\right)^2.$$
		Logo
		$$\|u+v\|\le\|u\|+\|v\|.$$</p>

	</section>


</body>
</html>
