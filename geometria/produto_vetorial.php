<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>eometria analítica: produto vetorial</title>

</head>
<body>

<?php include("header.php")?>
	
	<section>
		<h2>Produto Vetorial</h2>
		<p>Uma força aplicada em um objeto tende a a faze-lo girar em torno de um eixo fora da linha de ação da força. A tendência deste objeto girar é chamada de <i><b>momento</b></i> e este eixo é denominado <i><b>eixo de momento</b></i>.
		 </p>
		 <img src="imagens/garrafa.png" alt="Imagem: Garrafa" />
		 <p>Por exemplo, considere uma força $F$ sendo aplicada em uma garrafa num ponto $A,$ como mostra a figura, então esta garrafa tende a girar em torno do eixo de momento que passa por um ponto $B$ perpendicular ao
		 plano de ação da força e o vetor $\overrightarrow{BA}.$ O vetor $\overrightarrow{BA}$ é chamado <i><b>braço de momento.</b></i> O momento é uma grandeza vetorial que dá a direção do eixo de momento. Assim, para determinarmos a
		 direção do momento de uma força precisamos encontar um vetor que seja perpendicular a força e ao braço de momento simultaneamente. Para resolvermos este tipo de problema utilizamos a noção de produto vetorial em 
		 $\mathbb R^3.$</p>

		<p>Considere dois vetores $u=(x_1,y_1,z_1)$ e $v=(x_2,y_2,z_2) \in \mathbb R^3.$ Para determinarmos um vetor $w=(a,b,c)$ perpendicular a $u$ e $v$, simultaneamente, devemos encontrar uma solução para o sistema

		\begin{equation}
			\begin{cases}
			x_1a+y_1b+z_1c=0\\
			x_2a+y_2b+z_2c=0.\\
			\end{cases}
		\end{equation}</p>


		<p>Podemos observar que o sistema tem uma infinidade de soluções. O vetor
		$$w_1=(y_1z_2-y_2z_1, x_2z_1-x_1z_2, x_1y_2-x_2y_1) \qquad\qquad (1)$$
		 é uma solução para o sistema e é chamado de <i><b>produto vetorial</b></i> de $u$ por $v$. </p>
		 
		<p><b>Exemplo</b>: Considere os vetores $u=(1,-2,0)$ e $v=(-3,1,-2).$ O produto vetorial de $u$ por $v$ é o vetor
		$$w_1=(4,2,-7).$$ Note que $w_1$ é, simultaneamente, perpendicular a a $u$ e $v.$</p>
		  
		   
		<p>É importante observar que o vetor $$\label{vxu}w_2=(y_2z_1-y_1z_2, x_1z_2-x_2z_1, x_2y_1-x_1y_2)$$
		 é, também, uma solução para o sistema e é chamado produto vetorial de $v$ por $u$.</p> 

		<p><b>Exemplo</b>:  Dados os vetores $u=(2,-5,1)$ e $v=(2,3,-3)$ temos que $w_1=(12,8,16)$ e $w_2=(-12,-8,-16)$ são vetores perpendiculares a $u$ e $v$ simultaneamente.</p>

		<p>O produto vetorial de $u$ por $v$ será indicado por $u\times v$ e o produto vetorial de $v$ por $u$ será indicado por $v\times u.$ Tais vetores tem sentidos opostos, isto é, $v\times u=-u\times v.$</p>

		<img src="imagens/produto_vetorial.PNG" class="figuras" alt="Produto vetorial">

		<h3>Método prático para cálculo do produto vetorial</h3>

		<p>As coordenadas do produto vetorial de $u=(x_1,y_1,z_1)$ por $v=(x_2,y_2,z_2)$ podem ser calculadas utilizando a matriz

		$$
			M=\left[
				\begin{array}{ccc}
					i&j&k\\
					x_1&y_1&z_1\\
					x_2&y_2&z_2
				\end{array}
			\right]
		$$
		e por meio de seu determinante dado por
		$$det (M)=(y_1z_2-y_2z_1)i-(x_1z_2-x_2z_1)j+(x_1y_2-x_2y_1)k.$$</p>

		<p>Os coeficientes que multiplicam $i, j, k$ serão, respectivamente, a primeira, segunda e terceira coordenada de $u\times v$. Desta maneira, obtemos  o vetor $$u\times v=(y_1z_2-y_2z_1, x_2z_1-x_1z_2, x_1y_2-x_2y_1)$$ que é o mesmo da expressão <span class="tooltip">$(1)$<span class="tooltiptext" style="width: 380px;">$w_1=(y_1z_2-y_2z_1, x_2z_1-x_1z_2, x_1y_2-x_2y_1)$</span></span>. Para obter o vetor $v\times u$ basta permutar as linhas 2 e 3 da matriz $M$ e fazer o mesmo processo.</p>

		<p><b>Exemplo</b>:  Dados os vetores $u=(2,-2,2),$ $v=(-5,0,2)$ e calculando o determinante
		$$
		\left|
		\begin{array}{rrr}
			i&j&k\\
			2&-2&2\\
			-5&0&2
		\end{array}
		\right|=-4i-14j-10k,
		$$
		temos que $$u\times v=(-4,-14,-10).$$
		Ao permutarmos as linhas 2 e 3 o  determinante muda de sinal e, consequentemente, teremos
		$$v\times u=(4,14,10).$$</p>

		<p><b>Exemplo</b>: [Momento de uma força] Uma estrutura tubular está sujeita a uma força de 80 N como mostra a figura abaixo. Determine a direção do eixo de momento dessa força em relaçao ao ponto $C$.</p>

		<img src="imagens/estrutura1.png" alt="Imagem: Estrutura"/>
 
		<p>O eixo de momento é perpendicular ao plano que contém a força e o braço de momento. O braço de momento é o vetor $\vec{r}$ com origem no ponto $A$ e extremidade em $C$. No sistema SI suas coordenadas são dadas por
		$$\vec{r}=(0.55,0.4,-0.2).$$</p>

		<p>As coordenadas da força $\vec{F}$ são dadas por $\vec{F}=(40\sqrt{3}\sin 40º,40\sqrt{3}\cos 40º,-40).$ Considerando $\sin40º=0.64$ e $\cos40º=0.76$ temos $$\vec{F}=(44.34, 52.65,-40).$$
		O momento da força $\vec{F}$ em relação ao ponto $C$ é o vetor $\vec{r}\times \vec{F},$e suas componentes são calculados a partir do determinante
		$$\left|\begin{array}{ccc}
		i&j&k\\
		0.55&0.4&-0.2\\
		44.34&52.65&-40\\
		\end{array}\right|$$

		$$=-5.47i+13.132j+11.2215k,$$ e obtemos, portanto, $$\vec{r}\times\vec{F}=(-5.47, 13.132, 11.2215)$$
		A intensidade do momento é dada por $\Vert\vec{r}\times\vec{F}\Vert=18.12$ N$\cdot$ m.</p>

		<p><b>Exemplo</b>: Determine a intensidade do momento da força $\vec{F}$ em relação ao ponto $A,$ onde $\theta=30º.$ 
		<img src="imagens/estrutura3.png" alt="Imagem: Estrutura">
		Considerando um sistema de coordenadas cartesianas com a origem no ponto $A$ temos que o braço de momento é $$\vec{r}=(-3,2,0).$$
		As componentes da força $\vec{F}$ são dadas por
		$$\vec{F}=(-400\cos30º,-400\sin30º, 0)=(-200\sqrt{3},-200,0).$$
		 Calculando as componentes do momento $\vec{r}\times \vec{F}$ através do determinante
		 $$\left|\begin{array}{ccc}
		i&j&k\\
		-3&2&0\\
		-200\sqrt{3}&-200&0\\
		\end{array}\right|=(600+400\sqrt{3})k,$$
		obtemos, portanto,
		$$\vec{r}\times \vec{F}=(0,0,600+400\sqrt{3})$$
		A intensidade do momento é $\Vert\vec{r}\times \vec{F}\Vert=1292,8$ N$\cdot$m.</p>


		<h3>Propriedades</h3>
		<p>É importane observar algumas propriedades do produto vetorial. Dados vestores $u, v, w\in\mathbb R^3$ e $t\in\mathbb R$ então:
			<ol>
				<li>$(u + v)\times w=u\times w + v\times w$ e $w \times (u+v)=w\times u+ w\times v$</li>
				<li>$(t u)\times v= u\times(tv)=t(u\times v)$</li>
			</ol>

			A propriedade associativa no produto vetorial não é válida, isto é, $$(u\times v)\times w\neq u\times(v\times w).$$ Dê um exemplo para mostrar que a associatividade não é válida.

		<h2>Área do Paralelogramo</h2>

		 <p>A área do paralelogramo determinado pelos vetores $u$ e $v$ em $\mathbb R^n$ é calculada através da expressão $$A^2=\Vert u\Vert^2\Vert v\Vert^2-(u\cdot v)^2.$$ No caso do espaço euclidiano $\mathbb R^3$  esta expressão pode ser simplificada onde podemos demonstrar que $$\Vert u\Vert^2\Vert v\Vert^2-(u\cdot v)^2=\Vert u\times v\Vert^2 \qquad (1).$$</p>

		 <p>O leitor deverá demonstrar a expressão (1) através dos passos a seguir:
		 	<ol>
		 		<li>Considere os vetores $u=(x_1,y_1,z_1)$ e $v=(x_2,y_2,z_2);$</li>
		 		<li>Calcule as normas de $u$ e $v$, o produto escalar $u\cdot v$ e substitua no lado esquerdo da igualdade (1);</li>
		 		<li>Simplifique até chegar na expressão $$x_1^2y_2^2+x_1^2z_2^2+y_1^2x_2^2+y_1^2z_2^2+z_1^2x_2^2+z_1^2y_2^2-2x_1x_2y_1y_2-2x_1x_2z_1z_2-2y_1y_2z_1z_2 \quad (*) $$</li>
		 		<li>Determine as coordenadas do vetor $u\times v$;</li>
		 		<li>Calcule $\Vert u\times v\Vert^2$ e chegará na expressão (*) novamente e, assim, verificará a igualdade;</li>
		 	</ol>
		 </p>

		<p><b>Exemplo:</b> Dados $u=(2,3,3)$ e $v=(-1,0,-2)$, então a área do paralelogramo determinado por $u$ e $v$ é o módulo do vetor $u\times v.$
		 Temos
		 $$\left|\begin{array}{rrr}
		i&j&k\\
		2&3&3\\
		-1&0&-2\\
		\end{array}\right|=-6i+1j+3k,$$ e, portanto, $$u\times v=(-6,1,3).$$ A área do paralelogramo é $A=\sqrt{46}.$</p>

		<h2>Volume do Paralelepípedo</h2>

		<p><b>Exemplo</b>: Os vetores $u, v$ e $w$ em $\mathbb R^3$ determinam um paralelepípedo  como mostra a figura.</p>

		<img src="imagens/volume_do_paralelepipedo.PNG" alt="Paralelepípedo">

		<p>O volume do paralelepípedo é o produto da área da base pela sua altura. Considerando a base como sendo o paralelogramo determinado pelos vetores $u$ e $v$, então sua área é dada por $\Vert u\times v\Vert$ como na expressão (1). A altura $h$ é um segmento paralelo ao vetor $u\times v$ e é traçada, perpendicularmente, a partir da extremidade do vetor $w$ até à base.</p>

		<img src="imagens/volume_do_paralelepipedo1.PNG" alt="Paralelepípedo">
		

		<p>Temos, então, que $$h=\Vert w\Vert |\cos\theta|.$$ Por outro lado, como $\theta$ é o ângulo entres os vetores  $u\times v$ e $w$ temos, também, que $$\cos\theta=\frac{(u\times v \cdot w)}{\Vert u\times v\Vert\Vert w\Vert}.$$ Portanto, a altura é dado por $$h=\frac{|(u\times v\cdot w)|}{\Vert u\times v\Vert},$$ e, consequentemente, o volume é dado por $$V=|(u\times v \cdot w)|.$$</p>

		<p>O número $(u\times v\cdot w)$ é chamado <i><b>produto misto</b></i> entre os vetores $u, v$ e $w.$</p>
	</section>


</body>
</html>
