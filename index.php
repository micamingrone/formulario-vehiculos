<?php
require('Vehiculos.php');

$res = new Vehiculo;

$asd = $res->getMarcas();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Consultas de vehiculos</title>
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center mt-5">Realizá tu consulta</h1>

        <form>
            <div class="row mt-5">
                <div class="col">
                    <!-- Marca -->
                    <select onChange="buscarModelo();" id="miSelect" class="form-select" aria-label="Default select example">
                        <option selected value="">Marca</option>
                        <?php foreach ($asd as $key => $value) { ?>
                            <option value="<?= $value->marca; ?>"><?= $value->marca; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col">
                    <!-- Modelo -->
                    <select  class="form-select" aria-label="Default select example">
                        <option selected value="">Modelo</option>
                        <?php foreach ($modelos as $key => $value) { ?>
                            <<option value="<?= $value->$marcas . $modelos; ?>"><?= $value->$marcas . $modelos; ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="col">
                    <!-- Año -->
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Año</option>
                        <option value="1">2017</option>
                        <option value="2">2019</option>
                    </select>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <!-- Color -->
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Color</option>
                        <option value="1">Rojo</option>
                        <option value="2">Plateado</option>
                    </select>
                </div>
                <div class="col">
                    <!-- Número de placa -->
                    <div class="form-outline">
                        <input type="text" id="form8Example4" class="form-control" />
                        <label class="form-label" for="form8Example4">Número de placa</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Número de chasis -->
                    <div class="form-outline">
                        <input type="email" id="form8Example5" class="form-control" />
                        <label class="form-label" for="form8Example5">Número de chasis</label>
                    </div>
                </div>
            </div>
            <div class="row ">
                <button type="button" class="d-grid gap-2 col-4 mx-auto mt-5 btn btn-primary">Consultar</button>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function buscarModelo() {
            var select = document.getElementById("miSelect");
            var opcionSeleccionada = select.options[select.selectedIndex].value;

            if(opcionSeleccionada){
                console.log(opcionSeleccionada);

                axios.post('ControllerVehiculo.php', {
                    marca: opcionSeleccionada
                },{
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            } 
        }
    </script>
</body>

</html>