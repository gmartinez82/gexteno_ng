<?php 
require_once "base/BOpeChofer.php"; 
class OpeChofer extends BOpeChofer
{ 
    
    public function control() {
        $error = new DbError();

        // apellido
        if (!Ctrl::esVacio($this->getApellido())) {
            if (Ctrl::esMaxCaracteres(100, $this->getApellido())) {
                $error->addError(505, 'Apellido', 'apellido');
            }
        } else {
            $error->addError(100, 'Apellido', 'apellido');
        }

        // nombre
        if (!Ctrl::esVacio($this->getNombre())) {
            if (Ctrl::esMaxCaracteres(100, $this->getNombre())) {
                $error->addError(505, 'Nombre', 'nombre');
            }
        } else {
            $error->addError(100, 'Nombre', 'nombre');
        }

        // codigo
        if (!Ctrl::esVacio($this->getCodigo())) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, 'Codigo', 'codigo');
            } else {
                $o = self::getOxCodigo($this->getCodigo());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError('Ya existe el codigo en la base de datos', 'Codigo', 'codigo');
                }
            }
        } else {
            //$error->addError(100, 'Codigo', 'codigo');
        }

        return $error;
    }
    
    /*
    Metodo que retorna la descripcion de un objeto
    autor: Pablo Rosen
    return string
     */
    public function getDescripcion() {
        return $this->getApellido() . ', ' . $this->getNombre();
    }    
       
    public function saveDesdeBackend() {

        if ($this->getId() != '') {
            $o = self::getOxId($this->getId());
        }

        parent::saveDesdeBackend();

        // ----------------------------------------------------------------------
        // se inicializa la ubicacion
        // ----------------------------------------------------------------------
        $this->setInicializarChofer();
    }

    public function setInicializarChofer() {
        $us_grupo_codigo = UsGrupo::GRUPO_CHOFER;

        $gral_lenguaje = GralLenguaje::getOxCodigo('es');
        $us_grupo_vendedor = UsGrupo::getOxCodigo($us_grupo_codigo);

        if (trim($this->getCodigo()) != "") {
            $us_usuario = $this->getUsUsuarioXVtaVendedorUsUsuario();
            if (!$us_usuario) {

                $us_usuario = new UsUsuario();
                $us_usuario->setGralLenguajeId($gral_lenguaje->getId());
                $us_usuario->setApellido($this->getApellido());
                $us_usuario->setNombre($this->getNombre());
                $us_usuario->setUsuario(self::PREFIJO_USUARIO . $this->getCodigo());
                $us_usuario->setEmail($this->getEmail());
                $us_usuario->setEstado(1);
                $us_usuario->setActivado(1);
                $us_usuario->setAbsoluto(0);
                $us_usuario->saveDesdeBackend();

                // inicializacion de clave, al crear el usuario: clave = usuario.
                $clave_actual = $us_usuario->getClaveActual();
                if (!$clave_actual) {
                    $us_usuario->setNuevaClave($us_usuario->getUsuario());
                }

                // se vincula el usuario con el vendedor
                $vta_vendedor_us_usuario = new VtaVendedorUsUsuario();
                $vta_vendedor_us_usuario->setUsUsuarioId($us_usuario->getId());
                $vta_vendedor_us_usuario->setVtaVendedorId($this->getId());
                $vta_vendedor_us_usuario->save();

                // se crea el grupo, si no existe
                if (!$us_grupo_vendedor) {
                    $us_grupo_vendedor = new UsGrupo();
                    $us_grupo_vendedor->setDescripcion($us_grupo_codigo);
                    $us_grupo_vendedor->setCodigo($us_grupo_codigo);
                    $us_grupo_vendedor->setEstado(1);
                    $us_grupo_vendedor->save();
                }

                // se vincula el usuario con el grupo
                $us_agrupado = new UsAgrupado();
                $us_agrupado->setUsUsuarioId($us_usuario->getId());
                $us_agrupado->setUsGrupoId($us_grupo_vendedor->getId());
                $us_agrupado->save();
            } else {
                $us_usuario->setApellido($this->getApellido());
                $us_usuario->setNombre($this->getNombre());
                //$us_usuario->setUsuario(self::PREFIJO_USUARIO . $this->getCodigo());
                $us_usuario->setEmail($this->getEmail());
                $us_usuario->setCelular($this->getCelular());
                $us_usuario->saveDesdeBackend();
            }
        }
    }
    
}
?>