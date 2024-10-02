<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_arsch01_resp_id = Gral::getVars(2, 'id');
$eku_de_arsch01_resp = EkuDeArsch01Resp::getOxId($eku_de_arsch01_resp_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_arsch01_resp->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_arsch01_resp->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_ARSCH01_RESP_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_arsch01_resp->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_ARSCH01_RESP_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_arsch01_resp->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MASINFO_EKU_DE_ARSCH01_RESP_MENSAJE')){ ?>
            <li><a href="#tab_eku_de_arsch01_resp_mensaje"><?php Lang::_lang('EkuDeArsch01RespMensajes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MASINFO_EKU_DE_ARSCH01_RESP_MENSAJE')){ ?>
	<div id="tab_eku_de_arsch01_resp_mensaje" class="bloque-relacion eku_de_arsch01_resp_mensaje">
		
            <h4><?php Lang::_lang('EkuDeArsch01RespMensaje') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDeArsch01Resp') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de_arsch01_resp->getEkuDeArsch01RespMensajesParaBloqueMasInfo() as $eku_de_arsch01_resp_mensaje){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_arsch01_resp_mensaje->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp_mensaje->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp_mensaje->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_arsch01_resp_mensaje->getId() ?>" archivo="ajax/modulos/eku_de_arsch01_resp_mensaje/eku_de_arsch01_resp_mensaje_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeArsch01RespMensaje') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MENSAJE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeArsch01RespMensaje') ?>">
                                <a href="eku_de_arsch01_resp_mensaje_alta.php?id=<?php echo $eku_de_arsch01_resp_mensaje->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MASINFO_EKU_DE_ARSCH01_RESP_MENSAJE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_arsch01_resp_mensaje){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeArsch01RespMensaje::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_arsch01_resp_mensaje->getFiltrosArrXCampo('EkuDeArsch01Resp', 'eku_de_arsch01_resp_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeArsch01RespMensajes de ') ?> <strong><?php echo($eku_de_arsch01_resp->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_arsch01_resp_mensaje_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeArsch01RespMensaje') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

