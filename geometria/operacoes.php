<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: operações com vetores</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>

			<h2>Operações com Vetores</h2>
			<p> A soma de dois vetores $u=(x_1,...,x_n)$ e $v=(y_1,...,y_n) \in \mathbb R^n$ é definida por $$u+v=(x_1+y_1,...,x_n+y_n).$$</p>

			<p><b>Exemplo</b>: A soma dos vetores $u=(3,-4,5)$ e $v=(4,-3,0)$ 
			é o vetor $$u+v=(7,-7,5).$$</p>

			<p><b>Exemplo</b>:	A soma dos vetores $u=(3,5),$  $v=(3,-1)$ e 
			$w=(0,2)$ é o vetor $$u+v+w=(6,6).$$</p>

			<p> A multiplicação de um vetor $u=(x_1,...,x_n)$ por um escalar $t\in\mathbb R$ é definida por
				$$t\cdot u=(tx_1,...,tx_n).$$</p>

			<p><b>Exemplo</b>: A multiplicação do escalar $t=2$ pelo vetor $u=(1,-2,1)$  é o vetor $$2\cdot u=(2,-4,2).$$</p>

			<p><b>Exemplo</b>: O vetor $u=(9,-3,3)$ é um múltiplo do vetor $v=(-3,1,-1)$, pois  $$u=-3\cdot v.$$</p>

			<p class="destaque">	O espaço euclidiano $\mathbb R^n$ munido dessas operações torna-se um espaço vetorial, isto é, tais operações possuem todas as propriedades  da definição de espaço vetorial.</p>

			<h3>Representação geométrica</h3>

			<p>	Dados vetores $u$ e $v$ no espaço euclidiano,  para representar geometricamente o vetor $u+v$  traçamos uma reta paralela ao vetor $v$ passando pela extremidade de $u$ e uma reta paralela ao vetor $u$ passando pela extremidade de $v$ e em seguida marcamos o ponto de interseção dessas retas. O vetor $u+v$ terá sua origem em O e sua extremidade no ponto de interseção dessas retas.</p>
			<figure>
				<img src="imagens/soma_de_vetores.PNG" alt="Soma de vetores" >
				<figcaption>
					Figura 1: Soma de vetores
				</figcaption>
			</figure>

			<p>O vetor $\lambda \cdot v$ é representado sobre uma reta que contém o vetor $v$ e,além disso, terá o mesmo sentido se $\lambda &gt;0$ e sentido contrário se $\lambda&lt;0.$ Além da operação de multiplicação por um escalar poder mudar o sentido do vetor pode, também, mudar o seu comprimento no caso em que $0&lt;\lambda&lt;1$ o comprimento diminui e caso $\lambda&gt;1$ o comprimento aumenta. Isto será demonstrado no estudo de norma de vetores.</p>
			<figure>
				<img src="imagens/multiplicacao1.PNG" alt="Vetor múltiplo de v">
				<figcaption>
					Figura 2: $\lambda&lt;0$
				</figcaption>
				<img src="imagens/multiplicacao2.PNG" alt="Vetor múltiplo de v">
				<figcaption>
					Figura 3: $0&lt;\lambda&lt;1$
				</figcaption>
				<img src="imagens/multiplicacao3.PNG" alt="Vetor múltiplo de v">
				<figcaption>
					Figura 4: $1&lt;\lambda$
				</figcaption>
 			</figure>

			<p><b>Definição</b>: Dizemos que	os vetores $v,w\in \mathbb R^n$ são paralelos se existe um $t\in\mathbb R$ 
			tal que $$w=t\cdot v.$$</p>

			<p><b>Exemplo: </b> Os vetores $u=(2,2)$ e $v=(1,3)$ não são paralelos. Para todo $t\in\mathbb R$ tal que
			$$(2,2)=t\cdot(1,3)$$
			tem-se que 
			$$
			\begin{cases}
				2=t\\
				2=3t.
			\end{cases}
			$$
			Não existe uma solução para o sistema, portanto, os vetores não são paralelos.</p>
			
			<h2>Combinação Linear</h2>
			<p>Seja $V$ um espaço vetorial. Dizemos que um vetor $v\in V$ é uma <i><b>combinação linear</b></i> dos vetores $v_1,v_2,...,v_s \in V$ se exsitem $\lambda_1,...,\lambda_s \in\mathbb R$ tais que
			$$v=\lambda_1\cdot v_1+\lambda_2\cdot v_2+\cdots+\lambda_s\cdot v_s.$$
			</p>

			<p><b>Exemplo</b>: Seja $v=(1,-2,1) \in\mathbb R^3.$ Temos que 
			$$v=1\cdot(1,0,0)-2\cdot(0,1,0)+1\cdot(0,0,1),$$
			então $v$ é uma combinação linear dos vetores 
			$\overrightarrow{i}=(1,0,0),$ $\overrightarrow{j}=(0,1,0)$ e 
			$\overrightarrow{k}=(0,0,1).$</p>

			<p><b>Exemplo</b>: Seja $v=(x,y,z)$ um vetor qualquer em $\mathbb R^3.$ Temos que 
			$$v=x(1,0,0)+y(0,1,0)+z(0,0,1).$$ 
			Qualquer vetor de $\mathbb R^3$ é uma combinação linear dos vetores $\vec{i}=(1,0,0),$ $\vec{j}=(0,1,0)$ e $\vec{k}=(0,0,1).$ Podemos dizer que os vetores $\vec{i}$, $\vec{j}$ e $\vec{k}$ são geradores do espaço $\mathbb R^3.$ O vetor $v$ pode, também, ser escrito na forma $$v=x\vec{i}+y\vec{j}+z\vec{k}.$$ Dado o vetor $v=(2,-3,-4),$ escrevemos $$v=2\vec{i}-3\vec{j}-4\vec{k}.$$</p>
	</section>


</body>
</html>
