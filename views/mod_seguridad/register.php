    <article class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 my-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-start">
                            <h3>Crear cuenta</h3>
                        </div>
                        <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-end">
                            <h1>Lauss</h1>
                        </div>
                        <div class="col-lg-12 d-block d-lg-none">
                            <h3 class="text-center">Crear cuenta</h3>
                        </div>
                        <div class="col-lg-12 d-block d-lg-none">
                            <h1 class="text-center">Lauss</h1>
                        </div>
                    </div>
                    <div class="row my-2" id="Usuario">
                        <div class="col-md-12">
                            <input type="text" name="Usuario" id="usuario" placeholder="@Nombre del usuario" class="form-control  b">
                            <span>Puedes usar letras, números y signos de puntuación</span>
                        </div>
                    </div>
                    <div class="row my-2" id="Datos">
                        <div class="col-md-6">
                            <input type="text" name="Nombre" id="nombre" placeholder="Nombre" style="width:100%">
                        </div>
                        <div class="col-md-6">
                            <apellido v-model="apellido"></apellido>
                            <input type="text" name="Apellidos" id="apellidos" placeholder="Apellidos" style="width:100%">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-6">
                            <input type="email" name="Email" id="email" placeholder="Correo Electrónico" style="width:100%">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="Celular" id="celular" placeholder="Celular" style="width:100%">
                        </div>
                    </div>
                    <div class="row my-2" id="Claves">
                        <div class="col-md-6">
                            <input type="password" name="Contraseña" id="clave" placeholder="Contraseña" style="width:100%">
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="VContraseña" id="vclave" placeholder="Confirmar contraseña" style="width:100%">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-8">
                            &nbsp;
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-block btn-success">Registrate</button>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-12">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <a href="#">Ayuda</a>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <a href="#">Privacidad</a>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <a href="#">Condiciones</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>