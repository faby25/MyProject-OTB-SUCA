<?php
$socio = "Luis Cabrera Benito";
$remitente = "Luis Cabrera Benito";
$mensajePie = "OTB-SUCA";
$numero = 1;
$descuento = 0;
$porcentajeImpuestos = 16;
$tarifas = [
  [
      "precio" => 15,
      "descripcion" => "Tarifa Basica",
      "cantidad" => 1,
  ],
  [
      "precio" => 10,
      "descripcion" => "Tarifa for cubos de exeso",
      "cantidad" => 2,
  ],
];
$fecha = date("Y-m-d");
?>


@php
$tconsumos=App\Models\Tconsumo::all();
$taportes=App\Models\Taporte::all();
$tmultas=App\Models\TMulta::all();
$multas=App\Models\Multa::all();
   $subtotal = 0;
   $total = 0;
@endphp
<div class="row" style="margin-bottom: 2rem;">
    <div class="col-sm-6">
        <h1 class="h2">Socio:</h1>
        {{$notice->lectura->meter->user->name}}
        {{$notice->lectura->meter->user->lastnameF}}
        {{$notice->lectura->meter->user->lastnameM}}
        <h1 class="h2">Medidor:</h1>
        {{$notice->lectura->meter->nombre }}
    </div>
    <div class="col">
        <h1 class="h2">Lectura:</h1>
            <strong>Fecha: </strong>
            {{ $notice->created_at }}
            <br>
            <strong>Factura No.</strong>
            {{$notice->id}}
    </div>
    <div class="col">
      <table class="table table-condensed table-bordered table-striped">
            <thead>
            <tr>
                <td><strong>LEC. ACT</strong><br>
                  {{ $notice->lectura->lectura}}
                </td>
                <td><strong>TOTAL CUBOS</strong><br>
                  {{ $notice->lectura->consumo}}
                </td>
            </tr>
            <tr>
                <td><strong>TARIFA BASICA</strong><br>
                  {{ $tconsumos['0']->monto}}
                </td>
                <td><strong>CADA CUBO Bs.</strong><br>
                  {{ $notice->lectura->consumo}}
                </td>
            </tr>
            </thead>
      </table>
    </div>
</div>

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
        <tr>
            <td>{{$tconsumos['0']->descripcion}}</td>
            <td>{{$tconsumos['0']->monto}}</td>
            <td>-</td>
            <td>Bs. {{$tconsumos['0']->monto}}</td>
        </tr>
        <?php
            $total = $tconsumos['0']->monto;
            $subtotal += $total;
            $last=$tconsumos['0'];
        ?>
        @foreach ($tconsumos->skip(1) as $tconsumo)
            <tr>
                <td><?php echo $tconsumo["descripcion"] ?></td>
              @if ($last->cubos_fin < $notice->lectura->consumo)
                <?php
                    $montoVariable =$notice->lectura->consumo - $last->cubos_fin;
                    $total = $montoVariable * $tconsumo['monto'];
                    $subtotal += $total;
                ?>
              @else
                <?php
                    $montoVariable=0;
                    $total = $montoVariable * $tconsumo['monto'];
                    $subtotal += $total;
                ?>
              @endif
                <td>{{$montoVariable}}</td>
                <td>Bs.<?php echo number_format($tconsumo['monto'], 2) ?></td>
                <td>Bs.<?php echo number_format($total, 2) ?></td>
            </tr>
            <?php$last=$tconsumo;?>
        @endforeach
        <tr>
            <td colspan="3" class="text-right">Subtotal</td>
            <td>Bs.<?php echo number_format($subtotal, 2) ?></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
          @foreach ($tmultas as $tmulta)
              <tr>
                  <td colspan="3" class="text-right"><?php echo $tmulta["descripcion"] ?></td>
                  <td>Bs.<?php echo number_format($tmulta["monto"], 2) ?></td>
              </tr>
              <?php
                  $total = $tmulta["monto"];
                  $subtotal += $total;
              ?>

          @endforeach
        </tr>
        <tr>
          @foreach ($taportes as $taporte)
              <tr>
                  <td colspan="3" class="text-right"><?php echo $taporte["descripcion"] ?></td>
                  <td>Bs.<?php echo number_format($taporte["monto"], 2) ?></td>
              </tr>
              <?php
                  $total = $tmulta["monto"];
                  $subtotal += $total;
              ?>
          @endforeach
        </tr>
        <tr>
            <td colspan="3" class="text-right">
                <h4>Total</h4>
            </td>
            <td>
                <h4>Bs.<?php echo number_format($subtotal, 2) ?></h4>
            </td>
        </tr>
    </tfoot>
</table>
<div class="box-footer mt20">
    <div class="row">
        <div class="col text-center">
            <p class="h5">Fecha de Vencimiento: {{$notice->fechaVencimiento}}</p>
            <p class="h5">OTB-SUCA</p>
        </div>
    </div>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
</div>
