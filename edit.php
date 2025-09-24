<?php
    include "header.php"; 
    include "clases/Crud.php"; 
    $crud = new Crud(); 
    $contacto = $crud->show($_GET["id"]); 
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-pink">
                <div class="card-header text-center" style="background: linear-gradient(45deg, #ff66b2, #ff3399); color: white;">
                    <h2>Actualizar Contacto</h2>
                </div>
                <div class="card-body">
                    <form action="servidor/update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $contacto['id']; ?>">

                        <div class="mb-3">
                            <label for="paterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control border-pink" id="paterno" name="paterno" value="<?php echo $contacto['paterno']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="materno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control border-pink" id="materno" name="materno" value="<?php echo $contacto['materno']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control border-pink" id="nombre" name="nombre" value="<?php echo $contacto['nombre']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control border-pink" id="telefono" name="telefono" value="<?php echo $contacto['telefono']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control border-pink" id="correo" name="correo" value="<?php echo $contacto['email']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" class="form-control border-pink" id="descripcion" name="descripcion" value="<?php echo $contacto['descripcion']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Agrega una foto</label>
                            <input type="file" class="form-control border-pink" id="foto" name="foto">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-pink btn-lg">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include "footer.php";
?>
