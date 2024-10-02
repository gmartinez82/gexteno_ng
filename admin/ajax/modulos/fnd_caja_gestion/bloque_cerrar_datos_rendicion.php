
<div class='par importe-rendicion'>
    <div class='label'><?php Lang::_lang('Importe a Rendir') ?></div>
    <div class='dato'>
        <?php Gral::_echoImp($importe_total_efectivo_en_caja_a_rendir) ?>
    </div>
</div>

<div class='par importe-billetes'>
    <div class='label'><?php Lang::_lang('Total en Billetes') ?></div>
    <div class='dato'>
        <?php Gral::_echoImp($importe_billetes) ?>
    </div>
</div>

<?php if ($importe_diferencia < 0) { ?>
    <div class='par importe-diferencia'>
        <div class='label'><?php Lang::_lang('Diferencia') ?></div>
        <div class='dato caja-faltante'>
            Faltan <?php Gral::_echoImp(abs($importe_diferencia)) ?>
        </div>
    </div>

    <div class="par">
        <div class="label">Comentarios</div>
        <div class="dato">
            <textarea name='txa_observacion' rows='1' cols='80' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
            <div id='txa_observacion_error' class='label-error' ></div>
        </div>
    </div>

    <div class="mensaje-no-cierre">
        <input type="checkbox" id="chk_registrar_egreso_extraordinario_ajuste" name="chk_registrar_egreso_extraordinario_ajuste" value="1" />
        <label for="chk_registrar_egreso_extraordinario_ajuste">Autorizo Registrar Egreso Extraordinario de Ajuste por <?php Gral::_echoImp(abs($importe_diferencia)) ?></label>
        <div id='chk_registrar_egreso_extraordinario_ajuste_error' class='label-error' ></div>
    </div>

    <div class="botonera">
        <input class="boton cerrar-con-ajuste-egreso" type="button" value="Registrar Cierre de Caja con Ajuste de Egreso por <?php Gral::_echoImp(abs($importe_diferencia)) ?>" />
    </div>

<?php } elseif ($importe_diferencia > 0) { ?>
    <div class='par importe-diferencia'>
        <div class='label'><?php Lang::_lang('Diferencia') ?></div>
        <div class='dato caja-sobrante'>
            Sobran <?php Gral::_echoImp(abs($importe_diferencia)) ?>
        </div>
    </div>

    <div class="par">
        <div class="label">Comentarios</div>
        <div class="dato">
            <textarea name='txa_observacion' rows='1' cols='80' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
            <div id='txa_observacion_error' class='label-error' ></div>
        </div>
    </div>

    <div class="mensaje-no-cierre">
        <input type="checkbox" id="chk_registrar_ingreso_extraordinario_ajuste" name="chk_registrar_ingreso_extraordinario_ajuste" value="1" />
        <label for="chk_registrar_ingreso_extraordinario_ajuste">Autorizo Registrar Ingreso Extraordinario de Ajuste por <?php Gral::_echoImp(abs($importe_diferencia)) ?></label>
        <div id='chk_registrar_ingreso_extraordinario_ajuste_error' class='label-error' ></div>
    </div>

    <div class="botonera">
        <input class="boton cerrar-con-ajuste-ingreso" type="button" value="Registrar Cierre de Caja con Ajuste de Ingreso por <?php Gral::_echoImp(abs($importe_diferencia)) ?>" />
    </div>

<?php } else { ?>
    <div class='par importe-diferencia'>
        <div class='label'><?php Lang::_lang('Diferencia') ?></div>
        <div class='dato caja-exacto'>
            Saldo <?php Gral::_echoImp(abs($importe_diferencia)) ?>
        </div>
    </div>

    <div class="par">
        <div class="label">Comentarios</div>
        <div class="dato">
            <textarea name='txa_observacion' rows='1' cols='80' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
            <div id='txa_observacion_error' class='label-error' ></div>
        </div>
    </div>

    <div class="botonera">
        <input class="boton cerrar" type="button" value="Registrar Cierre de Caja" />
    </div>

<?php } ?>


