<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php")?>
<title>Geometria analítica: distância</title>
</head>
<body>

<?php include("header.php") ?>
	
	<section>
			<h2>Distância</h2>
			<p>A distância entre pontos é um conceito fundamental, pois partir da noção de métrica é que definimos 
			circunfêrencia, esfera, elipse, hipérbole e vários outros cojuntos importantes estudados em geometra 
			analítica e, além disso, construímos a geometria em espaços até mais gerais que o espaço euclidiano. A 
			métrica possibilita tanto no estudo da Topologia em espaços métricos quanto na Geometria Diferencial. 
			Desta forma, faz-se necessário definirmos, de uma maneira ideal, a distância entre dois pontos no espaço euclidiano.
			</p>

			<p><b>Definição</b>: Sejam $A=(x_1,...,x_n)$ e $B=(y_1,...,y_n)$ pontos em $\mathbb R^n$ definimos a <i><b>distância euclidiana</b></i> entre $A$ e $B$ por
			$$d(A,B)=\sqrt{(x_1-y_1)^2+...(x_n-y_n)^2.}$$</p>



			<p><b>Exemplo:</b> A distância entre os pontos $A=(1,0,3,-2)$ e $B=(-2,2,0,-3)$ é dada por 
			$$d(A,B)=\sqrt{(1+2)^2+(0-2)^2+(3-0)^2+(-2+3)^2}=\sqrt{23}$$</p>

			<p><b>Exemplo: </b> A fórmula da distância entre dois pontos é motivada pelo Teorema de Pitágoras e pode ser facilmente interpretada geometricamente no caso do espaço euclidiano $\mathbb R^2$ onde a distância entre dois pontos, $A=(x_1,y_1)$ e $B=(x_2,y_2)$, se resume em $$d(A,B)=\sqrt{(x_1-x_2)^2+(y_1-y_2)^2}.$$</p>
			<figure>
				<img src="imagens/distancia.PNG" alt="Distância entre dois pontos">
				<figcaption>
					Figura 1: Distância entre $A$ e $B$.
				</figcaption>
			</figure>
			<p>Observe que pelo Teorema de Pitágoras tem-se $$d(A,B)^2=(x_1-x_2)^2+(y_1-y_2)^2.$$</p>

			<p class="destaque">Escreva a distância entre dois pontos no espaço euclidiano $\mathbb R^3$ e tente visualizar o Teorema de Pitágoras motivando esta fórmula</p>
			
			<h3>Circunferência</h3>
			<p>No espaço euclidiano $\mathbb R^2$ a circunferência de centro em $C=(x_0,y_0)$ e raio $r$ é o conjunto de todos os pontos $P=(x,y)$ cuja a distância até o ponto $C$ é igual a $r,$ isto é, $$d(P,C)=r.$$
			Assim, sua equação é dada por \begin{equation}(x-x_0)^2+(y-y_0)^2=r^2.\end{equation}</p>
			
			<figure>
				<img src="imagens/circunferencia.PNG" alt="Circunferência de centro no ponto C e raio igual a r.">
				<figcaption>
					Figura 2: Circunferência de centro em $C$ e raio $r$
				</figcaption>
			</figure>

			<p class="destaque">Para saber se um ponto $P=(x,y)$ pertence à circunferência basta substituir suas coordenadas na sua equação e verificar se formam uma solução.</p>


			<p><b>Exemplo:</b> A equação $(x-1)^2+(y+2)^2=4$ é de uma circunferência de centro em $C=(1,-2)$ e raio igual a $4$. O ponto $A=(1,0)$ pertence a circunferencia, pois suas coordenadas formam uma solução para a equação, isto é,
			$$(1-1)^2+(0+2)^2=4.$$ O ponto $B=(2,3)$ não pertence à circunferencia, pois $$(2-1)^2+(3+2)^2\neq 4 $$
			</p>

			<h3>Esfera</h3>
			<p>Uma esfera de centro no ponto $C\in\mathbb R^3$ e raio $r$ no espaço euclidiano $\mathbb R^3$ é o conjunto de todos os pontos $X\in\mathbb R^3$ cuja distância até o ponto $C$ é igual a $r$. 
			 </p>

			<figure>
				<img src="imagens/esfera.PNG" alt="Esfera de cnetro no ponto A e raio igual a r.">
				<figcaption>
					Figura 3: Esfera de centro em $A$ e raio $r$
				</figcaption>
			</figure>

			<p>Desta maneira, se $X=(x,y,z)$ é um ponto da esfera de centro em $C=(x_0,y_0,z_0)$ tem-se que $$d(X,C)=r,$$ e, consequentemente, obtem-se a equação da esfera dada por $$(x-x_0)^2+(y-y_0)^2+(z-z_0)^2=r^2$$</p>

			<p class="destaque">Para saber se um ponto $P=(x,y,z)$ pertence à esfera basta substituir suas coordenadas na sua equação e verificar se formam uma solução.</p>
	</section>


</body>
</html>
