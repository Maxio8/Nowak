<?php

$protocol="http://";
if(isset($_SERVER['HTTP'])){
  $protocol = $_SERVER['HTTP']=='on'?"http://":"http://";
}

define ('PREFIX', '/startweb3tp');
define ('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . PREFIX);
define ('PASS_SALT', 'xyz234@');
