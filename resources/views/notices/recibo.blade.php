<?php
$mensajePie = "OTB-SUCA";
$fecha = date("Y-m-d");
// $book = DB::table('cancha')->join('complejo', 'cancha.complejo_id', '=', 'complejo.id')
//             ->join('users', 'users.complejo_id','=', 'complejo.id')
//             ->join('reserva', 'reserva.user_id', '=', 'users.id')
//             ->whereDate('reserva.fecha_reserva', '<=', $hoy) //Where date se encarga de hacer la comparación entre fechas
//             ->count();
?>


@php
$carbon = new \Carbon\Carbon();
$date = $carbon->now();
$tconsumos=App\Models\Tconsumo::all();
$taportes=App\Models\Taporte::all();
$tmultas=App\Models\TMulta::all();
   $subtotal = 0;
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
                <td>Bs. <?php echo number_format($tconsumo['monto'], 2) ?></td>
                <td>Bs. <?php echo number_format($total, 2) ?></td>
            </tr>
            <?php$last=$tconsumo;?>
        @endforeach
        <tr>
            <td colspan="3" class="text-right">Subtotal</td>
            <td>Bs. <?php echo number_format($subtotal, 2) ?></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
          {{-- @foreach ($tmultas as $tmulta) --}}
          <tr>
              <td colspan="3" class="text-right"><?php echo $tmultas['0']->descripcion ?></td>
                  @if ($notice->pagado)
                    <?php
                        $total = 0.00;
                        $subtotal += $total;
                    ?>
                  @else
                      @if($notice->fechaVencimiento < $date)
                        <?php
                            $total = $tmultas['0']["monto"];
                            $subtotal += $total;
                        ?>
                      @else
                        <?php
                            $total = 0.00;
                            $subtotal += $total;
                        ?>
                      @endif
                  @endif

              <td>Bs. {{$total}}</td>
          </tr>

          @php
            $multas=App\Models\Multa::where('user_id', $notice->lectura->meter->user->id)->get();
            $total= 0.00;
          @endphp
          <tr>
              <td colspan="3" class="text-right"><?php echo $tmultas['1']["descripcion"] ?></td>
              @if ($multas->count()>0)
                  @foreach ($multas as $multa)
                    @if ($multa->activo)
                      <?php
                          $total += $tmultas['1']["monto"];
                          $subtotal += $total;
                      ?>
                    @endif
                  @endforeach
              @endif
            <td>Bs. {{$total}}</td>
          </tr>



          {{-- @endforeach --}}
        </tr>
        <tr>
          @foreach ($taportes as $taporte)
            @if ($taporte->activo)
              <tr>
                  <td colspan="3" class="text-right"><?php echo $taporte["descripcion"] ?></td>
                  <td>Bs.<?php echo number_format($taporte["monto"], 2) ?></td>
              </tr>
              <?php
                  $total = $taporte["monto"];
                  $subtotal += $total;
              ?>
            @endif
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
            <p class="h5"><?php echo $mensajePie ?></p>
        </div>
    </div>
</div>
