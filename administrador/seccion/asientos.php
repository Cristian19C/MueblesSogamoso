<?php  include('../template/cabecera.php'); ?>
<?php    
  //validar informacion para poderla recepcionar de manera adecuada
  //if ternario
  $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
  $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
  $txtPrecio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
  $txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
  $accion=(isset($_POST['accion']))?$_POST['accion']:"";

  include("../config/bd.php");

  //verificar que la información esta llegando
//   echo $txtID."<br/>";
//   echo $txtNombre."<br/>";
//   echo $txtPrecio."<br/>";
//   echo $txtImagen."<br/>";
//   echo $accion."<br/>";

    //conexion a la base de datos


  switch ($accion) {
    case "Agregar":

        $senticiaSQl = $conexion->prepare("INSERT INTO asientos (nombre, precio,imagen) VALUES (:nombre,:precio,:imagen);");
        $senticiaSQl->bindParam(':nombre',$txtNombre);
        $senticiaSQl->bindParam(':precio',$txtPrecio);
        $senticiaSQl->bindParam(':imagen',$txtImagen);
        $senticiaSQl->execute();

        break;
    case "Modificar":
        echo "Presionado boton modificar";
        break;
    
    case "Cancelar":
        echo "Presionado boton cancelar";
        break;
    
  }

   $senticiaSQl = $conexion->prepare("SELECT * FROM asientos");
   $senticiaSQl->execute();
   $listaAsientos = $senticiaSQl->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container__general-registro">
    <div class="formulario__agregar">
        <div class="formulario__title">Datos de los asientos</div>
        <form method="POST" enctype="multipart/form-data">
            <label for="txtID">ID:</label> 
            <input type="text" name="txtID" id="txtID" placeholder="ID">
            <label for="txtNombre">Nombre:</label> 
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre del asiento">
            <label for="txtPrecio">Precio:</label> 
            <input type="text" name="txtPrecio" id="txtPrecio" placeholder="Precio del asiento">
            <label for="txtID">Imagen:</label> 
            <input type="file" name="txtImagen" id="txtImagen" placeholder="Nombre">

            <div class="container__buttons">
                <button type="submit" name="accion" value="Agregar" class="button button--success">Agregar</button>
                <button type="submit" name="accion" value="Modificar" class="button button--warning">Modificar</button>
                <button type="submit" name="accion" value="Cancelar" class="button button--info">Cancelar</button>
            </div>
        </form>
    </div>
    <div class="mostrar__libros">
        <table class="table">
            <thead>
                <tr>
                    <th class="th__title">Id</th>
                    <th class="th__title">Nombre</th>
                    <th class="th__title">Precio</th>
                    <th class="th__title">Imagen</th>
                    <th class="th__title">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($listaAsientos as $asiento) {?>
                <tr>
                    <td class="td__info"><?php echo $asiento['id'] ?></td>
                    <td class="td__info"><?php echo $asiento['nombre'] ?></td>
                    <td class="td__info"><?php echo $asiento['precio'] ?></td>
                    <td class="td__info"><?php echo $asiento['imagen'] ?></td>
                    <td class="td__info">Seleccionar | borrar</td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>


<?php  include('../template/pie.php') ?>