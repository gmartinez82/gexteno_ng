<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$per_persona_imagen_id = Gral::getVars(2, 'per_persona_imagen_id');
$per_persona_imagen = PerPersonaImagen::getOxId($per_persona_imagen_id);
$per_persona = $per_persona_imagen->getPerPersona();

?>
<div class="datos" id="<?php Gral::_echo($per_persona->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PerPersona') ?>: 
        <strong><?php Gral::_echo($per_persona->getId()) ?> - <?php Gral::_echo($per_persona->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="per_persona_alta.php?id=<?php echo($per_persona->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersona') ?>: <strong><?php Gral::_echo($per_persona->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PerPersonaImagen::getFiltrosArrGral() ?>&arr=<?php echo $per_persona_imagen->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PerPersonaImagens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($per_persona->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

