<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_nota_credito_concepto_id = Gral::getVars(2, 'id');
$pde_nota_credito_concepto = PdeNotaCreditoConcepto::getOxId($pde_nota_credito_concepto_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito_concepto->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_CREDITO_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_concepto->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_credito_concepto->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_CREDITO_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_concepto->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_credito_concepto->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_CONCEPTO_MASINFO_PDE_NOTA_CREDITO_ITEM')){ ?>
            <li><a href="#tab_pde_nota_credito_item"><?php Lang::_lang('PdeNotaCreditoItem') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_CONCEPTO_MASINFO_PDE_NOTA_CREDITO_ITEM')){ ?>
	<div id="tab_pde_nota_credito_item" class="bloque-relacion pde_nota_credito_item">
		
            <h4><?php Lang::_lang('PdeNotaCreditoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCreditoConcepto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito_concepto->getPdeNotaCreditoItemsParaBloqueMasInfo() as $pde_nota_credito_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_item->getId() ?>" archivo="ajax/modulos/pde_nota_credito_item/pde_nota_credito_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?>">
                                <a href="pde_nota_credito_item_alta.php?id=<?php echo $pde_nota_credito_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_CONCEPTO_MASINFO_PDE_NOTA_CREDITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_item->getFiltrosArrXCampo('PdeNotaCreditoConcepto', 'pde_nota_credito_concepto_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoItems de ') ?> <strong><?php echo($pde_nota_credito_concepto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

