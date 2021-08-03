<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("config.php") ?>
	<title>Geometria analítica: produto cartesiano</title>

</head>
<body>

<?php include("header.php") ?>
	
	<section>
			<h2>Produto Cartesiano</h2>
			<p>Sejam $A$ e $B$ conjuntos quaisquer. O produto cartesiano dos conjuntos $A$ e $B$, denotado por $A\times B$, é o conjunto  dos pares ordenados $(a,b)$ cujo o primeiro elemento $a\in A$ e o segundo elemento $b\in B$. 
			$$A\times B=\{(a,b);\ a\in A, b\in B\}.$$</p>


			<p>É importante observar que $A\times B\neq B\times A,$ pois os elementos desses conjuntos são 
			pares ordenados, portanto o elemento $(a,b)$ 
			não é o mesmo que $(b,a)$.</p>

			<p><b>Exemplo</b>: Seja $A=\{a,b,c\}$ e $B=\{\mu,\gamma,\nu\}$. Os elementos do conjunto $A\times B$ podem ser determinados com o auxilio da tabela:
			</p>
						
			<img src="imagens/tabela.PNG" style="width: 210px;" alt="Tabela">
			
			<p><b>Exemplo:</b> Considere os conjuntos $A=\{a,b\}$ e $B=\{u,v,w,x,y\}$. O produto cartesiano $A\times B$ possui os elementos
			$$(a,u), \ (a,v), \ (a,w), \ (a,x), \ (a,y)$$ 
			$$(b,u), \ (b,v), \ (b,w), \ (b,x), \ (b,y).$$
			</p>
			
			<p><b>Exemplo:</b> O conjunto $\mathbb N\times \mathbb N$ é o conjunto dos pares ordenados $(a,b)$ tais que $a,b \in\mathbb N.$ O elemento $(1,-2) \notin \mathbb N \times \mathbb N,$ pois o segundo elemento do par ordenado não é um número natural.  
			</p>
			
			<p><b>Exemplo:</b> O conjunto $\mathbb R^2$ é o conjunto dos pares ordenados $(x,y)$ tais que $x,y \in\mathbb R.$
			$$\mathbb R^2=\{(x,y); \ x,y \in\mathbb R\}.$$</p>

			<p>Dados conjuntos $A_1, A_2, ...,A_n$ definimos o conjunto $A_1\times A_2\times \cdots\times A_n$ por
			$$A_1\times A_2\times \cdots\times A_n=\{(a_1,a_2,\cdots a_n); \ a_i\in A_i, \ i=1,...,n \}$$ </p>
			
			<p><b>Exemplo:</b> Considere os conjuntos $C=\{a,b\}$ $D=\{y,z\}$ e $F=\{1,2,3\}$. O conjunto $C\times D\times F$ é o conjunto das triplas ordenadas cujos elementos são 
			$$(a,y,1)\ (a,y,2)\ (a,y,3)$$
			$$(a,z,1)\ (a,z,2)\ (a,z,3)$$ 
			$$(b,y,1)\ (b,y,2)\ (b,y,3)$$
			$$(b,z,1)\ (b,z,2)\ (b,z,3)$$
			</p>
			<p>Observe que $(y,b,2)$ não é um elemento de $C\times D\times F$, pois $y\notin C$ e  $b\notin D.$ </p>
	</section>


</body>
</html>