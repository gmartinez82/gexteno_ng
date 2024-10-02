<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_vendedor_valoracion_tipo_item_id = Gral::getVars(2, 'id');
$vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($vta_vendedor_valoracion_tipo_item_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion_tipo_item->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_VALORACION_TIPO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion_tipo_item->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_VALORACION_TIPO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion_tipo_item->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_MASINFO_VTA_VENDEDOR_VALORACION')){ ?>
            <li><a href="#tab_vta_vendedor_valoracion"><?php Lang::_lang('VtaVendedorValoracions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_MASINFO_VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_vta_vendedor_valoracion_tipo_item_vta_vendedor"><?php Lang::_lang('VtaVendedorValoracionTipoItemVtaVendedors') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_MASINFO_VTA_VENDEDOR_VALORACION')){ ?>
	<div id="tab_vta_vendedor_valoracion" class="bloque-relacion vta_vendedor_valoracion">
		
            <h4><?php Lang::_lang('VtaVendedorValoracion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedorValoracionTipoItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor_valoracion_tipo_item->getVtaVendedorValoracionsParaBloqueMasInfo() as $vta_vendedor_valoracion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_valoracion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_valoracion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_valoracion->getId() ?>" archivo="ajax/modulos/vta_vendedor_valoracion/vta_vendedor_valoracion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorValoracion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorValoracion') ?>">
                                <a href="vta_vendedor_valoracion_alta.php?id=<?php echo $vta_vendedor_valoracion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_MASINFO_VTA_VENDEDOR_VALORACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_valoracion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorValoracion::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_valoracion->getFiltrosArrXCampo('VtaVendedorValoracionTipoItem', 'vta_vendedor_valoracion_tipo_item_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorValoracions de ') ?> <strong><?php echo($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_valoracion_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorValoracion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_MASINFO_VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR')){ ?>
	<div id="tab_vta_vendedor_valoracion_tipo_item_vta_vendedor" class="bloque-relacion vta_vendedor_valoracion_tipo_item_vta_vendedor">
		
            <h4><?php Lang::_lang('VtaVendedorValoracionTipoItemVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedorValoracionTipoItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor_valoracion_tipo_item->getVtaVendedorValoracionTipoItemVtaVendedorsParaBloqueMasInfo() as $vta_vendedor_valoracion_tipo_item_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getDescripcionVinculante('VtaVendedorValoracionTipoItem')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion_tipo_item_vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_valoracion_tipo_item_vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion_tipo_item_vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_valoracion_tipo_item_vta_vendedor->getId() ?>" archivo="ajax/modulos/vta_vendedor_valoracion_tipo_item_vta_vendedor/vta_vendedor_valoracion_tipo_item_vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorValoracionTipoItemVtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorValoracionTipoItemVtaVendedor') ?>">
                                <a href="vta_vendedor_valoracion_tipo_item_vta_vendedor_alta.php?id=<?php echo $vta_vendedor_valoracion_tipo_item_vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_MASINFO_VTA_VENDEDOR_VALORACION_TIPO_ITEM_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_valoracion_tipo_item_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorValoracionTipoItemVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_valoracion_tipo_item_vta_vendedor->getFiltrosArrXCampo('VtaVendedorValoracionTipoItem', 'vta_vendedor_valoracion_tipo_item_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorValoracionTipoItemVtaVendedors de ') ?> <strong><?php echo($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_valoracion_tipo_item_vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorValoracionTipoItemVtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

