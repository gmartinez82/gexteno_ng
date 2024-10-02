<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pan_tipo_panol_id = Gral::getVars(2, 'id');
$pan_tipo_panol = PanTipoPanol::getOxId($pan_tipo_panol_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_tipo_panol->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_TIPO_PANOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_tipo_panol->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_tipo_panol->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_TIPO_PANOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_tipo_panol->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_tipo_panol->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PAN_TIPO_PANOL_MASINFO_PAN_PANOL')){ ?>
            <li><a href="#tab_pan_panol"><?php Lang::_lang('PanPanol') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_TIPO_PANOL_MASINFO_PAN_PANOL')){ ?>
	<div id="tab_pan_panol" class="bloque-relacion pan_panol">
		
            <h4><?php Lang::_lang('PanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanTipoPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_tipo_panol->getPanPanolsParaBloqueMasInfo() as $pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pan_panol->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pan_panol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pan_panol->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pan_panol->getId() ?>" archivo="ajax/modulos/pan_panol/pan_panol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PanPanol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PanPanol') ?>">
                                <a href="pan_panol_alta.php?id=<?php echo $pan_panol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_TIPO_PANOL_MASINFO_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PanPanol::getFiltrosArrGral() ?>&arr=<?php echo $pan_panol->getFiltrosArrXCampo('PanTipoPanol', 'pan_tipo_panol_id') ?>" >
                                <?php Lang::_lang('Ver PanPanols de ') ?> <strong><?php echo($pan_tipo_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pan_panol_alta.php" >
                            <?php Lang::_lang('Agregar PanPanol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

