<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_naturaleza_receptor_id = Gral::getVars(2, 'id');
$eku_param_tipo_naturaleza_receptor = EkuParamTipoNaturalezaReceptor::getOxId($eku_param_tipo_naturaleza_receptor_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_naturaleza_receptor->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_naturaleza_receptor->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_naturaleza_receptor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_naturaleza_receptor->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_MASINFO_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA')){ ?>
            <li><a href="#tab_eku_param_tipo_naturaleza_receptor_gral_condicion_iva"><?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIvas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_MASINFO_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA')){ ?>
	<div id="tab_eku_param_tipo_naturaleza_receptor_gral_condicion_iva" class="bloque-relacion eku_param_tipo_naturaleza_receptor_gral_condicion_iva">
		
            <h4><?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIva') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_tipo_naturaleza_receptor->getEkuParamTipoNaturalezaReceptorGralCondicionIvasParaBloqueMasInfo() as $eku_param_tipo_naturaleza_receptor_gral_condicion_iva){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getDescripcionVinculante('EkuParamTipoNaturalezaReceptor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId() ?>" archivo="ajax/modulos/eku_param_tipo_naturaleza_receptor_gral_condicion_iva/eku_param_tipo_naturaleza_receptor_gral_condicion_iva_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIva') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIva') ?>">
                                <a href="eku_param_tipo_naturaleza_receptor_gral_condicion_iva_alta.php?id=<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_MASINFO_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_GRAL_CONDICION_IVA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_naturaleza_receptor_gral_condicion_iva){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoNaturalezaReceptorGralCondicionIva::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getFiltrosArrXCampo('EkuParamTipoNaturalezaReceptor', 'eku_param_tipo_naturaleza_receptor_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoNaturalezaReceptorGralCondicionIvas de ') ?> <strong><?php echo($eku_param_tipo_naturaleza_receptor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_naturaleza_receptor_gral_condicion_iva_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoNaturalezaReceptorGralCondicionIva') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

