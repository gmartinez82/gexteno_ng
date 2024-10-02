<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_fp_agrupacion_id = Gral::getVars(2, 'id');
$gral_fp_agrupacion = GralFpAgrupacion::getOxId($gral_fp_agrupacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_fp_agrupacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_FP_AGRUPACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_agrupacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_fp_agrupacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_FP_AGRUPACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_agrupacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_fp_agrupacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_FP_AGRUPACION_MASINFO_CLI_CLIENTE_GRAL_FP_AGRUPACION')){ ?>
            <li><a href="#tab_cli_cliente_gral_fp_agrupacion"><?php Lang::_lang('CliClienteGralFpAgrupacion') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_FP_AGRUPACION_MASINFO_CLI_CLIENTE_GRAL_FP_AGRUPACION')){ ?>
	<div id="tab_cli_cliente_gral_fp_agrupacion" class="bloque-relacion cli_cliente_gral_fp_agrupacion">
		
            <h4><?php Lang::_lang('CliClienteGralFpAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralFpAgrupacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_fp_agrupacion->getCliClienteGralFpAgrupacionsParaBloqueMasInfo() as $cli_cliente_gral_fp_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getDescripcionVinculante('GralFpAgrupacion')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_fp_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_gral_fp_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_fp_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_gral_fp_agrupacion->getId() ?>" archivo="ajax/modulos/cli_cliente_gral_fp_agrupacion/cli_cliente_gral_fp_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteGralFpAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_GRAL_FP_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteGralFpAgrupacion') ?>">
                                <a href="cli_cliente_gral_fp_agrupacion_alta.php?id=<?php echo $cli_cliente_gral_fp_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_AGRUPACION_MASINFO_CLI_CLIENTE_GRAL_FP_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_gral_fp_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteGralFpAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_gral_fp_agrupacion->getFiltrosArrXCampo('GralFpAgrupacion', 'gral_fp_agrupacion_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteGralFpAgrupacions de ') ?> <strong><?php echo($gral_fp_agrupacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_gral_fp_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteGralFpAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

