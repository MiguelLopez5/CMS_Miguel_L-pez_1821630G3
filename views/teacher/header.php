<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SchoolPost</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="?controller=index" class="navbar-brand">SchoolPost</a>
        <ul class="navbar-nav" style="display: flex;">
            <li><a class="nav-link" href="?controller=teacher&method=viewPublication">Mis publicaciones</a></li>
            <li><a class="nav-link" href="?controller=security&method=logout">Salir</a></li>
        </ul>
    </nav>
    <main class="container" style="min-height: 90vh">