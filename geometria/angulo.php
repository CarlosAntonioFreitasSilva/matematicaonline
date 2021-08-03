<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
<title>Ângulo entre vetores</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>

		<h2>Ângulo entre Vetores</h2>
		<p>Considere os vetores $u, v$ no plano e considere $\theta$ o ângulo entre esses vetores. A intersecão da reta perpendicular ao vetor $v$ que contem a extremidade de $u$ com a reta paralela ao vetor $v$ define o vetor $\lambda v.$ Suponhamos  que $0&lt;\theta&lt;\frac{\pi}{2}$ e então temos que $\lambda&gt;0.$ </p>

		<figure>
			<img src="imagens/angulo1.PNG"  alt="Angulo entre vetores">
			<figcaption>
				Figura 1: $0&lt;\theta&lt;\frac{\pi}{2}$
			</figcaption>
		</figure>


		<p>Observe que $$\cos\theta=\frac{|\lambda|\| v\|}{\|u\|}=\lambda\frac{\|v\|}{\|u\|}\qquad\qquad\ (1)$$ 
		Seja $w=u-\lambda v$ e assim obtemos  $$\sin\theta=\frac{\|u-\lambda v\|}{\|u\|}.$$</p> 

		<p>Utilizando a relação fundamental tem-se $$\lambda^2\|v\|^2+\|u-\lambda v\|^2=\|u\|^2. \qquad \qquad (2)$$  </p>

		<p>Por outro lado, $$\|u-\lambda v\|^2=\|u\|^2-2\lambda(u\cdot v)+\lambda^2\|v\|^2$$  e substituindo em $(2)$ obtemos
	 	$$\label{lambda}\lambda=\frac{u\cdot v}{\|v\|^2}. \qquad \qquad (3)$$ Segue que $$\cos\theta=\frac{u\cdot v}{\|u\|\|v\|}. \qquad\qquad (4)$$</p>

		<p>No caso em que $\frac{\pi}{2}&lt;\theta&lt;\pi$ temos que $\lambda &lt;0$ e consideramos $\alpha$ o ângulo entre os vetores $u$ e $\lambda v.$ Desta forma, temos que
		$$\cos\theta=-\cos\alpha=-\frac{|\lambda|\|v\|}{\|u\|}=\lambda \frac{\|v\|}{\|u\|}$$
		como na iguladade $(1).$ </p>.

		<figure>
			<img src="imagens/angulo2.PNG"  alt="Angulo entre vetores">
			<figcaption>
				Figura 2: $\frac{\pi}{2}&lt;\theta&lt;\pi$
			</figcaption>
		</figure>
		<p>Através da expressão <span class="tooltip">$(4)$<span class="tooltiptext">$\cos\theta=\frac{u\cdot v}{\|u\|\|v\|}$</span></span> concluímos que dois vetores $u$ e $v$ são <b><i>ortogonais</i></b> se, e somente se, $u\cdot v=0.$</p>
		<br>

		<h2>Projeção de vetores</h2>
		<p> O vetor $\lambda v$,  como mostra na Figura 1,  é chamado projeção de $u$ sobre $v$ denotado por $P^u_v.$ Segue da expressão <span class="tooltip">$(3)$<span class="tooltiptext">$\lambda=\frac{u\cdot v}{\|v\|^2}$</span></span> que $$P^u_v=\frac{u\cdot v}{\|v\|^2}v.$$</p>


		<h2>Lei dos cossenos</h2>
		<p><b>Exemplo</b>: Sejam $u$ e $v$ vetores no plano
		 $$\|u-v\|^2=\|u\|^2-2(u\cdot v)+\|v\|^2$$
		 Se $\theta$ é o angulo formado pelos vetores $u$ e $v$ segue que
		 $$\|u-v\|^2=\|u\|^2+\|v\|^2-2\|u\|\|v\|\cos\theta$$
		 A expressão acima é chamada <i><b>lei dos cossenos</b></i>.</p>
		<figure>
			<img src="imagens/lei_dos_cossenos.PNG" alt="Lei dos cossenos">
			<figcaption>
				Figura 3: Lei dos cossenos
			</figcaption>
		</figure>
		<h2>Intensidade da força resultante</h2>
		<p> Sejam $\overrightarrow{F_1},$ $\overrightarrow{F_2}$  duas forças exercidas num objeto que formam um ângulo $\theta$ e considere $\overrightarrow{R}=\overrightarrow{F_1}+\overrightarrow{F_2}$  a força resultante. Essas forças são vetores num plano, então para obtermos o módulo da força resultante fazemos
		$$\|\overrightarrow{R}\|^2=(\overrightarrow{F_1}+\overrightarrow{F_2} \cdot \overrightarrow{F_1}+\overrightarrow{F_2}).$$
		 Assim, obtemos
		\begin{equation}\label{resultante}\|\overrightarrow{R}\|^2=\|\overrightarrow {F_1}\|^2+\|\overrightarrow{F_2}\|^2+2\|\overrightarrow{F_1}\|\|\overrightarrow{F_2}\|\cos\theta.\end{equation}</p>

		<figure>
			<img src="imagens/forca_resultante.PNG"  alt="Força resultante">
			<figcaption>
				Figura 4: Força resultante
			</figcaption>
		</figure>

		<br><br>
		<p><b>Observação:</b> É comum denotar o módulo de uma força $\overrightarrow{F}$ por $F$. Não confunda o número $F$ com o vetor $\overrightarrow{F}$. 

		<h2>Área do paralelogramo</h2>
		<p>Considere o paralelogramo definido pelos vetores $u$ e $v.$</p>

		<figure>
			<img src="imagens/area_do_paralelogramo.PNG"  alt="Força resultante">
		</figure>

		<p>A área do paralelogramo é dada por
		$$A=\|v\|\cdot h.$$
		Observe que $h=\|u-P^u_v\|$ e então
		\begin{equation}\label{area}A^2=\|v\|^2\cdot\|u-P^u_v\|^2\end{equation}
		Por outro lado, segue do Teorema de Pitágoras que
		$$\|u-P^u_v\|^2=\|u\|^2-\|P^u_v\|^2,$$
		portanto
		$$A^2=\|v\|^2\|u\|^2-\|v\|^2\|P^u_v\|^2.$$
		Como $$P^u_v=\frac{u\cdot v}{\|v\|^2}v$$ então
		$$\|P^u_v\|^2=\frac{(u\cdot v)^2}{\|v\|^2}.$$
		Assim, obtemos a expressão da área do paralelogramo dada por
		$$A^2=\|v\|^2\|u\|^2-(u\cdot v)^2.$$</p>

		<h2>Trabalho</h2>
		<p> Se $\overrightarrow{F}$ é uma força exercida sobre um objeto realizando um deslocamento $\overrightarrow{d}$ o trabalho realizado é dado pelo produto escalar entre a força e o deslocamento, isto é,
		 $$W=\overrightarrow F \cdot \overrightarrow d.$$
		Utilizando a expressão<span class="tooltip">$(4)$<span class="tooltiptext">$\cos\theta=\frac{u\cdot v}{\|u\|\|v\|}$</span></span>, podemos calcular o trabalho realizado pela força  $\overrightarrow{F}$ por
		$$W=F\cdot d\cos\theta,$$
		onde $\theta$ é ângulo entre a força exercida e o deslocamento.</p>

		<h2>Equação do plano</h2>
		<p> Dado um vetor não nulo $v=(a,b,c)\in \mathbb R^3$ e um ponto $A=(x_0,y_0,z_0).$ Existe um único plano $\alpha$ que contém o ponto $A$  e é perpendicular ao vetor $v.$ Este plano é o conjunto de todos os pontos $P=(x,y,z) \in \mathbb R^3$ tal que $$\overrightarrow{AP}\cdot v=0.$$
		Como $\overrightarrow{AP}=(x-x_0,y-y_0,z-z_0)$, obtemos $$ax+by+cz=ax_0+bx_0+cz_0.$$
		Fazendo $d=ax_0+bx_0+cz_0$, obtemos a equação do plano perpendicular ao vetor $v=(a,b,c)$ dada por $$ax+by+cz=d$$</p>

		<p><b>Exemplo</b>:  Para determinar a equação de um plano $\alpha$ que contém o ponto $A=(3,0,1)$ perpendicular ao vetor $v=(2,1,2)$ consideramos $$\overrightarrow{AP}\cdot v=0$$
		para todo ponto $P=(x,y,z) \in \alpha.$ Como $\overrightarrow{AP}=(x-3,y,z-1)$ segue que$$2(x-3)+y+2(z-1)=0,$$ portanto a equação do plano $\alpha$ é dada por $$2x+y+2z=8.$$</p>		

	</section>


</body>
</html>
