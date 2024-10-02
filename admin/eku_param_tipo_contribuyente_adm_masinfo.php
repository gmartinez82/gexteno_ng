<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_contribuyente_id = Gral::getVars(2, 'id');
$eku_param_tipo_contribuyente = EkuParamTipoContribuyente::getOxId($eku_param_tipo_contribuyente_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_contribuyente->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_contribuyente->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_CONTRIBUYENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_contribuyente->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_contribuyente->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_CONTRIBUYENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_contribuyente->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_contribuyente->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_MASINFO_EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA')){ ?>
            <li><a href="#tab_eku_param_tipo_contribuyente_gral_tipo_personeria"><?php Lang::_lang('EkuParamTipoContribuyenteGralTipoPersonerias') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_MASINFO_EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA')){ ?>
	<div id="tab_eku_param_tipo_contribuyente_gral_tipo_personeria" class="bloque-relacion eku_param_tipo_contribuyente_gral_tipo_personeria">
		
            <h4><?php Lang::_lang('EkuParamTipoContribuyenteGralTipoPersoneria') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamTipoContribuyente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_tipo_contribuyente->getEkuParamTipoContribuyenteGralTipoPersoneriasParaBloqueMasInfo() as $eku_param_tipo_contribuyente_gral_tipo_personeria){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getDescripcionVinculante('EkuParamTipoContribuyente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_contribuyente_gral_tipo_personeria->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_contribuyente_gral_tipo_personeria->getId() ?>" archivo="ajax/modulos/eku_param_tipo_contribuyente_gral_tipo_personeria/eku_param_tipo_contribuyente_gral_tipo_personeria_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoContribuyenteGralTipoPersoneria') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoContribuyenteGralTipoPersoneria') ?>">
                                <a href="eku_param_tipo_contribuyente_gral_tipo_personeria_alta.php?id=<?php echo $eku_param_tipo_contribuyente_gral_tipo_personeria->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_MASINFO_EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_contribuyente_gral_tipo_personeria){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoContribuyenteGralTipoPersoneria::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_contribuyente_gral_tipo_personeria->getFiltrosArrXCampo('EkuParamTipoContribuyente', 'eku_param_tipo_contribuyente_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoContribuyenteGralTipoPersonerias de ') ?> <strong><?php echo($eku_param_tipo_contribuyente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_contribuyente_gral_tipo_personeria_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoContribuyenteGralTipoPersoneria') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

