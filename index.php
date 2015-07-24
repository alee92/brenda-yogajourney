<?php

set_time_limit(0);
ini_set('default_socket_timeout', 300);
session_start();

/*********** Instagram API Keys ************/

define("clientID", '45ff7235ae5841268cd947158f664c23');
define("clientSecret", '8bb0ed77337145eb8f47d1edbb365faa');
define("redirectURL", 'https://brenda-yogajourney.herokuapp.com');
define("imageDirectory", 'pics/');

?>