(function (window, document, $) {
	'use strict';
	// onShow event
	$('.logout-modal').on('click', function() {
		var option = {backdrop: 'static',keyboard: true,}
		$('#modal-logout').modal(option);$('#modal-logout').modal('show');
		});
		
	$('#modal-logout').on('shown.bs.modal', function() {});

	// init i18n and load language file
	i18next
		.use(window.i18nextXHRBackend)
		.init({
		debug: false,
		fallbackLng: "en",
		backend: {
			loadPath: "/assets/modern/app-assets/data/locales/{{lng}}.json",
		},
		returnObjects: true
		},
		function (err, t) {
			// resources have been loaded
			jqueryI18next.init(i18next, $);
		});

	// change language according to data-language of dropdown item
	$(".dropdown-language .dropdown-item").on("click", function () {
		var $this = $(this);
		$this.siblings(".selected").removeClass("selected")
		$this.addClass("selected");
		var selectedLang = $this.text()
		var selectedFlag = $this.find(".flag-icon").attr("class");
		$("#dropdown-flag .selected-language").text(selectedLang);
		$("#dropdown-flag .flag-icon").removeClass().addClass(selectedFlag);
		var currentLanguage = $this.data("language");
		i18next.changeLanguage(currentLanguage, function (err, t) {
		$(".main-menu , .navbar-horizontal").localize();
		});
	})

	// Required for Bootstrap tooltips in DataTables
	$( document ).ajaxComplete(function() {
		$('[data-toggle="tooltip"]').tooltip({"html": true,"delay": {"show": 0, "hide": 0},});
		$('[data-toggle="popover"]').popover();
	});

	})(window, document, jQuery);