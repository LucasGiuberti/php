<?php
//O cookie expirará daqui a uma hora
setcookie('short-userid','ralph', time() + 60 * 60);
//O cookie expirará daqui a um dia
setcookie('longer-userid', 'ralph', time() + 60*60*24);
// O cookie expirará ao meio-dia de primeiro de outubro de 2022
$d - new DateTime("2022-10-01 12:00:00");
setcookie('much-longer-userid', 'alph', $d->format('U'));
