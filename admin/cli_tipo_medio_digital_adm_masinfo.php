<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_tipo_medio_digital_id = Gral::getVars(2, 'id');
$cli_tipo_medio_digital = CliTipoMedioDigital::getOxId($cli_tipo_medio_digital_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_tipo_medio_digital->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_TIPO_MEDIO_DIGITAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_tipo_medio_digital->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_tipo_medio_digital->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_TIPO_MEDIO_DIGITAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_tipo_medio_digital->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_tipo_medio_digital->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_MEDIO_DIGITAL_MASINFO_CLI_MEDIO_DIGITAL')){ ?>
            <li><a href="#tab_cli_medio_digital"><?php Lang::_lang('CliMedioDigital') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_TIPO_MEDIO_DIGITAL_MASINFO_CLI_MEDIO_DIGITAL')){ ?>
	<div id="tab_cli_medio_digital" class="bloque-relacion cli_medio_digital">
		
            <h4><?php Lang::_lang('CliMedioDigital') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliTipoMedioDigital') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_tipo_medio_digital->getCliMedioDigitalsParaBloqueMasInfo() as $cli_medio_digital){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_medio_digital->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_medio_digital->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_medio_digital->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_medio_digital->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_medio_digital->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_medio_digital->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_medio_digital->getId() ?>" archivo="ajax/modulos/cli_medio_digital/cli_medio_digital_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliMedioDigital') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_MEDIO_DIGITAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliMedioDigital') ?>">
                                <a href="cli_medio_digital_alta.php?id=<?php echo $cli_medio_digital->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_MEDIO_DIGITAL_MASINFO_CLI_MEDIO_DIGITAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_medio_digital){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliMedioDigital::getFiltrosArrGral() ?>&arr=<?php echo $cli_medio_digital->getFiltrosArrXCampo('CliTipoMedioDigital', 'cli_tipo_medio_digital_id') ?>" >
                                <?php Lang::_lang('Ver CliMedioDigitals de ') ?> <strong><?php echo($cli_tipo_medio_digital->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_medio_digital_alta.php" >
                            <?php Lang::_lang('Agregar CliMedioDigital') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

