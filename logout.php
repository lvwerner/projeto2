<?php
session_start();

// Encerrar a sessão
session_destroy();

// Redirecionar para a página de login
header("Location: login.html");
?>
