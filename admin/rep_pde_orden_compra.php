<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_pde_orden_compra';
$db_nombre_pagina = 'rep_pde_orden_compra';

if(Gral::esPost()){
	$cmb_pde_centro_pedido_id = Gral::getVars(1, 'cmb_pde_centro_pedido_id', 0);
	$cmb_ins_categoria_id = Gral::getVars(1, 'cmb_ins_categoria_id', 0);
	$txt_descripcion = Gral::getVars(1, 'txt_descripcion', '');
	$cmb_prv_proveedor_id = Gral::getVars(1, 'cmb_prv_proveedor_id', 0);
	$txt_codigo_aoc = Gral::getVars(1, 'txt_codigo_aoc', '');        
	$cmb_pde_oc_tipo_estado_id = Gral::getVars(1, 'cmb_pde_oc_tipo_estado_id', 0);
	$cmb_pde_centro_recepcion_id = Gral::getVars(1, 'cmb_pde_centro_recepcion_id', 0);
	$cmb_actual = Gral::getVars(1, 'cmb_actual', 0);
	$txt_desde = Gral::getVars(1, 'txt_desde');
	$txt_hasta = Gral::getVars(1, 'txt_hasta');
	
	include "rep_pde_orden_compra_xlsx.php";
	
}else{
	$cmb_actual = 1;
	$txt_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -30));
	$txt_hasta = date('d/m/Y');
}

?>
<?php include 'parciales/head.php' ?>


<body>
<?php include 'parciales/encabezado.php' ?>
<?php include 'parciales/user.php' ?>
<?php include 'parciales/mensajes.php' ?>

<div id='menu'><?php include 'parciales/menuh.php' ?></div>

<div id='cuerpo'>
    <div class='adm_cuerpo_titulo'><?php Lang::_lang('PDE Reportes') ?> </div>
      <div class='contenedor central reportes'>
        <br />	
        <br />
        <form id="form_buscador" name="form_buscador" method="post" action="" target="_blank">
        <div class="buscador">
        	<div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Ordenes de Compra Realizados') ?></div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Centro Pedido') ?></div>
            	<div class="dato"><?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', PdeCentroPedido::getPdeCentroPedidosCmb(), $cmb_pde_centro_pedido_id, 'textbox') ?></div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Categoria') ?></div>
            	<div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(),'...'), $cmb_ins_categoria_id, 'textbox') ?></div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Descripcion') ?></div>
            	<div class="dato">
                	<input id="txt_descripcion" name="txt_descripcion" class="textbox" type="text" value="<?php Gral::_echo($txt_descripcion) ?>" size="20" />
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Proveedor') ?></div>
            	<div class="dato">
				<?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmbF(),'...'), $cmb_prv_proveedor_id, 'textbox') ?>
                </div>
            </div>
                
            <div class="par">
            	<div class="label"><?php Lang::_lang('Codigo AOC') ?></div>
            	<div class="dato">
                	<input id="txt_codigo_aoc" name="txt_codigo_aoc" class="textbox" type="text" value="<?php Gral::_echo($txt_codigo_aoc) ?>" size="20" />
                </div>
            </div>
                

            <div class="par">
            	<div class="label"><?php Lang::_lang('Tipo de Estado') ?></div>
            	<div class="dato">
				<?php Html::html_dib_select(1, 'cmb_pde_oc_tipo_estado_id', Gral::getCmbFiltro(PdeOcTipoEstado::getPdeOcTipoEstadosCmb(),'...'), $cmb_pde_oc_tipo_estado_id, 'textbox') ?>
				Sólo Actual <?php Html::html_dib_select(1, 'cmb_actual', GralSiNo::getGralSiNosCmb(), $cmb_actual, 'textbox') ?>
                
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Centro Recepcion') ?></div>
            	<div class="dato">
				<?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(),'...'), $cmb_pde_centro_recepcion_id, 'textbox') ?>
                
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
            	<div class="dato">
                	<input id="txt_desde" name="txt_desde" class="textbox date" type="text" value="<?php Gral::_echo($txt_desde) ?>" size="10" />
					<input type='button' id='cal_txt_desde' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'txt_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_desde'
						});
					</script>
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
            	<div class="dato">
                	<input id="txt_hasta" name="txt_hasta" class="textbox date" type="text" value="<?php Gral::_echo($txt_hasta) ?>" size="10" />
                	<input type='button' id='cal_txt_hasta' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'txt_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_hasta'
						});
					</script>
                </div>
            </div>

            <div class="botonera">
            	<input id="btn_enviar" name="btn_enviar" class="boton" type="submit" value="<?php Lang::_lang('Ver Reporte') ?>" />
            </div>

            
        </div>
        </form>
        

	<br />
	
	</div>

</div>
<div id='pie'><?php include 'parciales/pie.php' ?></div>
<div id="div_contextual"></div>
<div class="div_modal"></div>

</body>
</html>