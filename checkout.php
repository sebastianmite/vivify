<?php
include 'templates/navbar.php';
?>

<div class="block"></div>
<!-- Formulario de la Facturacion -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="black-text">Detalles de facturación</h1>
            <!-- Default form grid -->
            <form>
                <div class="row">
                    <div class="col">
                        <label class="black-text" for="firstname"></label>
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col">
                        <label class="black-text" for="lastname"></label>
                        <input type="text" class="form-control" placeholder="Apellidos">
                    </div>
                </div>
                <div class="pt-2">
                    <label for="ruc"></label>
                    <input type="text" id="ruc" class="form-control" placeholder="Cédula o RUC (optional)">
                </div>
                <div class="pt-2">
                    <label for="country" class="disabled"></label>
                    <input type="text" id="country" class="form-control" placeholder="Ecuador" disabled>
                </div>
                <div class="pt-2">
                    <label for="city"></label>
                    <input type="text" id="city" class="form-control" placeholder="Ciudad">
                </div>
                <div class="pt-2">
                    <label for="country"></label>
                    <input type="text" id="country" class="form-control" placeholder="Provincia">
                </div>
                <div class="pt-2">
                    <label for="address"></label>
                    <input type="text" id="address" class="form-control" placeholder="Dirección Completa">
                </div>
                <div class="pt-2">
                    <label for="code"></label>
                    <input type="text" id="code" class="form-control" placeholder="Codigo Postal (opcional)">
                </div>
                <div class="pt-2">
                    <label for="mobile"></label>
                    <input type="text" id="mobile" class="form-control" placeholder="Celular">
                </div>
                <div class="pt-2">
                    <label for="phone"></label>
                    <input type="text" id="phone" class="form-control" placeholder="Telefono fijo (optional)">
                </div>

                <div class="pt-2">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
                </div>
                <div class="form-check pt-3">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label black-text" for="defaultCheck1">
                        ¿Crear una cuenta?
                    </label>
                </div>
                <div style="overflow:auto;">
                    <div style="float:right;">
                        <div class="pt-3">
                            <!-- <button class="btn btn-outline-primary">Realizar Pedido</button> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <section>
                <div>
                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-3 black-text">La cantidad total de</h5>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 black-text">
                                    Cantidad temporal
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0 black-text">
                                    Envío
                                    <span>Gratis</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3 black-text">
                                    <div>
                                        <strong>La cantidad total de</strong>
                                        <strong>
                                            <p class="mb-0">(Incluye IVA)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-outline-success btn-block waves-effect waves-light">Realizar Pedido</button>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">

                            <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Agregar un código de descuento (opcional)
                                <span><i class="fas fa-chevron-down pt-1"></i></span>
                            </a>

                            <div class="collapse" id="collapseExample">
                                <div class="mt-3">
                                    <div class="md-form md-outline mb-0">
                                        <input type="text" id="discount-code" class="form-control font-weight-light" placeholder="Introduzca el código de descuento">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>


<div class="block-footer"></div>
<?php
include 'templates/footer.php';
?>