<?php
//Iniciando uma página com setcookie()
<?php
setcookie('userid', 'ralph');
<?
<html>
<head><title>Page with cookies</title></head>
<body>
This page sets a cookie properly, because the PHP block with setcookie()
in it comes before all of the HTML.
</body></html>
