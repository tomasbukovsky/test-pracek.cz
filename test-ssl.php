<?php
include '/data/web/virtuals/67093/virtual/www/admin-testy/shared-library.php';


if (check_ssl($_SERVER['HTTP_HOST']) == true) echo "má ssl";

if (check_ssl($_SERVER['HTTP_HOST']) == false) echo "nemá ssl";
