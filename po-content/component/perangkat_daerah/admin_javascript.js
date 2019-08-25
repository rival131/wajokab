/*
 *
 * - PopojiCMS Javascript
 *
 * - File : admin_javascript.js
 * - Version : 1.0
 * - Author : Rivaldy
 * - License : MIT License
 *
 *
 * Ini adalah file utama javascript PopojiCMS yang memuat semua javascript di perangkat_daerah.
 * This is a main javascript file from PopojiCMS which contains all javascript in perangkat_daerah.
 *
*/

$(document).ready(function() {
	$('#table-perangkat_daerah').buildtable('route.php?mod=perangkat_daerah&act=datatable');
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