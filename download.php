<?php
header("Content-disposition: attachment; filename=images/bible.pdf");
header("Content-type: application/pdf");
readfile("bible.pdf");
?>