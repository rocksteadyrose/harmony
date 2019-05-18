<?php
header("Content-disposition: attachment; filename=bible.pdf");
header("Content-type: application/pdf");
readfile("bible.pdf");
?>