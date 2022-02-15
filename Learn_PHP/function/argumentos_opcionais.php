<?php
function page_header5($color, $title, $header = 'Welcome'){
    print '<head><title>Welcome to '.$title.'</title></head>';
    print '<body bgcolor = "#'.$color.'">';
    print "<h1>$header </h1>";
}
page_header5('66cc99', 'my wonderful page');