<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: espaço vetorial</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>
			<h2>Espaço Vetorial</h2>
			<p><b>Definicão</b>: Seja $V$ um conjunto não vazio. Dizemos que $V$ é um espaço vetorial sobre $\mathbb R$ se estiverem definidas em $V$ duas operações binárias soma $+:V\times V\to V$ e multiplicação por um escalar 
			$\cdot :\mathbb R\times V\to V$ tais que para quaisquer 
			$u,v,w \in V$ e $\lambda, \gamma \in \mathbb R$ tem-se:</p>
					<ol type="1">
						<li>$u+v=v+u;$
						<li>$(u+v)+w=u+(v+w);$
						<li>Existe $0_V \in V$ tal que $u+0_V=0_V+u=u$; 
						<li>Para qualquer $u\in V$ existe um elemento $u^* \in V$ tal que $u+u^*=0_V=u^*+u;$
						<li> $\lambda\cdot (u+v)=\lambda\cdot u+\lambda\cdot v$;
						<li> $(\lambda+\gamma)\cdot u=\lambda\cdot u+\gamma\cdot u$;
						<li> $(\lambda\gamma)\cdot u=\lambda(\gamma\cdot u)$;
						<li> $1\cdot u=u.$
					</ol>
				
			<p><b>Exemplo</b>: O conjunto $M_{2\times2}(\mathbb R)$ da matrizes quadradas de ordem 2 com as operações usuais de soma e multiplicação por um número real é um espaço vetorial, pois essas operações possuem as propriedades das operações para espaço vetorial. Verifique!<p>
			
			<p><b>Exemplo</b>: Considere $P_2(\mathbb R)$ o conjunto de todos os polinômios de grau menor que ou igual a 2. Para quaisquer $p(x)=a_0+a_1x+a_2x^2$ e $q(x)=b_0+b_1x+b_2x^2$em $P_2(\mathbb R)$ e para todo $\lambda \in \mathbb R,$ definimos as operações</p>
				<ul>
					<li>Soma: $p(x)+q(x)=a_0+b_0+(a_1+b_1)x+(a_2+b_2)x^2$
					<li>Multiplicação: $\lambda\cdot p(x)=\lambda a_0+\lambda a_1x+\lambda a_2x^2.$
				</ul>

			<p>O conjunto $P_2(\mathbb R)$ munido dessas operações é um espaço vetorial real.</p>


	</section>


</body>
</html>
