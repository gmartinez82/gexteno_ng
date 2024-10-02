<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$per_persona_id = Gral::getVars(2, 'per_persona_id');
$per_persona = PerPersona::getOxId($per_persona_id);
$gral_sexo = $per_persona->getGralSexo();

?>
<div class="datos" id="<?php Gral::_echo($gral_sexo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralSexo') ?>: 
        <strong><?php Gral::_echo($gral_sexo->getId()) ?> - <?php Gral::_echo($gral_sexo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_sexo_alta.php?id=<?php echo($gral_sexo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSexo') ?>: <strong><?php Gral::_echo($gral_sexo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PerPersona::getFiltrosArrGral() ?>&arr=<?php echo $per_persona->getFiltrosArrXCampo('GralSexo', 'gral_sexo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PerPersonas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_sexo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

