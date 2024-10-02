<?php
require_once "base/BUsUsuario.php";

class UsUsuario extends BUsUsuario {

    const SES_CREDENCIALES = 'US_CREDENCIALES';
    const HORA_ENTRADA_SEMANAL = '07:00';
    const HORA_SALIDA_SEMANAL = '22:00';

    public function control() {
        $error = new DbError();

        if (Ctrl::esNull($this->getGralLenguajeId())) {
            $error->addError(100, "Lenguaje", 'gral_lenguaje_id');
        }

        if (Ctrl::esVacio($this->getApellido())) {
            $error->addError(100, "Apellido", 'apellido');
        }

        if (Ctrl::esVacio($this->getNombre())) {
            $error->addError(100, "Nombre", 'nombre');
        }

        if (Ctrl::esVacio($this->getUsuario())) {
            $error->addError(100, "Usuario", 'usuario');
        }
        else {
            $o = UsUsuario::getOxUsuario($this->getUsuario());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError('Ya existe el usuario', "Usuario", 'usuario');
            }
        }

        return $error;
    }

    public function saveDesdeBackend() {

        parent::saveDesdeBackend();

        // inicializacion de clave, al crear el usuario: clave = usuario.
        $clave_actual = $this->getClaveActual();
        if (!$clave_actual) {
            $this->setNuevaClave($this->getUsuario());
        }

        // generar hash
        $hash = $this->getUsuario() . $this->getEmail() . $this->getCreado();
        $hash = trim($hash);
        $hash = md5($hash);
        $this->setHash($hash);
        $this->save();
    }

    /*
      Autor: Pablo Rosen
      Fecha: 04/06/2011
      Return: String

      Metodo que retorna la descripcion de un objeto UsUsuario
     */

    public function getDescripcion() {
        return $this->getApellido() . ', ' . $this->getNombre();
    }

    static function esValido($u, $p) {
        if (trim($u) == '')
            return false;
        if (trim($p) == '')
            return false;

        $usuario_validado = false;
        $clave_validada = false;

        // nuevo criterio de busqueda
        $c = new Criterio();
        $c->add('usuario', $u, Criterio::IGUAL);
        $c->add('estado', 1, Criterio::IGUAL);
        $c->addTabla('us_usuario');
        $c->setCriterios();
        $usuarios = UsUsuario::getUsUsuarios(null, $c);

        foreach ($usuarios as $usuario) {
            $usuario_validado = true;
        }

        if ($usuario) {
            $c = new Criterio();
            $c->add('us_usuario_id', $usuario->getId(), Criterio::IGUAL);
            $c->add('clave', md5($p), Criterio::LIKE);
            $c->add('estado', 1, Criterio::IGUAL);
            $c->addTabla('us_clave');
            $c->setCriterios();
            $claves = UsClave::getUsClaves(null, $c);

            foreach ($claves as $clave) {
                $clave_validada = true;
            }

            if (!$clave_validada) {
                // -------------------------------------------------------------
                // excepcion para un logueo de un superusuario, puede usar su
                // clave para loguearse con otro usuario.
                // Logueo solo valido para usuarios ABSOLUTOS
                // -------------------------------------------------------------
                $c = new Criterio();
                $c->add('us_usuario.absoluto', 1, Criterio::IGUAL);
                $c->add('us_clave.clave', md5($p), Criterio::LIKE);
                $c->add('us_clave.estado', 1, Criterio::IGUAL);
                $c->addTabla('us_clave');
                $c->addRealJoin('us_usuario', 'us_usuario.id', 'us_clave.us_usuario_id');
                $c->setCriterios();
                $claves = UsClave::getUsClaves(null, $c);

                foreach ($claves as $clave) {
                    $clave_validada = true;
                }
            }

            if ($usuario_validado && $clave_validada) {
                return $usuario;
            }
        }
        return false;
    }

    static function autenticado() {
        $usuario_id = Login::autenticado();
        if ($usuario_id) {
            $usuario = new UsUsuario();
            $usuario->setId($usuario_id);

            return $usuario;
        }
        return false;
    }

    /*
      Autor: Pablo Rosen
      Fecha: 15/06/2011
      Return: coleccion de string

      retorna las credenciales del usuario
     */

    public function getCredenciales() {
        $credenciales = array();

        // se recuperan las credenciales asignadas al usuario
        $acreditados = $this->getUsAcreditados();
        foreach ($acreditados as $acreditado) {
            $credenciales[] = $acreditado->getUsCredencial()->getCodigo();
        }

        // se recuperan las credenciales asignadas al grupo del usuario
        $agrupados = $this->getUsAgrupados();
        foreach ($agrupados as $agrupado) {
            $credenciales = array_merge($credenciales, $agrupado->getUsGrupo()->getCredenciales());
        }

        // se borran repetidas
        $credenciales = array_unique($credenciales);
        return $credenciales;
    }

    public function setCredencialesSes() {
        // se setean credenciales en session
        Gral::setSes(self::SES_CREDENCIALES, $this->getCredenciales());

        //Gral::prr($_SESSION[self::SES_CREDENCIALES]);
    }

    public function getCredencialesSes() {
        // se recuperan credenciales de session
        return Gral::getSes(self::SES_CREDENCIALES);
    }

    public function getUsUsuarioDatos() {
        $datos = parent::getUsUsuarioDatos();
        foreach ($datos as $dato) {
            return $dato;
        }
        return new UsUsuarioDato();
    }

    /*
      Autor: Pablo Rosen
      Fecha: 20/01/2011 12:00 hs
      Return: Col UsMensajes

      Metodo que retorna los mensajes no leidos que tiene el usuario
     */

    public function getUsMensajesNoLeidos() {
        $c = new Criterio();
        $c->add('estado', 1, Criterio::IGUAL);
        $c->add('leido', 0, Criterio::IGUAL);
        $c->addOrden('creado', 'desc');
        $c->addTabla('us_mensaje');
        $c->setCriterios();
        return $this->getUsMensajes(null, $c);
    }

    /*
      Autor: Pablo Rosen
      Fecha: 23/01/2011 11:16 hs
      Return: Boolean

      Metodo que permite cambiar la clave de un usuario
     */

    public function setNuevaClave($clave) {

        $ejec = new Ejecucion();
        $sql = 'UPDATE us_clave SET estado = 0 WHERE us_usuario_id = ' . $this->getId();
        $ejec->setSql($sql);
        $ejec->execute();

        $clave_codificada = md5($clave);

        $us_clave = new UsClave();
        $us_clave->setUsUsuarioId($this->getId());
        $us_clave->setClave($clave_codificada);
        $us_clave->setEstado(1);
        $us_clave->save();

        return true;
    }

    /*
      Autor: Pablo Rosen
      Fecha: 23/01/2011 13:07 hs
      Return: Boolean

      Metodo que retorna la Clave actual del usuario.
     */

    public function getClaveActual() {
        $c = new Criterio();
        $c->add('estado', 1, Criterio::IGUAL);
        $c->addTabla('us_clave');
        $c->setCriterios();
        $claves = $this->getUsClaves(null, $c);

        foreach ($claves as $clave) {
            return $clave;
        }
        return false;
    }

    /*
      Autor: Pablo Rosen
      Fecha: 23/01/2011 13:00 hs
      Return: Boolean

      Metodo que controla la vigencia de la clave de un usuario, en el caso de no cumplirse la vigencia le 		agrega un mensaje al usuario.
     */

    public function controlarVigenciaClave() {
        $us_clave = $this->getClaveActual();

        if ($us_clave) {
            $fecha_generada = $us_clave->getCreado();
            $dias = Date::getDiferenciaTiempo('d', $fecha_generada, Gral::getFechaActual());

            $dias_vigencia = Gral::getConfig('clave_vigencia');
            if ($dias_vigencia == 0)
                return false; // si vigencia = 0, se desactiva el control

            $codigo_combinado = UsClave::MSG_COD_VIGENCIA_CLAVE . '_' . $us_clave->getId();
            $avisado = false;
            if ($dias >= $dias_vigencia) {

                $mensajes = $this->getUsMensajes();
                foreach ($mensajes as $mensaje) {
                    if ($mensaje->getCodigo() == $codigo_combinado) {
                        $avisado = true;
                    }
                }

                if (!$avisado) {
                    $us_mensaje = new UsMensaje();
                    $us_mensaje->setUsUsuarioId($this->getId());
                    $us_mensaje->setDescripcion(Lang::_lang('Vigencia de Clave', true));

                    $obs_palabra_dias = Lang::_lang(' dias', true);
                    $obs_linea_1 = Lang::_lang('Por motivos de seguridad, le recomentamos actualizar su clave de acceso al sistema cada ', true);
                    $obs_linea_link = '<a href="us_usuario_clave.php?id=' . $this->getId() . '">' . Lang::_lang('Click aqu� para actualizar su Clave', true) . '</a>';
                    $us_mensaje->setObservacion($obs_linea_1 . $dias_vigencia . $obs_palabra_dias . '. ' . $obs_linea_link);
                    $us_mensaje->setCodigo($codigo_combinado);
                    $us_mensaje->setLeido(0);
                    $us_mensaje->setEstado(1);
                    $us_mensaje->save();
                }
            }
        }
    }

    public function enviarEmailRecuperarClave() {
        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";
        $msg = "
			<strong>Recuperacion de Clave</strong><br />
			Presione aqui para acceder: <a href='" . Gral::getPath('path_http') . "admin/login_recuperar_clave_regenerar.php?uid=" . $this->getId() . "&uus=" . $this->getUsuario() . "&uhash=" . $this->getHash() . "'>Regenerar Clave</a>
		";

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        //$mail->SMTPDebug = 2;
        $mail->CharSet = "UTF-8";

        $mail->Host = Mail::MAIL_SERVIDOR_ENVIO;
        $mail->Username = Mail::MAIL_CASILLA_ENVIO;
        $mail->Password = Mail::MAIL_PASS_ENVIO;
        $mail->Port = Mail::MAIL_PUERTO_ENVIO;

        $mail->From = Mail::MAIL_CASILLA_REMITENTE;
        $mail->FromName = Gral::getConfig('gral_cliente');

        $mail->AddAddress($this->getEmail());

        $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);

        $mail->IsHTML(true);
        $mail->Subject = Gral::getConfig('gral_cliente') . ' - Recuperacion de Clave';

        $mail->Body = $msg;
        $exito = $mail->Send();

        return $exito;
    }

    static function getUsUsuariosCmb($estado = true) {
        $criterio = new Criterio();
        if ($estado) {
            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden(self::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();

        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $col = UsUsuario::getUsUsuarios($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
        }
        return $arr;
    }

    public function getVtaVendedor() {
        $vta_vendedor = $this->getVtaVendedorXVtaVendedorUsUsuario();
        return $vta_vendedor;
    }

    public function getFndCajero() {
        $fnd_cajero = $this->getFndCajeroXFndCajeroUsUsuario();
        return $fnd_cajero;
    }

    public function esUsuarioCajaTesorero() {
        $us_grupo_tesorero = UsGrupo::getOxCodigo('CAJA_TESORERO');

        $c = new Criterio();
        $c->add(UsUsuario::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        if ($us_grupo_tesorero) {
            $c->add(UsGrupo::GEN_ATTR_ID, $us_grupo_tesorero->getId(), Criterio::IGUAL);
        }
        $c->addTabla(UsGrupo::GEN_TABLA);
        $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_GRUPO_ID, UsGrupo::GEN_ATTR_ID);
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_USUARIO_ID);
        $c->setCriterios();

        $us_grupos = UsGrupo::getUsGrupos(null, $c);
        foreach ($us_grupos as $us_grupo) {
            return true;
        }
        return false;
    }

    public function esUsuarioCajaAuditor() {
        $us_grupo_auditor = UsGrupo::getOxCodigo('CAJA_AUDITORIA');

        $c = new Criterio();
        $c->add(UsUsuario::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        if ($us_grupo_auditor) {
            $c->add(UsGrupo::GEN_ATTR_ID, $us_grupo_auditor->getId(), Criterio::IGUAL);
        }
        $c->addTabla(UsGrupo::GEN_TABLA);
        $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_GRUPO_ID, UsGrupo::GEN_ATTR_ID);
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_USUARIO_ID);
        $c->setCriterios();

        $us_grupos = UsGrupo::getUsGrupos(null, $c);
        foreach ($us_grupos as $us_grupo) {
            return true;
        }
        return false;
    }

    public function esUsuarioAuditorVentas() {
        $us_grupo_auditor = UsGrupo::getOxCodigo('VENTAS_AUDITOR');

        $c = new Criterio();
        $c->add(UsUsuario::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        if ($us_grupo_auditor) {
            $c->add(UsGrupo::GEN_ATTR_ID, $us_grupo_auditor->getId(), Criterio::IGUAL);
        }
        $c->addTabla(UsGrupo::GEN_TABLA);
        $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_GRUPO_ID, UsGrupo::GEN_ATTR_ID);
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_USUARIO_ID);
        $c->setCriterios();

        $us_grupos = UsGrupo::getUsGrupos(null, $c);
        foreach ($us_grupos as $us_grupo) {
            return true;
        }
        return false;
    }
    
    public function esUsuarioTelemarketer() {
        $us_grupo_auditor = UsGrupo::getOxCodigo('TELEMARKETER');

        $c = new Criterio();
        $c->add(UsUsuario::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        if ($us_grupo_auditor) {
            $c->add(UsGrupo::GEN_ATTR_ID, $us_grupo_auditor->getId(), Criterio::IGUAL);
        }
        $c->addTabla(UsGrupo::GEN_TABLA);
        $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_GRUPO_ID, UsGrupo::GEN_ATTR_ID);
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_USUARIO_ID);
        $c->setCriterios();

        $us_grupos = UsGrupo::getUsGrupos(null, $c);
        foreach ($us_grupos as $us_grupo) {
            return true;
        }
        return false;
    }

    public function esUsuarioResponsableSucursal() {
        $us_grupo_auditor = UsGrupo::getOxCodigo('SUCURSAL_RESPONSABLE');

        $c = new Criterio();
        $c->add(UsUsuario::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        if ($us_grupo_auditor) {
            $c->add(UsGrupo::GEN_ATTR_ID, $us_grupo_auditor->getId(), Criterio::IGUAL);
        }
        $c->addTabla(UsGrupo::GEN_TABLA);
        $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_GRUPO_ID, UsGrupo::GEN_ATTR_ID);
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_USUARIO_ID);
        $c->setCriterios();

        $us_grupos = UsGrupo::getUsGrupos(null, $c);
        foreach ($us_grupos as $us_grupo) {
            return true;
        }
        return false;
    }
    
    /**
     * Metodo que determina si el usuario es administrador general
     * @return boolean
     */
    public function esAdministradorGeneral() {
        $es = false;

        $us_grupo_buscado = UsGrupo::getOxCodigo('ADMINISTRADOR_GENERAL');
        $us_grupos = $this->getUsGruposXUsAgrupado();

        foreach ($us_grupos as $us_grupo) {
            if ($us_grupo->getId() == $us_grupo_buscado->getId()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Metodo que determina si el usuario tiene acceso total a personas
     * @return boolean
     */
    public function esAccesoTotalPersonas() {
        return true; // solucion temporal, se deberia dinamizar para considerar el alcance del personal
        
        $es = false;

        $us_grupo_buscado = UsGrupo::getOxCodigo('PERSONAS_ACCESO_TOTAL');
        $us_grupos = $this->getUsGruposXUsAgrupado();

        foreach ($us_grupos as $us_grupo) {
            if ($us_grupo->getId() == $us_grupo_buscado->getId()) {
                return true;
            }
        }

        return false;
    }
    
    static function getUsUsuariosConUsMemosCmb($estado = true) {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $criterio = new Criterio();

        if ($estado) {
            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addRealJoin(UsMemo::GEN_TABLA, UsMemo::GEN_ATTR_US_USUARIO_ID, self::GEN_ATTR_ID);
        $criterio->addOrden(self::GEN_ATTR_DESCRIPCION);
        $criterio->setCriterios();

        $col = UsUsuario::getUsUsuarios($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
        }
        return $arr;
    }

    public function getAlcanceClientesLimitado() {
        return false;
    }
    
    /**
     * @creado_por Pablo Rosen, Esteban Martinez
     * @creado 30/08/2017
     * @modificado_por Esteban Martinez
     * @modificado 06/09/2017
     */
    public function getArrayIdsAutorizados($tabla) {
        $us_usuario = $this;
        
        /*
        if($us_usuario_emulado = UsUsuario::getUsUsuarioEmulado()){
            $us_usuario = $us_usuario_emulado;
        }
        */
        
        if (!$us_usuario->getAbsoluto() && !$us_usuario->esAdministradorGeneral() && !$us_usuario->esAccesoTotalPersonas()) {
            // se inicializa array para evitar mostrar cuando no hay aun registros
            $arr_ids[] = 0;

            switch ($tabla) {
                case PerPersona::GEN_TABLA:
                    $criterio = new Criterio();
                    $criterio->add("us_usuario_gral_empresa.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->add("us_usuario_co_sector.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->addTabla(PerPersona::GEN_TABLA);
                    $criterio->addRealJoin("gral_empresa", "gral_empresa.id", "per_persona.gral_empresa_id");
                    $criterio->addRealJoin("co_sector", "co_sector.id", "per_persona.co_sector_id");
                    $criterio->addRealJoin("us_usuario_gral_empresa", "us_usuario_gral_empresa.gral_empresa_id", "gral_empresa.id");
                    $criterio->addRealJoin("us_usuario_co_sector", "us_usuario_co_sector.co_sector_id", "co_sector.id");
                    $criterio->setCriterios();
                    $per_personas = PerPersona::getPerPersonas(null, $criterio);

                    foreach ($per_personas as $per_persona) {
                        $arr_ids[] = $per_persona->getId();
                    }
                    //$arr_ids = array(1886, 1887, 1888, 1889);
                    //$arr_ids = "(".implode(",", $arr_ids).")";
                    return $arr_ids;
                    break;
                case PerMovMovimiento::GEN_TABLA:
                    /*
                      $criterio = new Criterio();
                      $criterio->add("us_usuario_gral_empresa.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                      $criterio->add("us_usuario_co_sector.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                      $criterio->addTabla(PerMovMovimiento::GEN_TABLA);
                      $criterio->addRealJoin("per_persona", "per_persona.id", "per_mov_movimiento.per_persona_id");
                      $criterio->addRealJoin("gral_empresa", "gral_empresa.id", "per_persona.gral_empresa_id");
                      $criterio->addRealJoin("co_sector", "co_sector.id", "per_persona.co_sector_id");
                      $criterio->addRealJoin("us_usuario_gral_empresa", "us_usuario_gral_empresa.gral_empresa_id", "gral_empresa.id");
                      $criterio->addRealJoin("us_usuario_co_sector", "us_usuario_co_sector.co_sector_id", "co_sector.id");
                      $criterio->setCriterios();
                      $per_mov_movimientos = PerMovMovimiento::getPerMovMovimientos(new Paginador(100000, 1), $criterio);
                      foreach($per_mov_movimientos as $per_mov_movimiento){
                      $arr_ids[] = $per_mov_movimiento->getId();
                      }
                     */

                    $sql = "
                        SELECT DISTINCT per_mov_movimiento.id 
                        FROM per_mov_movimiento 
                        JOIN per_persona on (per_persona.id = per_mov_movimiento.per_persona_id) 
                        JOIN gral_empresa on (gral_empresa.id = per_persona.gral_empresa_id) 
                        JOIN co_sector on (co_sector.id = per_persona.co_sector_id) 
                        JOIN us_usuario_gral_empresa on (us_usuario_gral_empresa.gral_empresa_id = gral_empresa.id) 
                        JOIN us_usuario_co_sector on (us_usuario_co_sector.co_sector_id = co_sector.id) 
                        WHERE TRUE 
                        AND us_usuario_gral_empresa.us_usuario_id = " . $us_usuario->getId() . " 
                        AND us_usuario_co_sector.us_usuario_id = " . $us_usuario->getId() . "
                        ORDER BY 1 DESC
                        ;
                        ";
                    $cons = new Consulta();
                    $cons->setSql($sql);
                    $cons->execute();

                    while ($fila = pg_fetch_object($cons->getResultado())) {
                        $arr_ids[] = $fila->id;
                    }
                    //Gral::prr($arr_ids);

                    return $arr_ids;
                    break;
                    
                case CoSector::GEN_TABLA:
                    $criterio = new Criterio();
                    $criterio->add("us_usuario_co_sector.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->addTabla(CoSector::GEN_TABLA);
                    $criterio->addRealJoin("per_persona", "per_persona.co_sector_id", "co_sector.id", "LEFT JOIN");
                    $criterio->addRealJoin("us_usuario_co_sector", "us_usuario_co_sector.co_sector_id", "co_sector.id", "LEFT JOIN");
                    $criterio->setCriterios();
                    $co_sectors = CoSector::getCoSectors(null, $criterio);

                    foreach ($co_sectors as $co_sector) {
                        $arr_ids[] = $co_sector->getId();
                    }
                    return $arr_ids;
                    break;
                    
                case CoCentroOperativo::GEN_TABLA:
                    $criterio = new Criterio();
                    $criterio->add("us_usuario_co_sector.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->addTabla(CoCentroOperativo::GEN_TABLA);
                    $criterio->addRealJoin("co_sector", "co_sector.co_centro_operativo_id", "co_centro_operativo.id", "LEFT JOIN");
                    $criterio->addRealJoin("per_persona", "per_persona.co_sector_id", "co_sector.id", "LEFT JOIN");
                    $criterio->addRealJoin("us_usuario_co_sector", "us_usuario_co_sector.co_sector_id", "co_sector.id", "LEFT JOIN");
                    $criterio->setCriterios();
                    $co_centro_operativos = CoCentroOperativo::getCoCentroOperativos(null, $criterio);
                    foreach ($co_centro_operativos as $co_centro_operativo) {
                        $arr_ids[] = $co_centro_operativo->getId();
                    }
                    return $arr_ids;
                    break;
                    
                case OsOrdenServicio::GEN_TABLA:

                    $criterio = new Criterio();
                    $criterio->add("us_usuario_gral_empresa.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->add("us_usuario_co_sector.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->addTabla(OsOrdenServicio::GEN_TABLA);
                    $criterio->addRealJoin("per_persona", "per_persona.id", "os_orden_servicio.per_persona_id");
                    $criterio->addRealJoin("gral_empresa", "gral_empresa.id", "per_persona.gral_empresa_id");
                    $criterio->addRealJoin("co_sector", "co_sector.id", "per_persona.co_sector_id");
                    $criterio->addRealJoin("us_usuario_gral_empresa", "us_usuario_gral_empresa.gral_empresa_id", "gral_empresa.id");
                    $criterio->addRealJoin("us_usuario_co_sector", "us_usuario_co_sector.co_sector_id", "co_sector.id");
                    $criterio->setCriterios();
                    $os_orden_servicios = OsOrdenServicio::getOsOrdenServicios(null, $criterio);
                    foreach ($os_orden_servicios as $os_orden_servicio) {
                        $arr_ids[] = $os_orden_servicio->getId();
                    }
                    return $arr_ids;
                    break;

                case GralEmpresa::GEN_TABLA:
                    $criterio = new Criterio();
                    $criterio->add("us_usuario.id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->addTabla(GralEmpresa::GEN_TABLA);
                    $criterio->addRealJoin("us_usuario_gral_empresa", "us_usuario_gral_empresa.gral_empresa_id", "gral_empresa.id", "LEFT JOIN");
                    $criterio->addRealJoin("us_usuario", "us_usuario.id", "us_usuario_gral_empresa.us_usuario_id", "LEFT JOIN");
                    $criterio->setCriterios();
                    $gral_empresas = GralEmpresa::getGralEmpresas(null, $criterio);

                    foreach ($gral_empresas as $gral_empresa) {
                        $arr_ids[] = $gral_empresa->getId();
                    }
                    return $arr_ids;
                    break;
                    
                case PlnJornada::GEN_TABLA:
                    $criterio = new Criterio();
                    $criterio->add("us_usuario_pln_jornada.us_usuario_id", $us_usuario->getId(), Criterio::IGUAL);
                    $criterio->addTabla(PlnJornada::GEN_TABLA);
                    $criterio->addRealJoin("us_usuario_pln_jornada", "us_usuario_pln_jornada.pln_jornada_id", "pln_jornada.id");
                    $criterio->setCriterios();
                    $pln_jornadas = PlnJornada::getPlnJornadas(null, $criterio);
                    
                    foreach ($pln_jornadas as $pln_jornada){
                        $arr_ids[] = $pln_jornada->getId();
                    }
                    return $arr_ids;
                    break;
                    
            }
        }
        return false;
    }
    /**
     * @creado_por Esteban Martinez, Pablo Rosen
     * @creado 30/08/2017
     * @modificado_por Esteban Martinez
     * @modificado 06/09/2017
     */
    public function getFiltrosEspeciales($tabla, $criterio) {
        switch ($tabla) {
            case PerPersona::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);
                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(PerPersona::GEN_ATTR_ID, $arr_string, Criterio::IN, 'FILTROS_REGISTRO_USUARIO');
                    $criterio->addFinSubconsulta();
                }
                break;

            case PerMovMovimiento::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);
                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(PerMovMovimiento::GEN_ATTR_ID, $arr_string, Criterio::IN);
                    $criterio->addFinSubconsulta();
                    //$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_movimiento.per_persona_id', 'LEFT JOIN');
                }
                break;

            case OsOrdenServicio::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);

                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(OsOrdenServicio::GEN_ATTR_ID, $arr_string, Criterio::IN);
                    $criterio->addFinSubconsulta();
                    //$criterio->addRealJoin('per_persona', 'per_persona.id', 'os_orden_servicio.per_persona_id', 'LEFT JOIN');
                }
                break;
                
            case OsTipo::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);

                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(OsTipo::GEN_ATTR_ID, $arr_string, Criterio::IN);
                    $criterio->addFinSubconsulta();
                    //$criterio->addRealJoin('per_persona', 'per_persona.id', 'os_orden_servicio.per_persona_id', 'LEFT JOIN');
                }
                break;

            case GralEmpresa::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);
                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(GralEmpresa::GEN_ATTR_ID, $arr_string, Criterio::IN);
                    $criterio->addFinSubconsulta();
                }
                break;            
                
            case GralSector::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);
                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(GralSector::GEN_ATTR_ID, $arr_string, Criterio::IN);
                    $criterio->addFinSubconsulta();
                }
                break;
                
            case GralPuesto::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);
                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(GralPuesto::GEN_ATTR_ID, $arr_string, Criterio::IN);
                    $criterio->addFinSubconsulta();
                }
                break;

            case PlnJornada::GEN_TABLA:
                $arr = $this->getArrayIdsAutorizados($tabla);
                if (is_array($arr)) {
                    $arr_string = "(" . implode(",", $arr) . ")";
                    $criterio->addInicioSubconsulta();
                    $criterio->add(PlnJornada::GEN_ATTR_ID, $arr_string, Criterio::IN);
                    $criterio->addFinSubconsulta();
                }
                break;
                
        }
        return $criterio;
    }  

}

?>