$(document).ready(function() {

	var height = $(window).height();

	ajustesIniciales();


	function ajustesIniciales() {
		$("section#body").css({ "margin-top": height -550 + "px" });
		$("section#scrolldown").css({ "display": "block" });
		$("section#seccion").css({"display":"none"});

	}


	$(document).scroll(function () {
		var scrollTop = $(this).scrollTop();
		var pixels = scrollTop / 70;

		if (scrollTop < height) {
			$("section#scrolldown").css({ "display": "none" });
			$("section#seccion").css({"display":"block"});
			$("section#contenedor_general").css({
				"-webkit-filter": "blur(" + pixels + "px)",
				"background-position": "center -" + pixels * 1 + "px"
			});
			
		}


	});

});