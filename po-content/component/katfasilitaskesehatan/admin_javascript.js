/*
 *
 * - PopojiCMS Javascript
 *
 * - File : admin_javascript.js
 * - Version : 1.0
 * - Author : Clark
 * - License : MIT License
 *
 *
 * Ini adalah file utama javascript PopojiCMS yang memuat semua javascript di katfasilitaskesehatan.
 * This is a main javascript file from PopojiCMS which contains all javascript in katfasilitaskesehatan.
 *
*/

$(document).ready(function() {
	$('#table-katfasilitaskesehatan').buildtable('route.php?mod=katfasilitaskesehatan&act=datatable');
});

$(document).ready(function() {
	$('#date').datetimepicker({
		format: 'YYYY-MM-DD',
		showTodayButton: true,
		showClear: true
	});

	$('#time').datetimepicker({
		format: 'HH:mm:ss'
	});

	$('#datetime').datetimepicker({
		format: 'YYYY-MM-DD HH:mm:ss',
		showTodayButton: true,
		showClear: true
	});

	$("#date").mask("9999/99/99");
	$("#time").mask("99:99:99");
	$("#datetime").mask("9999/99/99 99:99:99");
});