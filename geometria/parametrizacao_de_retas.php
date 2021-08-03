<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: parametrização de retas</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>
		<h2>Parametrização de Retas</h2>

		<p>Para parametrizar uma reta no espaço euclidiano consideremos, inicialmente, um ponto $A=(a_1,...,a_n)$  e um vetor $v=(v_1,...,v_n)$  em $\mathbb R^n$. A reta paralela ao vetor $v$ e que contém o ponto $A$, denotada por $r$, é o conjunto de todos os pontos $P=(x_1,...,x_n)\in \mathbb R^n$ tais que o vetor $\overrightarrow{AP}$ é paralelo a $v$ , isto é, para cada ponto $P\in r$ existe um $t\in\mathbb R$ tal que
		$$\overrightarrow{AP}=tv.$$ 
		Sendo assim, temos que $$(x_1-a_1,...,x_n-a_n)=t(v_1,...,v_n).$$ Da \autoref{reta} temos que os pontos $P\in r$ são dados por
		$$P=(a_1+tv_1,...,a_n+tv_n), \qquad t\in\mathbb R.$$</p>
		
		<p>Observe que da \autoref{parametrizacao} cada coordenada $x_i$, $i=1,...,n,$ do ponto $P\in r$ é uma função real dependendo do parâmetro $t\in R$, dada por $$x_i(t)=a_1+v_it,$$ além disso, a reta ``passa'' \footnote{Passar não é no sentido de que a reta se movimenta, mas no sentido de que a reta é a trajetória de uma partícula que passa por um ponto $P$ num instante $t_0\in\mathbb R$} pelo ponto $A$ em $t=0.$ Podemos definir a função $$\alpha(t)=(a_1+tv_1,...,a_n+tv_n), \qquad t\in\mathbb R,$$ chamada \textit{\bfseries parametrização da reta} que é paralela ao vetor $v=(v_1,...,v_n)$ que contém o ponto $A=(a_1,...,a_n).$ Note que $\alpha(0)=A.$</p>

				<p><b>Exemplo: </b>Se $A=(x_0,y_0)$ e $v=(a,b)$, então uma parametrização da reta que passa pelo ponto $A$ na direção do vetor $v$ é dada colocando para todo $t\in\mathbb R$
		\begin{align*}
		x=&x_0+at\\
		y=&y_0+bt
		\end{align*}
		obtendo $\alpha(t)=(x_0+at,y_0+bt).$</p>


		<p><b>Exemplo: </b></p> Se $B=(x_0,y_0,z_0)$ e $u=(a,b,c)$, então uma parametrização da reta que passa pelo ponto $B$ na direção do vetor $u$ é dada colocando para todo $t\in\mathbb R$
		\begin{align*}
		x=x_0+at\\
		y=y_0+bt\\
		z=z_0+ct
		\end{align*}
		obtendo $\alpha(t)=(x_0+at,y_0+bt,z_0+ct).$</p>


		<p><b>Exemplo: </b> A reta $r$ que contém o ponto $A=(1,-2)$ paralela ao vetor $v=(3,1)$ pode ser parametrizada colocando 
		\begin{align*}
		x=1+3t
		y=-2+t,
		\end{align*}

		e assim escrevemos $r(t)=(1+3t,-2+t).$</p>


		<p><b>Exemplo: </b> Considere os pontos $A=(2,3,0)$ e $B=(1,4,2)$ em $\mathbb R^3.$ Para determinarmos uma parametrização da reta $r$ que  contém os pontos $A$ e $B$ precisamos de um vetor que dá a direção desta reta e, neste caso, escolhemos o próprio vetor $v=\overrightarrow{AB}=(-1,1,2).$ Considerando o  ponto $A$ e fazendo para todo $t\in \mathbb R$
		\begin{equation}
		\begin{array}{rl}
		x&=2-t\\
		y&=3+t \\
		z&=2t
		\end{array}
		\end{equation}
		obtemos uma parametrização $\alpha(t)=(2-t, 3+t,2t).$ Se considerarmos o ponto $B$ e fizermos para todo $t\in\mathbb R$
		\begin{equation}
		\begin{array}{rl}
		x=&1-1t \\
		y=&4+t \\
		z=&2+2t
		\end{array}
		\end{equation}
		iremos obter outra parametrização $\beta(t)=(1-t,4+t,2+2t)$ para a reta $r.$
		Observe que na parametrização \ref{parametrizacao1} a reta passa pelos pontos $A$ e $B$ em $t=0$ e $t=1$, respectivamente.  Em \ref{parametrizacao2} a reta passa pelos pontos $A$ e $B$ respectivamente em $t=-1$ e $t=0.$</p>


		<p><b>Exemplo: </b>Considere as retas $\alpha(t)=(-1+2t,5-3t)$ e $\beta(t)=(-1+4t,5-6t)$ em $\mathbb R^2.$ A reta $\alpha(t)$ passa pelo ponto $P=(-1,5)$ na direção do vetor $v=(2,-3)$ e a reta $\beta(t)$ é passa pelo ponto $P$ na direção do vetor $u=(4,-6).$ Assim, temos que as retas $\alpha(t)$ e $\beta(t)$ tem a mesma direção e passam pelo mesmo ponto e são, portanto, iguais. Neste caso, temos que embora as parametrizações são distintas a velocidade que um ponto se desloca nesta reta é diferente para cada parametrização. Observe que para $t=0$ temos que $\alpha(0)=\beta(0)=P$, enquanto que para $t=1$ temos que $\alpha(1)=(1,2)$ e $\beta(1)=(3,-1).$</p>

		<center>Animação</center>


		<p><b>Exemplo: </b> Vamos determinar a equação da reta $s$ que passa pelo ponto $A=(-1,0,-1)$ em $t=2$ e passa pelo ponto $B=(-5,2,-7)$ em $t=4.$
		Sejam $d=(a,b,c)$ o vetor paralelo à reta e $O=(x_0,y_0,z_0)$ o ponto em que a reta passa quando $t=0.$ Temos então que para todo ponto $P=(x,y,z)$ em $s$ 
		\begin{equation}
		\begin{array}{rl}
		x=&x_0+at \\
		y=&y_0+bt \\
		z=&z_0+ct
		\end{array}, \quad t\in\mathbb R.
		\end{equation}
		Para $t=2$ tem-se
		\begin{equation}
		\begin{array}{rl}
		-1=&x_0+2a \\
		0=&y_0+2b \\
		-1=&z_0+2c
		\end{array},
		\end{equation}
		e para $t=4$ tem-se que
		\begin{equation}
		\begin{array}{rl}
		-5=&x_0+4a \\
		2=&y_0+4b \\
		-7=&z_0+4c
		\end{array}
		\end{equation}
		Das equações \ref{t2} e \ref{t4} obtemos $d=(-2,1,-3)$ e $O=(3,-2,5).$ Portanto,
		\begin{equation}
		\begin{array}{rl}
		x=&3-2t \\
		y=&-2+t \\
		z=&5-3t
		\end{array}, \quad t\in\mathbb R.
		\end{equation}
		</p>

		<p>Para parametrizarmos uma reta no espaço euclidiano, vimos que basta conhecermos pelo menos um de seus pontos e um vetor $v$ que dá sua direção.  No \autoref{ex4} e no \autoref{ex5} vimos que uma mesma reta pode ter parametrizações distintas. No caso do \autoref{ex5} embora os vetores $v$ e $u$  tem a mesma direção as parametrizações são diferentes. O que acontece é que o vetor dá, além da direção, a velocidade de deslocamento entre dois pontos da reta além e a orientação. Tal vetor é chamado de \textit{\bfseries vetor velocidade} e sua norma é a velocidade de deslocamento.</p>
		
		<p><b>Observação: </b> Direção não é o mesmo que orientação.</p>
	</section>


</body>
</html>
