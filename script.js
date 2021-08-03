var click=0;

	// Abrir e fechar menu na versão mobile;
	// Abrir e fechar menu na versão mobile;
	function abrirFechar(){
		var spans=document.getElementsByClassName('navegacao').length;
		var span=document.getElementsByClassName('navegacao')[0].offsetHeight;
		var altura=(spans*span);
		if(click==0){
		document.getElementsByTagName("nav")[0].style.height=altura+"px";
		document.getElementsByTagName("nav")[0].style.transition="height 1s";
		click=1;
		}else{
		document.getElementsByTagName("nav")[0].style.height="0px";
		document.getElementsByTagName("nav")[0].style.transition="height 1s";
		click=0;
		}
	}

	function adicionarEvento(){
		document.getElementsByClassName("barra-superior")[0].addEventListener("click",abrirFechar);
	}
	window.addEventListener("load",adicionarEvento);


	// Ajustar barra de navegação ao redimensionar a tela
	function ajuste(){
		var tela=window.innerWidth;
		if(tela>700){
		document.getElementsByTagName("nav")[0].style.height="20px";
		document.getElementsByTagName("nav")[0].style.transition="height 0s";
		click=0;
		}else{
		document.getElementsByTagName("nav")[0].style.height="0px";
		document.getElementsByTagName("nav")[0].style.transition="height 0s";
		}
	}

	window.addEventListener("resize",ajuste);