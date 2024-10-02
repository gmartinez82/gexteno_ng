<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_stock_resumen_id = Gral::getVars(2, 'id');
$ins_stock_resumen = InsStockResumen::getOxId($ins_stock_resumen_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_stock_resumen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_RESUMEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_resumen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_RESUMEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_resumen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_MASINFO_INS_STOCK_RESUMEN_ESTADO')){ ?>
            <li><a href="#tab_ins_stock_resumen_estado"><?php Lang::_lang('InsStockResumenEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_MASINFO_INS_STOCK_RESUMEN_ESTADO')){ ?>
	<div id="tab_ins_stock_resumen_estado" class="bloque-relacion ins_stock_resumen_estado">
		
            <h4><?php Lang::_lang('InsStockResumenEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsStockResumen') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_stock_resumen->getInsStockResumenEstadosParaBloqueMasInfo() as $ins_stock_resumen_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_resumen_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_resumen_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_resumen_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_resumen_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_resumen_estado->getId() ?>" archivo="ajax/modulos/ins_stock_resumen_estado/ins_stock_resumen_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockResumenEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockResumenEstado') ?>">
                                <a href="ins_stock_resumen_estado_alta.php?id=<?php echo $ins_stock_resumen_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_MASINFO_INS_STOCK_RESUMEN_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_resumen_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockResumenEstado::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_resumen_estado->getFiltrosArrXCampo('InsStockResumen', 'ins_stock_resumen_id') ?>" >
                                <?php Lang::_lang('Ver InsStockResumenEstados de ') ?> <strong><?php echo($ins_stock_resumen->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_resumen_estado_alta.php" >
                            <?php Lang::_lang('Agregar InsStockResumenEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

