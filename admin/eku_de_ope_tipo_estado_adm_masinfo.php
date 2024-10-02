<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_ope_tipo_estado_id = Gral::getVars(2, 'id');
$eku_de_ope_tipo_estado = EkuDeOpeTipoEstado::getOxId($eku_de_ope_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_ope_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_OPE_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ope_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_ope_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_OPE_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ope_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_ope_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_MASINFO_EKU_DE')){ ?>
            <li><a href="#tab_eku_de"><?php Lang::_lang('EkuDes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_MASINFO_EKU_DE_OPE_ESTADO')){ ?>
            <li><a href="#tab_eku_de_ope_estado"><?php Lang::_lang('EkuDeOpeEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_MASINFO_EKU_DE')){ ?>
	<div id="tab_eku_de" class="bloque-relacion eku_de">
		
            <h4><?php Lang::_lang('EkuDe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDeOpeTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de_ope_tipo_estado->getEkuDesParaBloqueMasInfo() as $eku_de){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de->getId() ?>" archivo="ajax/modulos/eku_de/eku_de_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDe') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDe') ?>">
                                <a href="eku_de_alta.php?id=<?php echo $eku_de->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_MASINFO_EKU_DE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDe::getFiltrosArrGral() ?>&arr=<?php echo $eku_de->getFiltrosArrXCampo('EkuDeOpeTipoEstado', 'eku_de_ope_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver EkuDes de ') ?> <strong><?php echo($eku_de_ope_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_alta.php" >
                            <?php Lang::_lang('Agregar EkuDe') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_MASINFO_EKU_DE_OPE_ESTADO')){ ?>
	<div id="tab_eku_de_ope_estado" class="bloque-relacion eku_de_ope_estado">
		
            <h4><?php Lang::_lang('EkuDeOpeEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDeOpeTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de_ope_tipo_estado->getEkuDeOpeEstadosParaBloqueMasInfo() as $eku_de_ope_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_ope_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_ope_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_ope_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ope_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_ope_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ope_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_ope_estado->getId() ?>" archivo="ajax/modulos/eku_de_ope_estado/eku_de_ope_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeOpeEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeOpeEstado') ?>">
                                <a href="eku_de_ope_estado_alta.php?id=<?php echo $eku_de_ope_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_MASINFO_EKU_DE_OPE_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_ope_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeOpeEstado::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_ope_estado->getFiltrosArrXCampo('EkuDeOpeTipoEstado', 'eku_de_ope_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeOpeEstados de ') ?> <strong><?php echo($eku_de_ope_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_ope_estado_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeOpeEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

