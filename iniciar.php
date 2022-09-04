<?php include 'head.php'; ?>
<body>
    <div class="container-fluid bg-light" style="height:100vh;">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="card shadow" >
                    <div class="card-header bg-white">
                        <h2>Iniciar sesión</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control" id="correo" placeholder="correo@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="contraseña">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña">
                            </div>
                            <p>¿No tienes cuenta? <a href="registro.php"><Strong>Regístrate</Strong></a></p>
                            <button type="submit" class="btn btn-outline-danger font-weight-bold" name="registrarse">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>