<?php

run_hook('customer_logout'); #HOOK
if (session_status() == PHP_SESSION_NONE) session_start();
session_destroy();
header('location: index.php?_route=admin/');


/*
run_hook('customer_logout'); #HOOK
if (session_status() == PHP_SESSION_NONE) session_start();
session_destroy();
header('location: login.php'); // Redirige a login.php después de cerrar sesión
exit(); // Asegura que no se ejecuten más líneas de código después de la redirección

http://localhost/WISP/index.php?_route=admin/
*/