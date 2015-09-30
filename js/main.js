$(document).ready(function(){

	$('#myModalbis').modal();

	if($('.zoom').length){
		$('.zoom').zoom();
	}


	$('.glyphicon-circle-arrow-up').click(function(){
		$('html, body').animate({
		scrollTop:0
		},500);
		return false;
	});

	$(window).scroll(function(){
		var hauteurScroll = $(window).scrollTop();

		if(hauteurScroll >= 200){
			$('.toTop').fadeIn();
		}
	});

});

	function changePic(url){
		$(".zoom .text-center img").attr("src",url);
		$('.zoom').zoom();
	}
