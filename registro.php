	
<?php

		 require ('validarnum.php');

$fecha2=date("Y-m-d");  	

if (isset($_GET['nuevo'])) { 

                        if (isset($_POST['lugarguardar'])) {
                           





$nombre=strtoupper($_POST["nombre"]);
$apellido=strtoupper($_POST["apellido"]);
$ci=strtoupper($_POST["ci"]);
$direccion=strtoupper($_POST["direccion"]);
$telefono=strtoupper($_POST["telefono"]);
$estado=strtoupper($_POST["estado"]);
$fechas=strtoupper($_POST["fechas"]);
$motivo=strtoupper($_POST["motivo"]);
$evaluacionp=strtoupper($_POST["evaluacionp"]);
$evaluacionpsico=strtoupper($_POST["evaluacionpsico"]);
$fechaini=strtoupper($_POST["fechaini"]);
$inducc=strtoupper($_POST["inducc"]);
$cargooo=strtoupper($_POST["cargooo"]);
$fechai=$fecha2;
                       




$sql="select * from `usuarios` where cedula='$ci'";

$cs=$bd->consulta($sql);

if($bd->numeroFilas($cs)!=0){

    
    
/*
$cs=mysql_query($sql,$cn);
while($resul=mysql_fetch_array($cs)){
	$var6=$resul[0];
}
//CONSULTAR SI EL CAMPO YA EXISTE
*/

	  echo '<div class="alert alert-danger alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b>Alerta no se registro este usuario </b> Ya Existe... ';



                               echo '   </div>';
}else{

$sql = "INSERT INTO `usuarios` (`cedula`, `nombre`, `apellido`, `fechai`, `telefono`, `direccion`,`estado`,`fechas`,`motivo`,`evaluacionp`,`evaluacionpsico`,`fechaini`,`inducc`,`cargooo`) VALUES ('$ci', '$nombre', '$apellido', '$fechai', '$telefono', '$direccion','$estado','$fechas','$motivo','$evaluacionp','$evaluacionpsico','$fechaini','$inducc','$cargooo')";

                            
                          $cs=$bd->consulta($sql);  
                         // $cs=mysql_query($sql,$cn);

                           


            

                            //echo "Datos Guardados Correctamente";
                            echo '<div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b>Bien!</b> Datos Guardados Correctamente... ';



echo "
Nombre: $nombre

";
                               echo '   </div>';
                           
							
                        }



}
?>
  <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Base de seleccionados</h3>
                                </div>
                               
                            
                                <!-- form start -->
                                <form role="form"  name="fe" action="?mod=registro&nuevo=nuevo" method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                           
                                            
                                        <label for="start">Fecha de Activación:</label>
                                        <input type="date" id="start"  name='fechas'
       value="2020-09-01"
       min="2018-01-01" max="2020-12-31">
       <label for="start">Inicio de Contrato:</label>
                                        <input type="date" id="start"  name='fechaini'
       value="2020-09-21"
       min="2018-01-21" max="2020-12-31">
                                            <br>
                                            <label for="exampleInputFile">Nombre</label>
                                            <input   onblur="this.value=this.value.toUpperCase();" type="text" required type="tex" name="nombre" class="form-control"  id="exampleInputEmail1" placeholder="Intoducir el Nombre">
                                            <label for="exampleInputFile">Apellido</label>
                                            <input  onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();" required type="tex" name="apellido" class="form-control"  id="exampleInputEmail1" placeholder="Apellido">
                                            <label for="exampleInputFile">Rut</label>
                                            <input  required type="text" name="ci" maxlength="12" class="form-control"  id="exampleInputEmail1" placeholder="Rut" onkeyup="formatCliente(this)">
                                            <script type="text/javascript">
function formatCliente(cliente)
{cliente.value=cliente.value.replace(/[.-]/g, '')
.replace( /^(\d{1,2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4')}
</script>
                                             <label for="exampleInputFile">Telefono</label>
                                            <input onkeydown="return enteros(this, event)" required type="text" name="telefono" class="form-control" maxlength="9"  id="exampleInputEmail1" placeholder="telefono">
                                            
                                            <label for="exampleInputFile">Residencia</label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='direccion'>
                                        
<option  value="acalis superior">Acalis Superior</option>
<option value="Errazuriz">Errazuriz</option>
<option value="Los Dominicos">Los Dominicos</option>
<option value="Montahue">Montahue</option>
<option value="Valle Alegre">Valle Alegre</option>
<option value="Medina">Medina</option>
<option value="Coventry">Conventry</option>
<option value="Candil">Candil</option>
<option value="Colombia">Colombia</option>
<option value="Montemar">Montemar</option>
<option value="Colombia Chia">Colombia Chía</option>
<option value="Colombia Bogota">Colombia Bogotá</option>
<option value="Casa Motriz">Casa Motriz</option>
<option value="Confidencial">Confidencial</option>
<option value="Las Tranqueras">Las Tranqueras</option>

</select>
    
                                        
                                            
                                            <label for="exampleInputFile">Cargo</label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='cargooo'>
                                        
<option  value="Auxiliar Gerontologico">Auxiliar Gerontologico</option>
<option value="Analista Contable">Analista Contable</option>
<option value="Analista de Compras">Analista de Compras</option>
<option value="Asistente Administrativa">Asistente Administrativa</option>
<option value="Asistente de Cobranza">Asistente de Cobranza</option>
<option value="A.Comedor y Cocina">Asistente de Comedor y Cocina</option>
<option value="Tecnico en mantencion">Tecnico en mantencion</option>
<option value="Analista de Renumeraciones">Analista de Renumeraciones</option>
<option value="Auxiliar de Aseo">Auxiliar de Aseo</option>
<option value="Auxiliar de Farmacia">Auxiliar de Farmacia</option>
<option value="Ayudante de Cocina">Ayudante de Cocina</option>
<option value="Chef">Chef</option>
<option value="Conserje">Conserje</option>
<option value="Controller">Controller</option>
<option value="Cuidadora Particular">Cuidadora Particular</option>
<option value="E.Planificacion y Gestion">Encargado de Planificacion y Control de Gestion</option>
<option value="Encargado de Compras">Encargado de Compras</option>
<option value="E.Prevencion de riesgos">Encargado de Prevencion de riesgos</option>
<option value="Enfermero">Enfermero</option>
<option value="E.experiencia al cliente">Encargado de experiencia al cliente</option>
<option value="Gerente de Residencia">Gerente de Residencia</option>
<option value="Gerontologo">Gerontologo</option>
<option value="J.Administracion y Finanzas">Jefe de Administracion y Finanzas</option>
<option value="Jefe de formacion y D.O">Jefe de formacion y D.O</option>
<option value="Jefe de gestion">Jefe de gestion</option>
<option value="Maestro de Cocina">Maestro de Cocina</option>
<option value="Plaquecero">Plaquecero</option>
<option value="P.Prevencion de Riesgos">Practica de Prevencion de Riesgos</option>
<option value="Recepcionista">Recepcionista</option>
<option value="Secretaria Ejecutiva">Secretaria Ejecutiva</option>
<option value="Repostero">Repostero</option>
<option value="Tens">Tens</option>
<option value="Asesor Comercial">Asesor Comercial</option>
<option value="Practica RRHH">Practica RRHH</option>
<option value="Practica Psicologia">Practica Psicologia</option>
<option value="Practica Administracion">Practica Administracion</option>
<option value="Terapeuta Ocupacional">Terapeuta Ocupacional</option>
<option value="A.Facturacion y cobranza">Analista de Facturacion y cobranzas</option>
<option value="Relacionadora Publica">Relacionadora Publica</option>
<option value="Psicologa">Psicóloga</option>
<option value="Vendedora de Cafeteria">Vendedora de Cafeteria</option>
<option value="J.Comunicaciones">Jefe de Comunicaciones</option>

</select>

                                            <label for="exampleInputFile">Motivo de Ingreso</label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='motivo'>
                                        
<option  value="Reemplazo licencia">Reemplazo licencia comun</option>
<option value="Reemplazo Vacaciones">Reemplazo Vacaciones</option>
<option value="Renuncia">Renuncia</option>
<option value="Desvinculacion">Desvinculacion</option>
<option value="No renovacion">No renovacion</option>

</select>

<label for="exampleInputFile">Evaluación Psicológica</label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='evaluacionpsico'>
                                        
<option  value="OK">OK</option>
<option value="Pendiente">Pendiente</option>
<option value="No aplica">No aplica</option>


</select>

<label for="exampleInputFile">Encargado Evaluación</label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='evaluacionp' value="<?php echo $var4 ?>">
                                             
<option  value="Paulina">Paulina</option>
<option value="Andrea">Andrea</option>
<option value="Vivian">Vivian</option>
<option value="Sebastian">Sebastian</option>



</select>
                                            
                                            <label for="exampleInputFile">Estado</label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='estado'>
<option  value="activo">Activo</option>
<option value="no renovado">No Renovado</option>
<option value="desvinculado">Desvinculado</option>

</select>

<label for="exampleInputFile">Inducción</label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='inducc'>
<option  value="OK">OK</option>
<option value="pendiente">PENDIENTE</option>
<option value="no aplica">NO APLICA</option>

</select>
 
                                            
  
                                        </div>
                                        
                                     
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                    <center>
                                        <button type="submit" class="btn btn-primary btn-lg" name="lugarguardar" id="lugarguardar" value="Guardar">Agregar</button>
                                        </center>
                                    
                                    </div>
                                </form>
                            </div><!-- /.box -->
<?php
}

	
   
   if (isset($_GET['lista'])) { 

    $x1=$_GET['codigo'];

                        if (isset($_POST['lista'])) {
                           



        

}
?>
  
                            
                    <div class="row">
                        <div class="col-xs-8">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Lista de Candidatos:</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Residencia</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Cargo</th>
                                                <th>Estado</th>
                                                <th>Acción</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if($tipo2==1){
                                        
                                        $consulta="SELECT direccion, nombre, apellido, cargooo,estado,id_usuarios FROM usuarios ORDER BY direccion ASC ";
                                        $bd->consulta($consulta);
                                        while ($fila=$bd->mostrar_registros()) {
                                            switch ($fila['status']) {
                                                case 1:
                                                    $btn_st = "danger";
                                                    $txtFuncion = "Desactivar";
                                                    break;
                                                
                                                case 0:
                                                    $btn_st = "primary";
                                                    $txtFuncion = "Activar";
                                                    break;
                                            }
                                             //echo '<li data-icon="delete"><a href="?mod=lugares?edit='.$fila['id_tipo'].'"><img src="images/lugares/'.$fila['imagen'].'" height="350" >'.$fila['nombre'].'</a><a href="?mod=lugares?borrar='.$fila['id_tipo'].'" data-position-to="window" >Borrar</a></li>';
                                             echo "<tr>
                                                        <td>
                                                           
                                                              $fila[direccion]
                                                            
                                                        </td>
                                                        <td> $fila[nombre]                                                        </td>
                                                        <td>
                                                            $fila[apellido]
                                                        </td>
                                                         <td>
                                                            $fila[cargooo]
                                                        </td>
                                                        <td>
                                                            $fila[estado]
                                                        </td>
                                                        
                                                         <td><center>
                                                            <a  href=?mod=registro&editar&codigo=".$fila["id_usuarios"]."><img src='./img/consul.png' width='25' alt='Edicion' title=' CONSULTAR ".$fila["nombre"]."'></a>";
      
                                echo "
      
      <a  href=?mod=registro&editar&codigo=".$fila["id_usuarios"]."><img src='./img/editar.png' width='25' alt='Edicion' title='EDITAR LOS DATOS DE ".$fila["nombre"]."'></a> 
      <a   href=?mod=registro&eliminar&codigo=".$fila["id_usuarios"]."><img src='./img/elimina.png'  width='25' alt='Edicion' title='ELIMINAR A   ".$fila["nombre"]."'></a>
      ";}
      echo "
      
    
      
     </center>
                                                        </td>
                                                    </tr>";
                                        
                                        }
                                        
                                        
                                        else {
                                        
                                           $consulta="SELECT direccion, nombre, apellido, cargooo,id_usuarios FROM usuarios ORDER BY nombre ASC ";
                                        $bd->consulta($consulta);
                                        while ($fila=$bd->mostrar_registros()) {
                                            switch ($fila['status']) {
                                                case 1:
                                                    $btn_st = "danger";
                                                    $txtFuncion = "Desactivar";
                                                    break;
                                                
                                                case 0:
                                                    $btn_st = "primary";
                                                    $txtFuncion = "Activar";
                                                    break;
                                            }
                                             //echo '<li data-icon="delete"><a href="?mod=lugares?edit='.$fila['id_tipo'].'"><img src="images/lugares/'.$fila['imagen'].'" height="350" >'.$fila['nombre'].'</a><a href="?mod=lugares?borrar='.$fila['id_tipo'].'" data-position-to="window" >Borrar</a></li>';
                                             echo "<tr>
                                                        <td>
                                                           
                                                              $fila[direccion]
                                                            
                                                        </td>
                                                        <td> $fila[nombre]                                                        </td>
                                                        <td>
                                                            $fila[apellido]
                                                        </td>
                                                         <td>
                                                            $fila[cargooo]
                                                        </td>
                                                         <td>
                                                            <a  href=prestacion2.php?codigo=".$fila["cedula"]."><img src='./img/consul.png' width='25' alt='Edicion' title=' CONSULTAR ".$fila["nombre"]."'></a>";
      
                             
      echo "
      
      <a target='_blank'  href=./pdf/.php?codigo=".$fila["cedula"]."><img src='./img/impresora.png'  width='25' alt='Edicion' title='Imprimir reporte de prestaciones de  ".$fila["nombre"]."'></a>
      
     
                                                        </td>
                                                    </tr>";
                                        }
                                        
                                        } ?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th>Residencia</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Cargo</th>
                                                <th>Estado</th>
                                                <th>Acción</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    
              

                          
                            <?php
 if($tipo2==1){
                                echo '
  <div class="col-md-3">
  <div class="box">
                                <div class="box-header">
                                <div class="box-header">
                                    <h3> <center>Agregar Candidatos <a href="#" class="alert-link">Nuevos</a></center></h3>                                    
                                </div>
                        <center>        
                            <form  name="fe" action="?mod=registro&nuevo" method="post" id="ContactForm">
    


 <input title="AGREGAR UN NUEVO EMPLEADO" name="btn1"  class="btn btn-primary"type="submit" value="Agregar Nuevo">

    
  </form>
  </center>
                                </div>
                            </div>
                            </div>  '; } ?>
                        </br>       
                                
  
                                <div class="col-md-3">
  <div class="box">
                                <div class="box-header">
                                <center>
                                <div class="box-header">
                                   <h3> <center>Generar Excel</a></center></h3>                                    
                                </div>
                                
                                
                                 <a   href=./excel.php><img src='./img/excel.png'  width='50' alt='Edicion' title='Generar Informe'></a>
                                </center>
                                </div>
                                </div>
                                </div>

                                <div class="col-md-3">
  <div class="box">
                                <div class="box-header">
                                <center>
                                <div class="box-header">
                                   <h3> <center>Generar Resumenes</a></center></h3>                                    
                                </div>
                                
                                
                                 <a   href=./excelR.php><img src='./img/excel.png'  width='50' alt='Edicion' title='Generar Informe'></a>
                                </center>
                                </div>
                                </div>
                                </div>

<?php
}

     

     if (isset($_GET['editar'])) { 

//codigo que viene de la lista
$x1=$_GET['codigo'];
                        if (isset($_POST['editar'])) {
                           





$nombre=strtoupper($_POST["nombre"]);
$apellido=strtoupper($_POST["apellido"]);
$correo=strtoupper($_POST["correo"]);
$ci=strtoupper($_POST["ci"]);
$telefono=strtoupper($_POST["telefono"]);
$direccion=strtoupper($_POST["direccion"]);
$cargooo=strtoupper($_POST["cargooo"]);
$fechas=strtoupper($_POST["fechas"]);
$inducc=strtoupper($_POST["inducc"]);

                       
if( $nombre=="" )
                {
                
                    echo "
   <script> alert('campos vacios')</script>
   ";
                    echo "<br>";
                    
                }
        else
           {
$sql=" UPDATE usuarios SET 
nombre='$nombre' ,
apellido='$apellido' ,
cedula='$ci' ,
telefono='$telefono' ,
direccion='$direccion' ,
cargooo='$cargooo', 
fechas='$fechas',
inducc='$inducc'
 where id_usuarios='$x1'";


$bd->consulta($sql);
                          

   
                            //echo "Datos Guardados Correctamente";
                            echo '<div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b>Bien!</b> Datos Editados Correctamente... ';



echo "
Nombre: '$nombre',
apellido='$apellido' ,
cedula='$ci' ,
cargooo='$cargooo',
telefono='$telefono',
direccion='$direccion',
id_usuarios='$x1'
";
                               echo '   </div>';
                           
                            
                        



}
   
}


                                        
     $consulta="SELECT cedula, nombre, apellido, cargooo,telefono,direccion,fechas,inducc FROM usuarios where id_usuarios='$x1'";
     $bd->consulta($consulta);
     while ($fila=$bd->mostrar_registros()) {



?>
  <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Editar Candidatos</h3>
                                </div>
                                
                            
        <?php  echo '  <form role="form"  name="fe" action="?mod=registro&editar=editar&codigo='.$x1.'" method="post">';
        ?>
                                    <div class="box-body">
                                        <div class="form-group">
                                           
                                            
                                            
                                            
                                            <label for="exampleInputFile">Nombre</label>
                                            <input  onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();" type="text" required type="tex" name="nombre" class="form-control" value="<?php echo  $fila[nombre] ?>" id="exampleInputEmail1" placeholder="Intoducir el Nombre">
                                            <label for="exampleInputFile">Apellido</label>
                                            <input  onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();" required type="tex" name="apellido" class="form-control" value="<?php echo  $fila[apellido] ?>" id="exampleInputEmail1" placeholder="Apellido">
                                            <br>
                                            <label for="start">Fecha de Activación:</label>
                                    
                                             <input type="date" id="start"  name='fechas' value="<?php echo  $fila[fechas] ?>"
       value="2020-09-01"
       min="2018-01-01" max="2020-12-31">
      
       <br>
                                            <label for="exampleInputFile">Rut</label>
                                            <input onkeydown="return enteros(this, event)" required type="text" name="ci" class="form-control" value="<?php echo $fila[cedula] ?>" id="exampleInputEmail1" placeholder="Cedula">
    <label for="exampleInputFile">telefono</label>
                                            <input onkeydown="return enteros(this, event)" required type="text" name="telefono" class="form-control" value="<?php echo $fila[telefono] ?>" id="exampleInputEmail1" placeholder="telefono">

                                             <label for="exampleInputFile">Direccion</label>
                                            <input  required type="tex" name="direccion" class="form-control" value="<?php echo $fila[direccion] ?>" id="exampleInputEmail1" placeholder="direccion">

                                            <label for="exampleInputFile">Cargo</label>
                                            <input  required type="tex" name="cargooo" class="form-control" value="<?php echo $fila[cargooo] ?>"  id="exampleInputEmail1" placeholder="Correo">
                                            
                                            
                                            <label for="exampleInputFile">Inducción actual: </label>
                                            <label for="exampleInputFile" name='inducc' value="<?php echo $fila[inducc] ?>"> <i><?php echo $fila[inducc] ?> </i></label>
                                          
                                               
                                          <select  for="exampleInputEmail" class="form-control" name='inducc' value="<?php echo $fila[inducc] ?>" id="exampleInputEmail1" placeholder="Correo">
                                          <option   value="<?php echo $fila[inducc] ?>"><?php echo $fila[inducc] ?> (Actual)</option>
<option  value="OK">OK</option>
<option value="pendiente">PENDIENTE</option>
<option value="no aplica">NO APLICA</option>

</select>
                                           
                                             
  
                                        </div>
                                       
                                     
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-lg" name="editar" id="editar" value="Editar">Editar</button>
                                        
                                    
                                    </div>
                                </form>
                            </div><!-- /.box -->
<?php


}
}

 //eliminar

     if (isset($_GET['eliminar'])) { 

//codigo que viene de la lista
$x1=$_GET['codigo'];
                        if (isset($_POST['eliminar'])) {
                           


$nombre=strtoupper($_POST["nombre"]);
$apellido=strtoupper($_POST["apellido"]);
$correo=strtoupper($_POST["correo"]);
$ci=strtoupper($_POST["ci"]);

                       
if( $nombre=="" )
                {
                
                    echo "
   <script> alert('campos vacios')</script>
   ";
                    echo "<br>";
                    
                }
        else
           {







$sql="delete from usuarios where id_usuarios='$x1' ";


$bd->consulta($sql);
                          

   
                            //echo "Datos Guardados Correctamente";
                            echo '<div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <b>Bien!</b> Se Elimino Correctamente... ';



echo "
Nombre: '$nombre',
apellido='$apellido' ,
cedula='$ci' ,
cargooo='$cargooo',
id_usuarios='$x1'
";
                               echo '   </div>';
                           
                            
                        



}
   
}


                                        
     $consulta="SELECT cedula, nombre, apellido, cargooo FROM usuarios where id_usuarios='$x1'";
     $bd->consulta($consulta);
     while ($fila=$bd->mostrar_registros()) {



?>
  <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Eliminar Candidatos</h3>
                                </div>
                                
                            
        <?php  echo '  <form role="form"  name="fe" action="?mod=registro&eliminar=eliminar&codigo='.$x1.'" method="post">';
        ?>
                                    <div class="box-body">
                                        <div class="form-group">
                                           
                                            
                                            
                                            
                                            <label for="exampleInputFile">Nombre</label>
                                            <input  onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();" type="text" required type="tex" name="nombre" class="form-control" value="<?php echo  $fila[nombre] ?>" id="exampleInputEmail1" placeholder="Intoducir el Nombre">
                                            <label for="exampleInputFile">Apellido</label>
                                            <input  onkeypress="return caracteres(event)" onblur="this.value=this.value.toUpperCase();" required type="tex" name="apellido" class="form-control" value="<?php echo  $fila[apellido] ?>" id="exampleInputEmail1" placeholder="Apellido">
                                            <label for="exampleInputFile">cedula</label>
                                            <input onkeydown="return enteros(this, event)" required type="text" name="ci" class="form-control" value="<?php echo $fila[cedula] ?>" id="exampleInputEmail1" placeholder="Cedula">
                                            <label for="exampleInputFile">Cargo</label>
                                            <input  for="exampleInputFile" name="cargooo" class="form-control" value="<?php echo $fila[cargooo] ?>"  placeholder="Cargo">
                                            
                                           
                                            
  
                                        </div>
                                       
                                     
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <input type=submit  class="btn btn-primary btn-lg" name="eliminar" id="eliminar" value="ELIMINAR">
                                        
                                    
 

                                    </div>
                                </form>
                            </div><!-- /.box -->
<?php


}




}
?>




