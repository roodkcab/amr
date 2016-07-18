<?php
$c = file_get_contents('test');
$c1 = base64_decode($c);
file_put_contents('test.amr', $c1);
