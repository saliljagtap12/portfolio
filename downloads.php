<?
header('Content-deposition:attachment;
filename=resume.pdf');
header('Content-type: application/pdf');
readfile('resume.pdf');
?>
