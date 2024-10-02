<?php if (!$error->getExisteError()) { ?>
    <div class="confirmacion">

        <?php if (Gral::getVars(2, "cs", 0, Gral::TIPO_INTEGER) == 1) { ?>
            <div class="guardado"><?php Lang::_lang('Se ha guardado correctamente') ?> </div>
        <?php } ?>

        <?php if (Gral::getVars(2, "cd", 0, Gral::TIPO_INTEGER) == 1) { ?>
            <div class="eliminado"><?php Lang::_lang('Se ha eliminado correctamente') ?> </div>
        <?php } ?>

    </div>
<?php } else { ?>
    <div class="confirmacion">
        <div class="no-guardado"><?php Lang::_lang('No se ha podido guardar, por favor verifique') ?> </div>
    </div>
<?php } ?>
