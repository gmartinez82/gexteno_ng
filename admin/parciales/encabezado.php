<style>
    .mensaje-actualizacion{
        display: none;

        background-color: #f7f194;
        color: #000;

        text-align: left;
        font-size: 13px;

        padding: 12px 35px;
        margin: 0 0 10px 0;

        width:100%;
    }
</style>

<div class="mensaje-actualizacion">
    En el dia de la fecha (<?php echo date('d/m/Y') ?>) se estarán realizando actualizaciones a Gexteno entre las <strong>21:30 y 23:00</strong> hs.<br /> 
    Estas tareas no deberían afectar a la operatividad del sistema, pero si se percibe algún comportamiento extraño en el sistema por favor comunicarse con los responsables de la empresa.<br />
    Muchas gracias y sepan disculpar las molestias ocasionadas.
</div>

<div class="encabezado">
    <br />
    <?php if (Gral::getPath('path_logo_empresa')) { ?>
        <a href="<?php echo Gral::getPathHttp() ?>index.php">
            <img src="<?php echo Gral::getPath('path_http') ?><?php echo Gral::getPath('path_logo_empresa') ?>" class="logo-empresa" alt="logo-empresa" />
        </a>
    <?php } ?>
    <br />
</div>
