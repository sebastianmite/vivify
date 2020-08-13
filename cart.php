<?php
include 'templates/navbar.php';
?>
<div class="block"></div>
<div class="container">
    <h1 class="black-text">Your Cart</h1>
    <!-- Si el carro esta vacio se muestra estos elementos -->
    <!-- <p class="black-text">Your cart is empty.</p>
    <button class="btn btn-primary btn-outline-primary waves-effect waves-light">Continue browsing here</button> -->

    <!-- Carrito de Compra -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th class="text-center" scope="col">Price</th>
                    <th class="text-center" scope="col">Quantity</th>
                    <th class="text-center" scope="col">Total</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img class="img-fluid" width="100px" src="img/product.png" alt=""></td>
                    <td>
                        <div>
                            <p>Detox Teas</p>
                        </div>
                        <a href="">Remove</a>
                    </td>
                    <td class="text-center">$20.00</td>
                    <td class="text-center">1</td>
                    <td class="text-center">$20.00</td>
                </tr>
                <tr>
                    <td><img class="img-fluid" width="100px" src="img/product3.png" alt=""></td>
                    <td>
                        <div>
                            <p>Caffe Detox</p>
                        </div>
                        <a href="">Remove</a>
                    </td>
                    <td class="text-center">$20.00</td>
                    <td class="text-center">1</td>
                    <td class="text-center">$20.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-center">Subtotal</td>
                    <td class="text-center">$40.00</td>

                </tr>
            </tbody>

        </table>
        <div style="text-align: right;">
            <a href="index.php" class="btn btn-primary btn-outline-primary waves-effect waves-light">Seguir Comprando</a>
            <a href="checkout.php" class="btn btn-outline-success waves-effect">Finalizar Pedido</a>
        </div>
    </div>
</div>
<div class="block-footer"></div>
<?php
include 'templates/footer.php';
?>