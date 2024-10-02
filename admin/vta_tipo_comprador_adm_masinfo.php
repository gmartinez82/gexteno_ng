<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tipo_comprador_id = Gral::getVars(2, 'id');
$vta_tipo_comprador = VtaTipoComprador::getOxId($vta_tipo_comprador_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tipo_comprador->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_COMPRADOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_comprador->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_comprador->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_COMPRADOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_comprador->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_comprador->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_COMPRADOR_MASINFO_VTA_COMPRADOR')){ ?>
            <li><a href="#tab_vta_comprador"><?php Lang::_lang('VtaComprador') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_COMPRADOR_MASINFO_VTA_COMPRADOR')){ ?>
	<div id="tab_vta_comprador" class="bloque-relacion vta_comprador">
		
            <h4><?php Lang::_lang('VtaComprador') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoComprador') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_comprador->getVtaCompradorsParaBloqueMasInfo() as $vta_comprador){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comprador->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comprador->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comprador->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comprador->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comprador->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comprador->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comprador->getId() ?>" archivo="ajax/modulos/vta_comprador/vta_comprador_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComprador') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMPRADOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComprador') ?>">
                                <a href="vta_comprador_alta.php?id=<?php echo $vta_comprador->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_COMPRADOR_MASINFO_VTA_COMPRADOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comprador){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComprador::getFiltrosArrGral() ?>&arr=<?php echo $vta_comprador->getFiltrosArrXCampo('VtaTipoComprador', 'vta_tipo_comprador_id') ?>" >
                                <?php Lang::_lang('Ver VtaCompradors de ') ?> <strong><?php echo($vta_tipo_comprador->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comprador_alta.php" >
                            <?php Lang::_lang('Agregar VtaComprador') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

