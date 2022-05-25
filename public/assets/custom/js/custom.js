(function (window, document, $) {
	"use strict";
	// onShow event
	$(".logout-modal").on("click", function () {
		var option = { backdrop: "static", keyboard: true };
		$("#modal-logout").modal(option);
		$("#modal-logout").modal("show");
	});

	$("#modal-logout").on("shown.bs.modal", function () { });

	// init i18n and load language file
	i18next.use(window.i18nextXHRBackend).init(
		{
			debug: false,
			fallbackLng: "en",
			backend: {
				loadPath: "/assets/modern/app-assets/data/locales/{{lng}}.json",
			},
			returnObjects: true,
		},
		function (err, t) {
			// resources have been loaded
			jqueryI18next.init(i18next, $);
		}
	);

	// change language according to data-language of dropdown item
	$(".dropdown-language .dropdown-item").on("click", function () {
		var $this = $(this);
		$this.siblings(".selected").removeClass("selected");
		$this.addClass("selected");
		var selectedLang = $this.text();
		var selectedFlag = $this.find(".flag-icon").attr("class");
		$("#dropdown-flag .selected-language").text(selectedLang);
		$("#dropdown-flag .flag-icon").removeClass().addClass(selectedFlag);
		var currentLanguage = $this.data("language");
		i18next.changeLanguage(currentLanguage, function (err, t) {
			$(".main-menu , .navbar-horizontal").localize();
		});
	});

	// Required for Bootstrap tooltips in DataTables
	$(document).ajaxComplete(function () {
		$('[data-toggle="tooltip"]').tooltip({
			html: true,
			delay: { show: 0, hide: 0 },
		});
		$(document).on('click', '[data-toggle="tooltip"]', function () { $(this).tooltip('hide'); });
		$('[data-toggle="popover"]').popover();

		// popovers initialization - on hover
		$('[data-toggle="popover-image"]').popover({
			html: true,
			trigger: "hover",
			placement: "top",
			content: function() {
				return '<img src="' + $(this).data("img") + '" width=100% height=100% />';
			},
		});
	});
})(window, document, jQuery);

// --Scroll To Top
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
// !--Scroll To Top

// Capitalise
function capitalize(str){
	return str.toLowerCase().replace(/(^([a-zA-Z\p{M}]))|([ -][a-zA-Z\p{M}])/g, a => a.toUpperCase());
}