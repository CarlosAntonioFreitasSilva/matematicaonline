<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: vetores</title>

</head>
<body>

<?php include("header.php") ?>

	<section>
		<h2>Vetores em R<sup>n</sup></h2>
		<p>Os pontos $A=(x_1,...,x_n)$ e $B=(y_1,...,y_n)$ em $\mathbb R^n$ 
		definem um vetor $\overrightarrow{AB}$ em $\mathbb R^n$ no qual denotamos por
		$$\overrightarrow{AB}=(y_1-x_1,...,y_n-x_n).$$</p>
		
		<p>Os elementos $y_i-x_i,$ onde $i=1,...,n$ são chamados <i><b>coordenadas do vetor</b></i> $\overrightarrow{AB}.$
		O vetor $\overrightarrow{AB}$ é representado por um segmento orientado de origem em $A$ e extremidade em $B.$</p>
		<figure>
			<img src="imagens/vetor_AB.PNG" alt="Vetor AB">
			<figcaption>
				Figura 1: Segmento orientado
			</figcaption>
		</figure>
		
		<p><b>Exemplo</b>: No espaço $\mathbb R^3$  o vetor determinado pelos pontos
		 $A=(1,1,2)$ e $B=(4,1,3)$ é dado por
		$$\overrightarrow{AB}=(3,0,1).$$ 
		
		<p class="destaque">O vetor $\overrightarrow{0}=(0,0,...,0) \in \mathbb R^n$, de origem e 
		extremidade no ponto $O=(0,0,...,0)$,  é chamado de <i><b>vetor nulo.</b></i></p>

		<p><b>Exemplo</b>: Sejam $A=(1,2),$ $B=(3,4),$ $C=(1,1)$ e $D=(4,1).$ Assim, o vetor $\overrightarrow{AB}=(2,2)$ e o vetor $\overrightarrow{CD}=(3,0).$ </p>
		<figure>
			<img src="imagens/vetores_AB_CD.PNG" alt="Vetores AB e CD">
			<figcaption>
				Figura 2: Vetores $\overrightarrow{AB}$ e $\overrightarrow{CD}$
			</figcaption>
		</figure>

 		<p><b>Definição</b>: Dois vetores $\overrightarrow{AB}=(x_1,...x_n)$ e $\overrightarrow{CD}=(y_1,...,y_n)$ são ditos iguas se, e somente se, para todo $1\le j \le n$ tem-se
		$$x_j=y_j.$$</p>

		<p><b>Exemplo</b>: Os vetores $\overrightarrow{AB}=(2,-1,3)$ e $\overrightarrow{CD}=(-1,2,3)$ não são iguais, pois a primeira coordenada do vetor $\overrightarrow{AB}$ é diferente da primeira coordenada do vetor $\overrightarrow{CD}$ e o mesmo acontece para a segunda coordenada.</p>

		<p><b>Exemplo</b>: O vetores $\overrightarrow{AB}$ e $\overrightarrow{CD}$ 
		determinado pelos pontos $A=(1,2)$, $B=(3,4)$, $C=(3,1)$ e $C=(5,3)$ são iguais, pois 
		$$\overrightarrow{AB}=\overrightarrow{CD}=(2,2).$$</p>
		<figure>
			<img src="imagens/vetores_equivalentes.PNG" alt="Vetores iguais">
			<figcaption>
				Figura 3: Vetores equivalentes
			</figcaption>
		</figure>

		<p>	Observe deste exemplo que cada um dos vetores 
		$\overrightarrow{AB}$ e $\overrightarrow{CD}$ possuem uma representação 
		geométrica diferente, porém têm as mesmas coordenadas e são, portanto, 
		equivalentes. O que acontece é que a equivalência de vetores no espaço 
		euclidiano $\mathbb R^n$ não depende de sua representação geométrica, 
		mas apenas de suas coordenadas o que dá sentido para definição de vetores iguais.</p>

		<p><b>Exemplo</b>: O vetor  $\overrightarrow{AB}$ determinado pelos pontos $A=(-3,-1)$, $B=(-1,1)$, é igual ao vetor $\overrightarrow{OP}$ de origem no ponto $O=(0,0)$ e extremidade no ponto $P=(2,2).$</p>
		<figure>
			<img src="imagens/representacao_de_vetor_na_origem_2_2.PNG" alt=" Vetor ">
			<figcaption>
				Figura 4: Representação do vetor na origem do plano cartesiano
			</figcaption>
		</figure>

		<p class="destaque"> Já que um vetor é determinado por dois pontos, então uma lista ordenada $v=(x_1,...,x_n)\in\mathbb R^n$ pode ser vista como um vetor de origem no ponto $O=(0,...,0)$ e extremidade no ponto $P=(x_1,...,x_n)$ e 
		assim temos $v=\overrightarrow{OP}.$ </p>

		<p><b>Exemplo:</b> O par ordenado $(3,1) \in\mathbb R^2$  
		é um vetor $v$ de origem no ponto $O=(0,0)$ e 
		extremidade no ponto $P=(3,1).$ O vetor $v$ é um representante 
		de todos os segmentos orientados paralelos a $\overrightarrow{OP}$, 
		de mesmo sentido e mesmo comprimento.</p>
		<figure>
			<img src="imagens/representacao_de_vetor_na_origem_3_1.PNG" alt="Vetor">
			<figcaption>
				Figura 5: Vetor $v=(3,1)$
			</figcaption>
		</figure>
		
		<p><b>Observação:</b> Dois segmentos orientados paralelos, 
		de mesmo sentido e mesmo comprimento são equivalentes. 
		Assim, um segmento orientado $\overrightarrow{AB}$,  
		pode representar o conjunto de todos os segmentos orientados 
		paralelos, de mesmo sentido e mesmo comprimento que 
		$\overrightarrow{AB}$ obtendo assim uma classe de equivalência. 
		No espaço euclidiano escolhemos este representante com a origem no ponto $O.$</p>
	</section>


</body>
</html>
