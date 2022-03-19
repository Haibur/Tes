<?php
if (isset($_GET['pag'])) {
	$page = $_GET['pag'];

	switch ($page) {
		case 'content':
			include "./template/content.php";
			break;
		case 'SetBrg':
			include "./pages/SetBarang.php";
			break;
		case 'DataBrg':
			include "./pages/DataBarang.php";
			break;
		case 'BrgMsk':
			include "./pages/BarangMsk.php";
			break;
		case 'Msklog':
			include "./pages/BarangMsklog.php";
			break;
		case 'BrgKlr':
			include "./pages/BarangKlr.php";
			break;
		case 'Klrlog':
			include "./pages/BarangKlrlog.php";
			break;
		case 'detailkeluar':
			include "./pages/detailkeluar.php";
			break;
		case 'laporanbb':
			include "./pages/laporanbb.php";
			break;

		default:
			include "content.php";
			break;
	}
} else {
	include "content.php";
}
