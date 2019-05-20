<?php
	if(isset($_REQUEST['path']) && $_REQUEST['path'] != "") {

		$file_url = $_REQUEST['bible.pdf'];
		$pdfname = basename ($file_url);
		header('Content-Type: application/pdf');
		header("Content-Transfer-Encoding: Binary");
		header("Content-disposition: attachment; filename=".$pdfname);
		readfile($file_url);
	}
?>