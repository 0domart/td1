<?php
// Correspond à l’adresse IP de celui qui visualise la page.
echo getenv('REMOTE_ADDR');
// Correspond à l’adresse IP du serveur.
echo getenv('HTTP_HOST');

// Correspond au logiciel serveur Web utilisé.
echo getenv('SERVER_SOFTWARE');
?>