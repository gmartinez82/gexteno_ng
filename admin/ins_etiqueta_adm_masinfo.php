<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_etiqueta_id = Gral::getVars(2, 'id');
$ins_etiqueta = InsEtiqueta::getOxId($ins_etiqueta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_etiqueta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_ETIQUETA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_etiqueta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_etiqueta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_ETIQUETA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_etiqueta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_etiqueta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_MASINFO_INS_INSUMO_INS_ETIQUETA')){ ?>
            <li><a href="#tab_ins_insumo_ins_etiqueta"><?php Lang::_lang('InsInsumoInsEtiquetas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_MASINFO_VTA_VENDEDOR_DESCUENTO')){ ?>
            <li><a href="#tab_vta_vendedor_descuento"><?php Lang::_lang('VtaVendedorDescuento') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_MASINFO_INS_INSUMO_INS_ETIQUETA')){ ?>
	<div id="tab_ins_insumo_ins_etiqueta" class="bloque-relacion ins_insumo_ins_etiqueta">
		
            <h4><?php Lang::_lang('InsInsumoInsEtiqueta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsEtiqueta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_etiqueta->getInsInsumoInsEtiquetasParaBloqueMasInfo() as $ins_insumo_ins_etiqueta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_ins_etiqueta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_ins_etiqueta->getDescripcionVinculante('InsEtiqueta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_ins_etiqueta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_etiqueta->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_ins_etiqueta->getId() ?>" archivo="ajax/modulos/ins_insumo_ins_etiqueta/ins_insumo_ins_etiqueta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoInsEtiqueta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_ETIQUETA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInsEtiqueta') ?>">
                                <a href="ins_insumo_ins_etiqueta_alta.php?id=<?php echo $ins_insumo_ins_etiqueta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_MASINFO_INS_INSUMO_INS_ETIQUETA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_ins_etiqueta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoInsEtiqueta::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_etiqueta->getFiltrosArrXCampo('InsEtiqueta', 'ins_etiqueta_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoInsEtiquetas de ') ?> <strong><?php echo($ins_etiqueta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_ins_etiqueta_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoInsEtiqueta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_MASINFO_VTA_VENDEDOR_DESCUENTO')){ ?>
	<div id="tab_vta_vendedor_descuento" class="bloque-relacion vta_vendedor_descuento">
		
            <h4><?php Lang::_lang('VtaVendedorDescuento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsEtiqueta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_etiqueta->getVtaVendedorDescuentosParaBloqueMasInfo() as $vta_vendedor_descuento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_descuento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_descuento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_descuento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_descuento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_descuento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_descuento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_descuento->getId() ?>" archivo="ajax/modulos/vta_vendedor_descuento/vta_vendedor_descuento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorDescuento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorDescuento') ?>">
                                <a href="vta_vendedor_descuento_alta.php?id=<?php echo $vta_vendedor_descuento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_MASINFO_VTA_VENDEDOR_DESCUENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_descuento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorDescuento::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_descuento->getFiltrosArrXCampo('InsEtiqueta', 'ins_etiqueta_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorDescuentos de ') ?> <strong><?php echo($ins_etiqueta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_descuento_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorDescuento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

