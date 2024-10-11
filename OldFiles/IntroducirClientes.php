
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" href="../view/NewUser.css">
</head>
<body>

    <header>
        <img class="Logo" src="./Imagenes/DYA2.png">
        <h2 class="h21"> Crear Usuario</h2>
        <span class="user-detail"><h2>DYA IMPORT &amp; EXPORT SA.S.</h2></span>
    </header>

    <?php
    
        include __dir__ .'/../controller/ConexionDb.php';
        if(isset($_POST['btn'])){

            $cedula=$_POST['Documento'];
            $nombre=$_POST['Nombre'];
            $celular=$_POST['Celular'];
            $email=$_POST['Email'];
            $direccion=$_POST['Direccion'];
            $telefono=$_POST['Telefono'];

            $placa=$_POST['Placa'];
            $tipoVehiculo=$_POST['TipoVehiculo'];
            $marca=$_POST['Marca'];
            $linea=$_POST['Linea'];
            $modelo=$_POST['Modelo'];
            $cilindraje=$_POST['Cilindraje'];
            $kilometros=$_POST['kms'];
            $tipoCombustible=$_POST['Gasolina'];

            $sql="insert into clientes_dya(IDENTIFICACION_CLIENTE, NOMBRE_CLIENTE, NUMERO_CELULAR_CLIENTE, EMAIL_CLIENTE, 
                  DIRECCION_CLIENTE, NUMERO_TELEFONO_CLIENTE) values('".$cedula."','".$nombre."','".$celular."','".$email.
                  "','".$direccion."','".$telefono."')";

            $sql="insert into vehiculos_dya('".$placa."','".$cedula."','".$tipoVehiculo."','".$marca."','".$modelo.
                        "','".$tipoCombustible."','".$linea."','".$cilindraje."','".$kilometros."')";

            $conexion = new ConexionBd();

            $conexion->abrirConexion($server,$user,$password, $dbName, $port);

            $resultado = $conexion->ejecutarComandoSql($sql);

            if($resultado){
                echo"<script type='text/JavaScript'>
                      alert('Los datos fueron ingresados
                      correctamente en la BD');
                      window.location.href='IntroducirClientes.php';
                      </script>";
            }else{
                echo"<script type='text/JavaScript'>
                      alert('ERROR: Los datos NO fueron ingresados
                      correctamente en la BD');
                      window.location.href='IntroducirClientes.php';
                      </script>";
            }

            $conexion->cerrarConexion();

        }else{
    ?>

    <section class ="form-register">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h4>Información Personal</h4>
                <input class="Controls" type="text" name="Nombre" placeholder="Ingrese Nombre Completo" required oninput="soloLetras(this)">
                <input class="Controls" type="text" name="Documento" placeholder="Ingrese Documento" minlength="10" maxlength="15" required oninput="soloNumeros(this)">
                <input class="Controls" type="text" name="Direccion" placeholder="Ingrese Direccion" required>
                <input class="Controls" type="text" name="Celular" placeholder="Ingrese Celular" minlength="10" maxlength="15" requeired oninput="soloNumeros(this)">
                <input class="Controls" type="text" name="Telefono" placeholder="Ingrese Teléfono" minlength="7" maxlength="10" required oninput="soloNumeros(this)">
                <input class="Controls" type="email" name="Email" placeholder="Ingrese Email" required>
            <h4>Información Del Vehículo</h4>
                <input class="Controls" type="text" name="Placa" placeholder="Ingrese Placa" maxlength="6" minlength="6" required>
                <input class="Controls" type="text" name="TipoVehiculo" list="ListaClaseVehiculo" placeholder="Ingrese Tipo Del Vehículo" required>
                <datalist id ="ListaClaseVehiculo">
                    <option value = "VEHICULO PARTICULAR">
                        <option value = "VEHICULO TRANSPORTE PUBLICO">
                            <option value = "VEHICULO CARGA">          
                </datalist>
                <input class="Controls" type="text" name="Marca" placeholder="Ingrese Marca" required oninput="soloLetras(this)">
                <input class="Controls" type="text" name="Linea" placeholder="Ingrese Linea" required>
                <input class="Controls" type="text" name="Modelo" placeholder="Ingrese Modelo" minlength="4"maxlength="4" oninput="soloNumeros(this)"required>
                <input class="Controls" type="text" name="Cilindraje" placeholder="Ingrese Cilindraje" oninput="soloDecimales(this)"required> 
                <input class="Controls" type="text" name="kms" placeholder="Ingrese KMS" required oninput="soloNumeros(this)"> 
                <input class="Controls" type="text" name="Gasolina" list="ListaGasolina" placeholder="Ingrese Tipo De Combustible" required>
                <datalist id ="ListaGasolina">
                    <option value = "GASOLINA">
                        <option value = "DIESEL">
                            <option value = "ELECTRICO">
                                <option value = "HIBRIDO">            
                </datalist>
        </form>
        <br> 
        <div class="buttons">    
            <button class="btn" name="btn" type="submit">Enviar</button>
        </div>
        <div class="Button-container">
            <button class="btn1"> Cancelar</button>
        </div>
        <br>
        <br>
        <br>
    </section>

    <?php
        }
    ?>

    <script> //script funcional para los input que solo permitan numeros
        function soloNumeros(input){
            input.value=input.value.replace(/[^0-9]/g,'');
        }
        function soloLetras(input){
            input.value=input.value.replace(/[^a-z^A-Z ]/g,'')
        }
        function soloDecimales(input){
            input.value=input.value.replace(/[^0-9,.]/g,'')
        }
    </script>

</body>
</html>
