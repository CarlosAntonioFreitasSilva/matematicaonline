window.onload=function(){

	var numBotoes=document.getElementsByClassName('botao-descricao').length;
	for(var i=0; i<numBotoes; i++){
		document.getElementsByClassName('descricao')[i].style.display="none";
		document.getElementsByClassName('botao-descricao')[i].onclick=function(){
			var elemento=this.nextElementSibling.style.display;
			if(elemento=="none"){
					this.nextElementSibling.style.display="block";
								
			}else{
					this.nextElementSibling.style.display="none";
			}
		}
	}
	
	
	if(innerWidth<700){
		document.getElementsByTagName("nav")[0].style.display="none";
	}

	
	document.getElementById("menu").onclick=function(){
		var menu=document.getElementsByTagName("nav")[0].style.display;
		if(menu=="none"){
			document.getElementsByTagName("nav")[0].style.display="block";
			}else{
			document.getElementsByTagName("nav")[0].style.display="none";
		}
	}


	function fecharMenu(){
		if(innerWidth<700){
		document.getElementsByTagName("nav")[0].style.display="none";
		document.getElementById("menu").innerHTML="&#9776; Menu";
		click=0;
		}
	}

	document.getElementsByTagName("section")[0].onclick=function(){fecharMenu()};
	window.onresize=function(){
			if(innerWidth>700){
			document.getElementsByTagName("nav")[0].style.display="block";
			}else{
			fecharMenu();
		}
	}
}