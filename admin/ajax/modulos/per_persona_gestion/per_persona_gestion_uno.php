
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $per_persona->getId() ?>" modulo="per_persona">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="avatar">
        <a href="<?php Gral::_echo($per_persona->getPathImagenPrincipal()) ?>" rel="img-per_persona-<?php $per_persona->getId() ?>">
            <img src='<?php Gral::_echo($per_persona->getPathImagenPrincipal()) ?>' width='40' border='0' />
        </a>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descripcion">
        <?php Gral::_echo($per_persona->getDescripcion()) ?>
    </div>
    <div class="legajo">
        ID <strong><?php Gral::_echo($per_persona->getId()) ?></strong>
    </div>
    <div class="documento">
        <?php Gral::_echo($per_persona->getGralTipoDocumento()->getDescripcion()) ?> <strong><?php Gral::_echo($per_persona->getDocumento()) ?></strong>
    </div>
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="gral_empresa_id">	
        <?php Gral::_echo($per_persona->getGralEmpresa()->getDescripcion()) ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="per_tipo_estado_id">	
        <?php Gral::_echo($per_persona->getPerTipoEstado()->getDescripcion()) ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="per_persona_dedos">	
        <?php foreach($per_persona->getPerPersonaDedos(null, null, true) as $per_persona_dedo){ ?>
            <div class="per-persona-dedo">
                <?php Gral::_echo($per_persona_dedo->getDedoNumero()) ?>
            </div>
        <?php } ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='per_persona_alta.php?id=<?php Gral::_echo($per_persona->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_GESTION_ACCION_ELIMINAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($per_persona->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_GESTION_ACCION_ESTADO')) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($per_persona->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_GESTION_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'><a href='per_persona_imagen_gestor.php?id=<?php Gral::_echo($per_persona->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='23' border='0' /></a></li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_GESTION_ACCION_CREDENCIAL') && false) { ?>
            <li class='adm_botones_accion'><a href='per_persona_credencial.php?id=<?php Gral::_echo($per_persona->getId()) ?>' title='<?php Lang::_lang('Ver Credencial') ?>' target='_blank'><img src='imgs/btn_credencial.png' width='26' border='0' /></a></li>
        <?php } ?>

    </ul>
</td>


