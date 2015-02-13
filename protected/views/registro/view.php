<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	$model->idregistro,
);
?>
<style>
	#imprimir:hover{
		opacity:1 !important;
	}
	#otro_auto:hover{
		opacity:1 !important;
	}

	.table{
		width: 300px !important;
		font-family: "Monaco", Courier New, monospace;
	}
	.table tbody td + td {
		text-align: right;
	}
	.table>tbody>tr>td{
		padding: 0px !important;
		border-top: 0px !important;
	}

	.table tr:first-child{
		text-align: center;
	}

	.table tr:nth-child(2){
		text-align: center;
	}

	.table tr:last-child{
		text-align: center;
	}

	tr.dotted{
		border: 1px;
		border-top-style: dotted !important;
	}

	tr.double{
		border: 1px;
		border-top-style: double !important;
	}

	.table>tbody>tr>td.dotted{
		border: 1px !important;
		border-top-style: dotted !important;
	}

	.table>tbody>tr>td.double{
		border: 1px !important;
		border-top-style: double !important;
	}

</style>
<?php Yii::app()->clientScript->registerScript('select-transfer', "

	var el1 = $('#imprimir');
	var el2 = $('#otro_auto');
	$(el2).css('opacity', '0.3');
	$(el1).focus();

	shortcut.add('Left', function() {
		$(el1).focus();
		$(el1).css('opacity', '1');
        $(el2).css('opacity', '0.3');
	});

    shortcut.add('Right', function() {
        $(el2).focus();
        $(el1).css('opacity', '0.3');
        $(el2).css('opacity', '1');
    });

    $(el1).click(function(){
    	$(el1).css('opacity', '0.3');
        $(el2).css('opacity', '1');
    	$(el2).focus();
    });

"); ?>

<h1>Registro <?php echo $model->placa; ?></h1>

<?php

$model_facturacion = Facturacion::model()->findByPk(1);

$array_attributes = array(
	'hora_entrada',
	'placa',
	'numero_motor',
	'serial',
	'propietario',
	'cedula',
);

if(strlen($model->hora_salida)>0 || $model->plan_idplan!=1) {
	$array_attributes = array(
		'hora_entrada',
		'hora_salida',
		'placa',
		'pago',
	);

}

$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => $array_attributes,
));

$iva = round($model->pago*($model_facturacion->iva/100),2);
$subtotal = $model->pago + $iva;
$subtotal_ajustado = round($subtotal,0)/100;
$subtotal_ajustado = round($subtotal_ajustado,0)*100;
$ajuste = abs($subtotal-$subtotal_ajustado);
$tiempo = $this->tiempoEntreIntervalos($model->hora_entrada, $model->hora_salida);
$tiempo = $this->formatTimeFactura($tiempo);

?>

<a id="otro_auto" href="../" class="btn btn-lg btn-danger pull-right"><i class="fa fa-arrow-left"></i> Otro auto</a>
<span>&nbsp;</span>
<a id="imprimir" href="javascript:window.print()" class="btn btn-lg btn-primary pull-right"><i class="fa fa-print"></i> Imprimir ticket</a>

<div class="imprimir">
<table class="table">
	<tbody>
		<tr><td colspan="2"><?php echo $model_facturacion->nombre_empresa; ?></td></tr>
		<tr><td colspan="2">NIT <?php echo $model_facturacion->nit; ?></td></tr>
		<tr><td><?php echo $model_facturacion->direccion; ?></td><td>TEL <?php echo $model_facturacion->telefono; ?></td></tr>
		<tr class="dotted"><td>Factura No.</td><td><?php echo str_pad($model_facturacion->numero_inicial, 10, '0', STR_PAD_LEFT); ?></td></tr>
		<tr><td>Fecha</td><td><?php echo date('Y-m-d');?></td></tr>
		<tr class="dotted"><td>Concepto</td><td>Parqueo <?php //?></td></tr>
		<tr><td>Placa</td><td><?php echo $model->placa;?></td></tr>
		<tr><td>Entrada</td><td><?php echo substr($model->hora_entrada,0,-3);?></td></tr>
		<tr><td>Salida</td><td><?php echo substr($model->hora_salida,0,-3);?></td></tr>
		<tr><td>Tiempo</td><td><?php echo $tiempo;?></td></tr>
		<tr class="dotted"><td>Descripción</td><td>Subtotal</td></tr>
		<tr class="dotted"><td>Parqueadero</td><td>$ <?php echo number_format($model->pago,2,',','.');?></td></tr>
		<tr><td>IVA <?php echo $model_facturacion->iva; ?>%</td><td>$ <?php echo number_format($iva,2,',','.');?></td></tr>
		<tr><td>Subtotal</td><td class="dotted">$ <?php echo number_format($subtotal,2,',','.');?></td></tr>
		<tr><td>Ajuste</td><td>$ <?php echo number_format($ajuste,2,',','.');?></td></tr>
		<tr><td>TOTAL A PAGAR</td><td class="double">$ <?php echo number_format($subtotal_ajustado,2,',','.'); ?></td></tr>
		<tr><td>Recibido</td><td>$ <?php ?></td></tr>
		<tr><td>Cambio</td><td>$ <?php ?></td></tr>
		<tr><td colspan="2"><?php echo $model_facturacion->texto; ?></td></tr>
	</tbody>
</table>
</div>

