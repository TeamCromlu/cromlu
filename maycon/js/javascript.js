$(document).ready(main);

var contador = 1;

function main(){
	$(".icon_menu").click(function(){
		//$("nav").toggle();
		if(contador==1){
			$("nav").animate({
				left:"0"
			});
			contador=0;
		}
		else{
			contador=1;
			$("nav").animate({
				left:"-100%"
			})
		}
	});
};