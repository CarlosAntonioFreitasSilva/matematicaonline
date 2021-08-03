var click=0;

function abrirMenu(){
if (click==0) {
	document.getElementsByTagName("nav")[0].style.display="block";
	document.getElementById("menu").innerHTML="Fechar";
	click=1;
}else{
	document.getElementsByTagName("nav")[0].style.display="none";
	document.getElementById("menu").innerHTML="&#9776; Menu";
	click=0;
}
}

function fecharMenu(){
if(innerWidth<700){
document.getElementsByTagName("nav")[0].style.display="none";
document.getElementById("menu").innerHTML="&#9776; Menu";
click=0;
}
}


function menu(){
document.getElementById("menu").addEventListener("click",abrirMenu);
document.getElementsByTagName("section")[0].addEventListener("click",fecharMenu);

}

function navDisplay(){
if(innerWidth>700){
	document.getElementsByTagName("nav")[0].style.display="block";
	document.getElementById("menu").innerHTML="Fechar";
	click=1;
	}else{
	document.getElementsByTagName("nav")[0].style.display="none";
	document.getElementById("menu").innerHTML="&#9776; Menu";
	click=0;
	}
}


window.addEventListener("load",menu);
window.addEventListener("resize",navDisplay);


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
}