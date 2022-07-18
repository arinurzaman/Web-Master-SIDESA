/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/

var handleBootstrapWysihtml5 = function () {
	"use strict";
	$('#wysihtml5').wysihtml5();
};

var FormWysihtml = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleBootstrapWysihtml5();
		}
	};
}();

$(document).ready(function() {
	FormWysihtml.init();
});