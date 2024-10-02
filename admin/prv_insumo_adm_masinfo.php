<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_insumo_id = Gral::getVars(2, 'id');
$prv_insumo = PrvInsumo::getOxId($prv_insumo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsMatriz') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_insumo->getInsMatriz()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_insumo->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Claves') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_insumo->getClaves())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_insumo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_INSUMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_insumo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_INSUMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_insumo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PRV_INSUMO_COSTO')){ ?>
            <li><a href="#tab_prv_insumo_costo"><?php Lang::_lang('PrvInsumoCosto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PDE_OC_AGRUPACION_ITEM')){ ?>
            <li><a href="#tab_pde_oc_agrupacion_item"><?php Lang::_lang('PdeOcAgrupacionItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PRV_INSUMO_COSTO')){ ?>
	<div id="tab_prv_insumo_costo" class="bloque-relacion prv_insumo_costo">
		
            <h4><?php Lang::_lang('PrvInsumoCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_insumo->getPrvInsumoCostosParaBloqueMasInfo() as $prv_insumo_costo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_insumo_costo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_insumo_costo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_insumo_costo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_insumo_costo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_insumo_costo->getId() ?>" archivo="ajax/modulos/prv_insumo_costo/prv_insumo_costo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvInsumoCosto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvInsumoCosto') ?>">
                                <a href="prv_insumo_costo_alta.php?id=<?php echo $prv_insumo_costo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PRV_INSUMO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_insumo_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvInsumoCosto::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo_costo->getFiltrosArrXCampo('PrvInsumo', 'prv_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PrvInsumoCostos de ') ?> <strong><?php echo($prv_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_insumo_costo_alta.php" >
                            <?php Lang::_lang('Agregar PrvInsumoCosto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PDE_OC_AGRUPACION_ITEM')){ ?>
	<div id="tab_pde_oc_agrupacion_item" class="bloque-relacion pde_oc_agrupacion_item">
		
            <h4><?php Lang::_lang('PdeOcAgrupacionItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_insumo->getPdeOcAgrupacionItemsParaBloqueMasInfo() as $pde_oc_agrupacion_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_agrupacion_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_agrupacion_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_agrupacion_item->getId() ?>" archivo="ajax/modulos/pde_oc_agrupacion_item/pde_oc_agrupacion_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacionItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacionItem') ?>">
                                <a href="pde_oc_agrupacion_item_alta.php?id=<?php echo $pde_oc_agrupacion_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PDE_OC_AGRUPACION_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacionItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion_item->getFiltrosArrXCampo('PrvInsumo', 'prv_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacionItems de ') ?> <strong><?php echo($prv_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_agrupacion_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcAgrupacionItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_insumo->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc->getId() ?>" archivo="ajax/modulos/pde_oc/pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOc') ?>">
                                <a href="pde_oc_alta.php?id=<?php echo $pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PrvInsumo', 'prv_insumo_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($prv_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

