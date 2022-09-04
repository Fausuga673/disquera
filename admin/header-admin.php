<?php include '../head.php'; ?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="../index.php">Disquera</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a></li>
                <li class="nav-item active"><a class="nav-link" href="../productos.php">Productos</a></li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Géneros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link font-weight-bold" href="usuario-dashboard.php">Usuarios <span class="sr-only">(current)</span></a></li>
                <li class="nav-item active"><a class="nav-link font-weight-bold" href="producto-dashboard.php">Productos</a></li>
                <li class="nav-item active"><a class="nav-link font-weight-bold" href="categoria-dashboard.php">Categoría</a></li>
                <li class="nav-item active"><a class="nav-link font-weight-bold" href="ciudad-dashboard.php">Ciudad</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="../iniciar.php">Iniciar <span class="sr-only">(current)</span></a></li><li class="nav-item active"><a class="nav-link" href="../registro.php">Registrarse</a></li>
            </ul>
        </div>
    </nav>