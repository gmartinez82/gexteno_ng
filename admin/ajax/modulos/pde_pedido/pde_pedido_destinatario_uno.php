<div class="descripcion"><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></div>
    <div class="emails">
        <?php
        $prv_emails = $prv_proveedor->getPrvEmails(null, null, true); // solo emails activos
        foreach ($prv_emails as $prv_email) {
            ?>
            <div class="email">
                <?php Gral::_echo($prv_email->getDescripcion()) ?>
            </div>
        <?php } ?>
    </div>
    <div class="envio">
        <?php if ($pde_pedido_destinatario) { ?>
            <?php if ($pde_pedido_destinatario->getAvisoEmail()) { ?>
                <?php foreach ($pde_pedido_prv_proveedor_avisados as $pde_pedido_prv_proveedor_avisado) { ?>
                    <div class="email-mensaje enviado" title="Email enviado correctamente">
                        <img src="imgs/icn_email_1.png" width="20" alt="email" align="absmiddle" />
                        <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getEnviadoA()) ?> [<?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getCreado())) ?>]
                    </div>
                <?php } ?>
            <?php } else { ?>
                <img src="imgs/icn_email_0.png" width="20" alt="email" align="absmiddle" />
                <label class="email-mensaje por-enviar">El correo se enviará en breve.</label>

                <?php if (UsCredencial::getEsAcreditado('PDE_PEDIDO_GESTION_FICHA_ACCION_FORZAR_ENVIO')) { ?>
                <label class="accion forzar-envio">Forzar Envio</label>
                <?php } ?>
                
            <?php } ?>
        <?php } else { ?>
            <img src="imgs/icn_email_2.png" width="20" alt="email" align="absmiddle" />
            <label class="email-mensaje no-enviado"> No registrado como destinatario.</label>
        <?php } ?>
    </div>