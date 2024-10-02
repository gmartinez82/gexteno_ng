<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tipo_vendedor_id = Gral::getVars(2, 'id');
$vta_tipo_vendedor = VtaTipoVendedor::getOxId($vta_tipo_vendedor_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tipo_vendedor->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_VENDEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_vendedor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_vendedor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_VENDEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_vendedor->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_vendedor->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_VENDEDOR_MASINFO_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_vta_vendedor"><?php Lang::_lang('VtaVendedor') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_VENDEDOR_MASINFO_VTA_VENDEDOR')){ ?>
	<div id="tab_vta_vendedor" class="bloque-relacion vta_vendedor">
		
            <h4><?php Lang::_lang('VtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_vendedor->getVtaVendedorsParaBloqueMasInfo() as $vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor->getId() ?>" archivo="ajax/modulos/vta_vendedor/vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedor') ?>">
                                <a href="vta_vendedor_alta.php?id=<?php echo $vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_VENDEDOR_MASINFO_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor->getFiltrosArrXCampo('VtaTipoVendedor', 'vta_tipo_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedors de ') ?> <strong><?php echo($vta_tipo_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

