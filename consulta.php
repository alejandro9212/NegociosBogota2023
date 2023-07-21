<?php include('./front/nabvar.php') ?>
<div class="container m-5">
    <div class="row">
        <div class="col-md-1  m-0">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">➕</button>
        </div>
        <div class="col md-1">
            <button type="button" id="btn2" class="btn btn-info">consulta</button>
        </div>

    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">CC</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">password</th>
                <th scope="col">Fecha_naci</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Consultar</th>


            </tr>
        </thead>
        <tbody id="consulta">

        </tbody>
    </table>


    <!-- Codigo de la modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo ingreso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- formulario de registro  -->
                    <form action="./server/Ingresar.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Cedula</label>
                            <input type="text" name="cedula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="id" class="form-text">Ingresa numero de identificacion</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombres</label>
                            <input type="text" name="nombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="nom" class="form-text">Ingresa Nombres completos</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="ape" class="form-text">Ingresa Apellidos completos</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Ingresa correo valido</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="password" class="form-text">Ingresa contraseña</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Confirma contraseña</label>
                            <input type="pass" name="contraseña2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="pass" class="form-text">confirma la contraseña</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="fecha" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp">
                            <div id="date" class="form-text">ingresa fecha de nacimiento</div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
</div>

<?php include('./front/footer.php') ?>









<!-- -----------------------------------------------------------------
        <seccion>
            
        </seccion>-------------------------------------------- -->



</div>






</body>
<script src="./assets/js/app.js"></script>
<script src="./bootstrap-5.0.2/bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>

</html>