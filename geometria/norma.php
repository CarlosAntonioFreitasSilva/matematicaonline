<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: norma de vetores</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>

		<h2>Norma</h2>
		<p>Definimos a norma de um vetor $v=(x_1,x_2,...,x_n)$ no espaço euclidiano como sendo $$\Vert v\Vert=\sqrt{x_1^2+x_2^2+\cdots+x_n^2}.$$
		 A norma do vetor $v$ é a medida de seu comprimento.</p>

		<p><b>Exemplo</b>: O vetor $v=(2,-3,-1)$ tem o seu comprimento  dado por $$\Vert v\Vert=\sqrt{2^2+(-3)^2+(-1)^2}=\sqrt{14}.$$</p>

		<p>Se $v=(x_1,x_2,...,x_n)\in\mathbb R^n$ e $t\in\mathbb R$ temos que 
		$$\Vert t\cdot v\Vert=\sqrt{(tx_1)^2+(tx_2)^2+\cdots+(tx_n)^2}=|t|\sqrt{x_1^2+x_2^2+\cdots+x_n^2}.$$
		Assim, obtemos uma propriedade de norma de vetores que é dada por
		$$\Vert t\cdot v\Vert=|t|\Vert v\Vert$$</p>

		<p><b>Exemplo</b>: O vetor $w=(4,-3)$ tem norma igual a 5 e o vetor $-3\cdot w=(-12,9)$ tem norma igual a 15, isto é, temos que
		$$\Vert -3\cdot w\Vert=|-3| \vert w\Vert$$</p>

		<p><b>Exemplo</b>: Considere um vetor $v=(x_1,x_2,...,x_n)$ de comprimento igual a zero. Tal vetor deve ser, necessariamente, o vetor nulo. Observe que se 
		 $$\Vert v\Vert=\sqrt{x_1^2+x_2^2+\cdots+x_n^2}=0,$$
		então é necessário que
		$$x_1^2+x_2^2+\cdots+x_n^2=0.$$
		 Como esta última expressão é uma soma de números positivos,  então $x_i=0$ para $1\le i\le n$ e, portanto, $v=(0,0,...,0).$ Podemos concluir que
		 $$\Vert v\Vert=0 \Leftrightarrow v=\vec{0}$$</p>

		<p>
		Considere os vetores $u=(x_1,...,x_n)$ e $v=(y_1,...,y_n)$ em $\mathbb R^n.$ A norma do vetor $u-v$ é dada por 
		$$\Vert u-v\Vert=\sqrt{(x_1-y_1)^2+(x_2-y_2)^2+...+(x_n-y_n)^2}.$$ Elevando ambos os membros ao quadrado e desenvolvendo o produto notável de cada parcela temos que 
		$$\Vert u-v\Vert^2=x_1^2-2x_1y_1+y_1^2+\cdots+x_n^2-2x_ny_n+y_n^2.$$ 
		Esta expressão pode ser escrita na seguinte forma
		$$ \Vert u-v\Vert^2=\Vert u\Vert^2+\Vert v\Vert^2-2(x_1y_1+\cdots x_ny_n) $$
		</p>
		
		<p class="destaque"> Ao calcular a norma da soma dos vetores $u$ e $v$ obtivemos na terceira parcela a expressão $x_1y_1+\cdots x_ny_n.$ Esta expressão aparece em outras situações, como por exemplo no cálculo de ângulo entre vetores, e é chamada de <i><b>produto escalar</b></i> entre os vetores $u$ e $v.$ É indispensável, portanto,  que dediquemos um pouco de tempo no estudo desta expressão, o que será feito no proximo tópico.
		</p>
	</section>


</body>
</html>
