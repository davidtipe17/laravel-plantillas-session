@extends('layouts/app')

@section('content')
<div class="row">
	<div class="col-md-8">
    	<div class="row">

        	<div class="col-md-3 mb-3">
            	<div class="card">
                	<img src="img/pizza.jpg" class="card-img-top" alt="producto">
                	<div class="card-body">
                	<h5 class="card-title">Pizza 01</h5>
                	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                	<div class="d-grid gap-2">
                        	<a href="#" class="btn btn-outline-secondary">Agregar al carrito <i class="bi bi-cart-plus"></i></a>
                    	</div>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 mb-3">
            	<div class="card">
                	<img src="img/pizza.jpg" class="card-img-top" alt="producto">
                	<div class="card-body">
                	<h5 class="card-title">Pizza 02</h5>
                	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                	<div class="d-grid gap-2">
                        	<a href="#" class="btn btn-outline-secondary">Agregar al carrito <i class="bi bi-cart-plus"></i></a>
                    	</div>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 mb-3">
            	<div class="card">
                	<img src="img/pizza.jpg" class="card-img-top" alt="producto">
                	<div class="card-body">
                	<h5 class="card-title">Pizza 03</h5>
                	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                	<div class="d-grid gap-2">
                        	<a href="#" class="btn btn-outline-secondary">Agregar al carrito <i class="bi bi-cart-plus"></i></a>
                    	</div>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 mb-3">
            	<div class="card">
                	<img src="img/pizza.jpg" class="card-img-top" alt="producto">
                	<div class="card-body">
                	<h5 class="card-title">Pizza 04</h5>
                	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                	<div class="d-grid gap-2">
                        	<a href="#" class="btn btn-outline-secondary">Agregar al carrito <i class="bi bi-cart-plus"></i></a>
                    	</div>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 mb-3">
            	<div class="card">
                	<img src="img/pizza.jpg" class="card-img-top" alt="producto">
                	<div class="card-body">
                	<h5 class="card-title">Pizza 05</h5>
                	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                	<div class="d-grid gap-2">
                        	<a href="#" class="btn btn-outline-secondary">Agregar al carrito <i class="bi bi-cart-plus"></i></a>
                    	</div>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 mb-3">
            	<div class="card">
                	<img src="img/pizza.jpg" class="card-img-top" alt="producto">
                	<div class="card-body">
                	<h5 class="card-title">Pizza 06</h5>
                	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                	<div class="d-grid gap-2">
                        	<a href="#" class="btn btn-outline-secondary">Agregar al carrito <i class="bi bi-cart-plus"></i></a>
                    	</div>
                	</div>
            	</div>
        	</div>
        	<div class="col-md-3 mb-3">
            	<div class="card">
                	<img src="img/pizza.jpg" class="card-img-top" alt="producto">
                	<div class="card-body">
                	<h5 class="card-title">Pizza 07</h5>
                	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                	<div class="d-grid gap-2">
                        	<a href="#" class="btn btn-outline-secondary">Agregar al carrito <i class="bi bi-cart-plus"></i></a>
                    	</div>
                	</div>
            	</div>
        	</div>

    	</div>
	</div>
	<div class="col-md-4">
    	<form method="post" action="imprimir.html">
        	<h3>Datos del Cliente</h3>
        	<div class="mb-3">
            	<label for="nombreInput" class="form-label">Nombres</label>
            	<input type="text" class="form-control" id="nombreInput" placeholder="Nombre del cliente" required />
        	</div>
        	<h3>Detalle de la Venta</h3>
        	<table class="table">
            	<thead>
                	<tr>
                    	<th>Producto</th>
                    	<th>Precio</th>
                    	<th>Cantidad</th>
                    	<th>Subtotal</th>
                    	<th>&nbsp;</th>
                	</tr>
            	</thead>
            	<tbody>
                	<tr>
                    	<td>Producto 01</td>
                    	<td>S/ 15.00</td>
                    	<td class="text-center">3</td>
                    	<td>S/ 45.00</td>
                    	<td class="text-center"><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a></th>
                	</tr>
                	<tr>
                    	<td>Producto 02</td>
                    	<td>S/ 24.00</td>
                    	<td class="text-center">1</td>
                    	<td>S/ 24.00</td>
                    	<td class="text-center"><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a></th>
                	</tr>
                	<tr>
                    	<td>Producto 03</td>
                    	<td>S/ 10.00</td>
                    	<td class="text-center">2</td>
                    	<td>S/ 20.00</td>
                    	<td class="text-center"><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a></th>
                	</tr>
            	</tbody>
            	<tfoot>
                	<tr>
                    	<th class="text-end" colspan="3">Total:</th>
                    	<th>S/ 89.00</th>
                    	<th>&nbsp;</th>
                	</tr>
            	</tfoot>
        	</table>
        	<div class="d-flex justify-content-between">
            	<button type="submit" class="btn btn-success" style="width: 50%;">Cobrar</button>
            	<a href="#" class="btn btn-danger" style="width: 50%;">Cancelar</a>
        	</div>
    	</form>
	</div>
</div>
@endsection
