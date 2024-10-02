<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'rep_pde_recepcion';
$db_nombre_pagina = 'rep_pde_recepcion';

if(Gral::esPost()){
	$cmb_pde_centro_pedido_id = Gral::getVars(1, 'cmb_pde_centro_pedido_id', 0);
	$cmb_ins_categoria_id = Gral::getVars(1, 'cmb_ins_categoria_id', 0);
	$cmb_ins_insumo_id = Gral::getVars(1, 'cmb_ins_insumo_id', 0);
	$txt_descripcion = Gral::getVars(1, 'txt_descripcion', '');
	$cmb_prv_proveedor_id = Gral::getVars(1, 'cmb_prv_proveedor_id', 0);
	$cmb_pde_recepcion_tipo_estado_id = Gral::getVars(1, 'cmb_pde_recepcion_tipo_estado_id', 0);
	$cmb_pde_centro_recepcion_id = Gral::getVars(1, 'cmb_pde_centro_recepcion_id', 0);
	$cmb_actual = Gral::getVars(1, 'cmb_actual', 0);
	$txt_compra_desde = Gral::getVars(1, 'txt_compra_desde');
	$txt_compra_hasta = Gral::getVars(1, 'txt_compra_hasta');
	$txt_recepcion_desde = Gral::getVars(1, 'txt_recepcion_desde');
	$txt_recepcion_hasta = Gral::getVars(1, 'txt_recepcion_hasta');
	
	include "rep_pde_recepcion_xlsx.php";
	
}else{
	$cmb_actual = 1;
	$txt_compra_desde = Gral::getFechaToWeb(Date::sumarDias(date('Y-m-d'), -30));
	$txt_compra_hasta = date('d/m/Y');
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
        	<div class="titulo"><?php Lang::_lang('Reporte de') ?> <?php Lang::_lang('Recepciones de Compra') ?></div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Centro Pedido') ?></div>
            	<div class="dato"><?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', PdeCentroPedido::getPdeCentroPedidosCmb(), $cmb_pde_centro_pedido_id, 'textbox') ?></div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Categoria') ?></div>
            	<div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(),'...'), $cmb_ins_categoria_id, 'textbox') ?></div>
            </div>

            <!--<div class="par">
            	<div class="label"><?php Lang::_lang('Insumo') ?></div>
            	<div class="dato"><?php Html::html_dib_select(1, 'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(),'...'), $cmb_ins_insumo_id, 'textbox') ?></div>
            </div>-->

            <div class="par">
            	<div class="label"><?php Lang::_lang('Descripcion') ?></div>
            	<div class="dato">
                	<input id="txt_descripcion" name="txt_descripcion" class="textbox" type="text" value="<?php Gral::_echo($txt_descripcion) ?>" size="20" />
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Proveedor') ?></div>
            	<div class="dato">
				<?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(),'...'), $cmb_prv_proveedor_id, 'textbox') ?>
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Tipo de Estado') ?></div>
            	<div class="dato">
				<?php Html::html_dib_select(1, 'cmb_pde_recepcion_tipo_estado_id', Gral::getCmbFiltro(PdeRecepcionTipoEstado::getPdeRecepcionTipoEstadosCmb(),'...'), $cmb_pde_recepcion_tipo_estado_id, 'textbox') ?>
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
            	<div class="label"><?php Lang::_lang('Fecha Compra Desde') ?></div>
            	<div class="dato">
                	<input id="txt_compra_desde" name="txt_compra_desde" class="textbox date" type="text" value="<?php Gral::_echo($txt_compra_desde) ?>" size="10" />
					<input type='button' id='cal_txt_compra_desde' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'txt_compra_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_compra_desde'
						});
					</script>
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Fecha Compra Hasta') ?></div>
            	<div class="dato">
                	<input id="txt_compra_hasta" name="txt_compra_hasta" class="textbox date" type="text" value="<?php Gral::_echo($txt_compra_hasta) ?>" size="10" />
                	<input type='button' id='cal_txt_compra_hasta' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'txt_compra_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_compra_hasta'
						});
					</script>
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Fecha Rcp Desde') ?></div>
            	<div class="dato">
                	<input id="txt_recepcion_desde" name="txt_recepcion_desde" class="textbox date" type="text" value="<?php Gral::_echo($txt_recepcion_desde) ?>" size="10" />
					<input type='button' id='cal_txt_recepcion_desde' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'txt_recepcion_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_recepcion_desde'
						});
					</script>
                </div>
            </div>

            <div class="par">
            	<div class="label"><?php Lang::_lang('Fecha Rcp Hasta') ?></div>
            	<div class="dato">
                	<input id="txt_recepcion_hasta" name="txt_recepcion_hasta" class="textbox date" type="text" value="<?php Gral::_echo($txt_recepcion_hasta) ?>" size="10" />
                	<input type='button' id='cal_txt_recepcion_hasta' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'txt_recepcion_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_recepcion_hasta'
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