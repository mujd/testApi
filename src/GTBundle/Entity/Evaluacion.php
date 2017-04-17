<?php

namespace GTBundle\Entity;

class Evaluacion {

    private $id;
    private $codigo;
    private $nombre;
    private $fechaInicio;
    private $fechaTermino;
    private $observacion;
    private $persona;

    public function getId() {
        return $this->id;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function setFechaTermino($fechaTermino) {
        $this->fechaTermino = $fechaTermino;
    }

    public function getFechaTermino() {
        return $this->fechaTermino;
    }

    public function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    public function getObservacion() {
        return $this->observacion;
    }
    public function setPersona($persona) {
        $this->persona = $persona;
    }

    public function getPersona() {
        return $this->persona;
    }

}
