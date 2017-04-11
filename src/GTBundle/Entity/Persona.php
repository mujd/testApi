<?php

namespace GTBundle\Entity;

class Persona {

    private $id;
    private $rut;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $correo;
    private $perfilId;

    public function getId() {
        return $this->id;
    }

    public function setRut($rut) {
        $this->rut = $rut;        
    }

    public function getRut() {
        return $this->rut;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;        
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;        
    }

    public function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    public function setApellidoMaterno($apellidoMaterno) {
        $this->apellidoMaterno = $apellidoMaterno;        
    }

    public function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;        
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setPerfilId($perfilId) {
        $this->perfilId = $perfilId;        
    }

    public function getPerfilId() {
        return $this->perfilId;
    }

}
