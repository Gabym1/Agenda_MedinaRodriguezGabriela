<?php 
    include "header.php"; 
    include "clases/Crud.php"; 
    $crud = new Crud(); 
    $contactos = $crud->show_all(); 
?>

<div class="container my-5"> 
    <div class="row">
        <div class="col">
            <h1 class="text-center text-pink mb-4">Lista de Contactos</h1>
            <div class="text-center mb-3">
                <a href="create.php" class="btn btn-pink btn-lg">Crear nuevo contacto</a>
            </div>
            <table class="table table-striped table-hover border border-pink shadow-sm">
                <thead class="table-dark" style="background-color:#ff66b2; color:white;">
                    <tr>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Descripción</th>
                        <th class="text-center">Foto</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contactos as $contacto):  ?>
                        <?php $id = $contacto["id"]; ?>
                        <tr>
                            <td><?php echo $contacto["paterno"]; ?></td>
                            <td><?php echo $contacto["materno"]; ?></td>
                            <td><?php echo $contacto["nombre"]; ?></td>
                            <td><?php echo $contacto["telefono"]; ?></td>
                            <td><?php echo $contacto["email"]; ?></td>
                            <td><?php echo $contacto["descripcion"]; ?></td>
                            <td class="text-center">
                                <img src="<?php echo "public/upload/".$contacto["foto"]; ?>" 
                                alt="" class="img-thumbnail" style="width:100px; height:auto;">
                            </td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $id; ?>">Editar</a>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="servidor/destroy.php?id=<?php echo $id; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    /* Colores rosas personalizados */
    .text-pink {
        color: #ff3399;
    }
    .btn-pink {
        background-color: #ff66b2;
        color: white;
        border: none;
    }
    .btn-pink:hover {
        background-color: #ff3385;
        color: white;
    }
    .border-pink {
        border-color: #ff66b2 !important;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #ffe6f0;
    }
    table.table-striped tbody tr:nth-of-type(even) {
        background-color: #ffd9ec;
    }
</style>

<?php 
    include "footer.php";
?>
