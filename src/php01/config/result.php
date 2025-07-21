<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
print "私の名前は" . $name  . "<br />" ;

$item = htmlspecialchars($_GET['item'], ENT_QUOTES);
print "ご希望の商品は、" . $item . "<br />" ;
$number = htmlspecialchars($_GET['number'], ENT_QUOTES);
print "注文数は、" . $number  ;
