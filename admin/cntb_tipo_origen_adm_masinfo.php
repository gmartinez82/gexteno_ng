<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_tipo_origen_id = Gral::getVars(2, 'id');
$cntb_tipo_origen = CntbTipoOrigen::getOxId($cntb_tipo_origen_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_tipo_origen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_TIPO_ORIGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_origen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_tipo_origen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_TIPO_ORIGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_origen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_tipo_origen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_ORIGEN_MASINFO_CNTB_DIARIO_ASIENTO')){ ?>
            <li><a href="#tab_cntb_diario_asiento"><?php Lang::_lang('CntbDiarioAsientos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_ORIGEN_MASINFO_CNTB_DIARIO_ASIENTO')){ ?>
	<div id="tab_cntb_diario_asiento" class="bloque-relacion cntb_diario_asiento">
		
            <h4><?php Lang::_lang('CntbDiarioAsiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbTipoOrigen') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_tipo_origen->getCntbDiarioAsientosParaBloqueMasInfo() as $cntb_diario_asiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento/cntb_diario_asiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>">
                                <a href="cntb_diario_asiento_alta.php?id=<?php echo $cntb_diario_asiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_ORIGEN_MASINFO_CNTB_DIARIO_ASIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsiento::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento->getFiltrosArrXCampo('CntbTipoOrigen', 'cntb_tipo_origen_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientos de ') ?> <strong><?php echo($cntb_tipo_origen->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

