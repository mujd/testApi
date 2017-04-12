<?php

namespace GTBundle\Entity;

class Empresa {

    private $id;
    private $rut;
    private $giro;
    private $razonSocial;
    private $direccion;
    private $comuna;
    private $telefono;

    public function getId() {
        return $this->id;
    }

    public function setRut($rut) {
        $this->rut = $rut;
    }

    public function getRut() {
        return $this->rut;
    }

    public function setGiro($giro) {
        $this->giro = $giro;
    }

    public function getGiro() {
        return $this->giro;
    }

    public function setRazonSocial($razonSocial) {
        $this->razonSocial = $razonSocial;
    }

    public function getRazonSocial() {
        return $this->razonSocial;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setComuna($comuna) {
        $this->comuna = $comuna;
    }

    public function getComuna() {
        return $this->comuna;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getTelefono() {
        return $this->telefono;
    }

}
