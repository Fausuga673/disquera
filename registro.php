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
                <div class="card shadow">
                    <div class="card-header bg-white">
                        <h2>Registrarse</h2>
                    </div>
                    <div class="card-body">
                        <form>

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Ingresa tu apellido" name="apellido">
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control" id="correo" placeholder="correo@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="dni">DNI</label>
                                <input type="text" class="form-control" id="dni" placeholder="Ingresa tu DNI" name="dni">
                            </div>
                            <div class="form-group">
                                <label for="contraseña">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña">
                            </div>
                            <div class="form-group">
                                <label for="contraseña">Confirmar contraseña</label>
                                <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Selecciona tu ciudad</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                            </div>
                            <p>¿Ya tienes cuenta? <a href="iniciar.php"><Strong>Inicia sesión</Strong></a></p>
                            <button type="submit" class="btn btn-outline-danger font-weight-bold" name="registrarse">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>