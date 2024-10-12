<input?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" href="./css/EstiloVistaClientesVehiculos.css">
    <script src="./javascript/ScriptGeneral.js"></script>
</head>
<body>
    <header>
        <img class="Logo" src="./images/DYA2.png">
        <h2 class="h21"> Crear Usuario</h2>
        <span class="user-detail"><h2>DYA IMPORT &amp; EXPORT S.A.S.</h2></span>
    </header>
    <section class ="form-register">
        <h4>Información Personal</h4>
        <input class="Controls" type="text" id="Nombre" placeholder="Ingrese Nombre Completo" pattern="[a-zA-Z ]" oninput="this.value = this.value.replace(/[^a-zA-Z ]/,'')" required>
        <input class="Controls" type="text" id="Documento" placeholder="Ingrese Documento" minlength="10" maxlength="15" pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/,'')" required>
        <input class="Controls" type="text" id="Direccion" placeholder="Ingrese Direccion" pattern="[a-zA-Z0-9-# ]" oninput="this.value = this.value.replace(/[^a-zA-Z0-9-# ]/,'')" required>
        <input class="Controls" type="text" id="Celular" placeholder="Ingrese Celular" minlength="10" maxlength="15" pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/,'')" required>
        <input class="Controls" type="text" id="Celular" placeholder="Ingrese Teléfono" minlength="10" maxlength="15" pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/,'')" required>
        <input class="Controls" type="text" id="Email" placeholder="Ingrese Email" pattern="[a-z0-9@_.]" oninput="this.value = this.value.replace(/[^a-zA-Z0-9@._]/,'')" required>
        <h4>Información Del Vehículo</h4>
        <input class="Controls" type="text" id="Placa" placeholder="Ingrese Placa" minlength="6" maxlength="6" pattern="[a-zA-Z0-9]" oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/,'')"required>
        <input class="Controls" type="text" id="TipoVehiculo" list="ListaClaseVehiculo" placeholder="Ingrese Tipo Del Vehículo" required>
            <datalist id ="ListaClaseVehiculo">
                <option value = "VEHICULO PARTICULAR">
                    <option value = "VEHICULO TRANSPORTE PUBLICO">
                        <option value = "VEHICULO CARGA">          
            </datalist>
        <input class="Controls" type="text" id="Marca" placeholder="Ingrese Marca" pattern="[a-zA-Z ]" oninput="this.value = this.value.replace(/[^a-zA-Z ]/,'')" required>
        <input class="Controls" type="text" id="Linea" placeholder="Ingrese Linea" pattern="[a-zA-Z0-9 ]" oninput="this.value = this.value.replace(/[^a-zA-Z0-9 ]/,'')" required>
        <input class="Controls" type="text" id="Modelo" placeholder="Ingrese Modelo" minlength="4" maxlength="4" pattern="[a-zA-Z ]" oninput="this.value = this.value.replace(/[^0-9]/,'')" required>
        <input class="Controls" type="text" id="Cilindraje" placeholder="Ingrese Cilindraje" pattern="[0-9,]" oninput="this.value = this.value.replace(/[^0-9,]/,'')" required> 
        <input class="Controls" type="text" id="kms" placeholder="Ingrese KMS" pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/,'')" required> 
        <input class="Controls" type="text" id="Gasolina" list="ListaGasolina" placeholder="Ingrese Tipo De Gasolina" required>
            <datalist id ="ListaGasolina">
                   <option value = "GASOLINA">
                        <option value = "DIESEL">
                            <option value = "ELECTRICO">
                                <option value = "HIBRIDO"> 
            </datalist>
        <br> 
        <div class="buttons">    
            <button class="btn"> Crear Usuario</button>
        </div>
        <div class="Button-container">
            <button class="btn1"> Cancelar</button>
        </div>
        <br>
        <br>
        <br>

    </section>

</body>
</html>
