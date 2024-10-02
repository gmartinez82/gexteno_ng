<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_factura_concepto_id = Gral::getVars(2, 'id');
$pde_factura_concepto = PdeFacturaConcepto::getOxId($pde_factura_concepto_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura_concepto->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_concepto->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_concepto->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_concepto->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_concepto->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_CONCEPTO_MASINFO_PDE_FACTURA_ITEM')){ ?>
            <li><a href="#tab_pde_factura_item"><?php Lang::_lang('PdeFacturaItems') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_CONCEPTO_MASINFO_PDE_FACTURA_ITEM')){ ?>
	<div id="tab_pde_factura_item" class="bloque-relacion pde_factura_item">
		
            <h4><?php Lang::_lang('PdeFacturaItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFacturaConcepto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura_concepto->getPdeFacturaItemsParaBloqueMasInfo() as $pde_factura_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_item->getId() ?>" archivo="ajax/modulos/pde_factura_item/pde_factura_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaItem') ?>">
                                <a href="pde_factura_item_alta.php?id=<?php echo $pde_factura_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_CONCEPTO_MASINFO_PDE_FACTURA_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_item->getFiltrosArrXCampo('PdeFacturaConcepto', 'pde_factura_concepto_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaItems de ') ?> <strong><?php echo($pde_factura_concepto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

