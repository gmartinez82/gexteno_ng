<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_operacion_id = Gral::getVars(2, 'id');
$eku_param_tipo_operacion = EkuParamTipoOperacion::getOxId($eku_param_tipo_operacion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_operacion->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_operacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_operacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_operacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_operacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_operacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_MASINFO_EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE')){ ?>
            <li><a href="#tab_eku_param_tipo_operacion_cli_tipo_cliente"><?php Lang::_lang('EkuParamTipoOperacionCliTipoClientes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_MASINFO_EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE')){ ?>
	<div id="tab_eku_param_tipo_operacion_cli_tipo_cliente" class="bloque-relacion eku_param_tipo_operacion_cli_tipo_cliente">
		
            <h4><?php Lang::_lang('EkuParamTipoOperacionCliTipoCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamTipoOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_tipo_operacion->getEkuParamTipoOperacionCliTipoClientesParaBloqueMasInfo() as $eku_param_tipo_operacion_cli_tipo_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getDescripcionVinculante('EkuParamTipoOperacion')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_operacion_cli_tipo_cliente->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_operacion_cli_tipo_cliente->getId() ?>" archivo="ajax/modulos/eku_param_tipo_operacion_cli_tipo_cliente/eku_param_tipo_operacion_cli_tipo_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoOperacionCliTipoCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoOperacionCliTipoCliente') ?>">
                                <a href="eku_param_tipo_operacion_cli_tipo_cliente_alta.php?id=<?php echo $eku_param_tipo_operacion_cli_tipo_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_MASINFO_EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_operacion_cli_tipo_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoOperacionCliTipoCliente::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_operacion_cli_tipo_cliente->getFiltrosArrXCampo('EkuParamTipoOperacion', 'eku_param_tipo_operacion_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoOperacionCliTipoClientes de ') ?> <strong><?php echo($eku_param_tipo_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_operacion_cli_tipo_cliente_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoOperacionCliTipoCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

