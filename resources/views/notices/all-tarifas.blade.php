
@php
//$notices=App\Models\Notice::all();
// $tconsumos=App\Models\Tconsumo::all();
// $tmultas=App\Models\Tmulta::all();
// $taportes=App\Models\Taporte::all();
// $multas=App\Models\Multa::all();
@endphp

<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $subtotal = 0;
            // foreach ($productos as $producto) {
            //     $totalProducto = $producto["cantidad"] * $producto["precio"];
            //     $subtotal += $totalProducto;
                ?>
                <tr>
                    {{-- <td><?php echo $producto["descripcion"] ?></td>
                    <td><?php echo number_format($producto["cantidad"], 2) ?></td>
                    <td>$<?php echo number_format($producto["precio"], 2) ?></td>
                    <td>$<?php echo number_format($totalProducto, 2) ?></td> --}}
                </tr>
            <?php
            // $subtotalConDescuento = $subtotal - $descuento;
            // $impuestos = $subtotalConDescuento * ($porcentajeImpuestos / 100);
            // $total = $subtotalConDescuento + $impuestos;
            ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="text-right">Subtotal</td>
                {{-- <td>$<?php echo number_format($subtotal, 2) ?></td> --}}
            </tr>
            <tr>
                <td colspan="3" class="text-right">Descuento</td>
                {{-- <td>$<?php echo number_format($descuento, 2) ?></td> --}}
            </tr>
            <tr>
                <td colspan="3" class="text-right">Subtotal con descuento</td>
                {{-- <td>$<?php echo number_format($subtotalConDescuento, 2) ?></td> --}}
            </tr>
            <tr>
                <td colspan="3" class="text-right">Impuestos</td>
                {{-- <td>$<?php echo number_format($impuestos, 2) ?></td> --}}
            </tr>
            <tr>
                <td colspan="3" class="text-right">
                    <h4>Total</h4></td>
                <td>
                    {{-- <h4>$<?php echo number_format($total, 2) ?></h4> --}}
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
