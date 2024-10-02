<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_sucursal_valoracion_tipo_item_id = Gral::getVars(2, 'id');
$gral_sucursal_valoracion_tipo_item = GralSucursalValoracionTipoItem::getOxId($gral_sucursal_valoracion_tipo_item_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion_tipo_item->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_VALORACION_TIPO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_tipo_item->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_valoracion_tipo_item->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_VALORACION_TIPO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_tipo_item->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_valoracion_tipo_item->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_MASINFO_GRAL_SUCURSAL_VALORACION')){ ?>
            <li><a href="#tab_gral_sucursal_valoracion"><?php Lang::_lang('GralSucursalValoracions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_MASINFO_GRAL_SUCURSAL_VALORACION_TIPO_ITEM_GRAL_SUCURSAL')){ ?>
            <li><a href="#tab_gral_sucursal_valoracion_tipo_item_gral_sucursal"><?php Lang::_lang('GralSucursalValoracionTipoItemGralSucursals') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_MASINFO_GRAL_SUCURSAL_VALORACION')){ ?>
	<div id="tab_gral_sucursal_valoracion" class="bloque-relacion gral_sucursal_valoracion">
		
            <h4><?php Lang::_lang('GralSucursalValoracion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralSucursalValoracionTipoItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_sucursal_valoracion_tipo_item->getGralSucursalValoracionsParaBloqueMasInfo() as $gral_sucursal_valoracion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_valoracion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_valoracion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_valoracion->getId() ?>" archivo="ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalValoracion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalValoracion') ?>">
                                <a href="gral_sucursal_valoracion_alta.php?id=<?php echo $gral_sucursal_valoracion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_MASINFO_GRAL_SUCURSAL_VALORACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_valoracion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalValoracion::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_valoracion->getFiltrosArrXCampo('GralSucursalValoracionTipoItem', 'gral_sucursal_valoracion_tipo_item_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalValoracions de ') ?> <strong><?php echo($gral_sucursal_valoracion_tipo_item->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_valoracion_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalValoracion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_MASINFO_GRAL_SUCURSAL_VALORACION_TIPO_ITEM_GRAL_SUCURSAL')){ ?>
	<div id="tab_gral_sucursal_valoracion_tipo_item_gral_sucursal" class="bloque-relacion gral_sucursal_valoracion_tipo_item_gral_sucursal">
		
            <h4><?php Lang::_lang('GralSucursalValoracionTipoItemGralSucursal') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralSucursalValoracionTipoItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_sucursal_valoracion_tipo_item->getGralSucursalValoracionTipoItemGralSucursalsParaBloqueMasInfo() as $gral_sucursal_valoracion_tipo_item_gral_sucursal){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_valoracion_tipo_item_gral_sucursal->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_valoracion_tipo_item_gral_sucursal->getDescripcionVinculante('GralSucursalValoracionTipoItem')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion_tipo_item_gral_sucursal->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_tipo_item_gral_sucursal->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_valoracion_tipo_item_gral_sucursal->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion_tipo_item_gral_sucursal->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_valoracion_tipo_item_gral_sucursal->getId() ?>" archivo="ajax/modulos/gral_sucursal_valoracion_tipo_item_gral_sucursal/gral_sucursal_valoracion_tipo_item_gral_sucursal_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalValoracionTipoItemGralSucursal') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_GRAL_SUCURSAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalValoracionTipoItemGralSucursal') ?>">
                                <a href="gral_sucursal_valoracion_tipo_item_gral_sucursal_alta.php?id=<?php echo $gral_sucursal_valoracion_tipo_item_gral_sucursal->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_MASINFO_GRAL_SUCURSAL_VALORACION_TIPO_ITEM_GRAL_SUCURSAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_valoracion_tipo_item_gral_sucursal){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalValoracionTipoItemGralSucursal::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_valoracion_tipo_item_gral_sucursal->getFiltrosArrXCampo('GralSucursalValoracionTipoItem', 'gral_sucursal_valoracion_tipo_item_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalValoracionTipoItemGralSucursals de ') ?> <strong><?php echo($gral_sucursal_valoracion_tipo_item->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_valoracion_tipo_item_gral_sucursal_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalValoracionTipoItemGralSucursal') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

