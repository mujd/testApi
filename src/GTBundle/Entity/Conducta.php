<?php

namespace GTBundle\Entity;

class Conducta {

    private $id;
    private $nombre;
    private $definicion;
    private $indicador;

    public function getId() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setDefinicion($definicion) {
        $this->definicion = $definicion;
    }

    public function getDefinicion() {
        return $this->definicion;
    }
    public function setIndicador($indicador) {
        $this->indicador = $indicador;
    }

    public function getIndicador() {
        return $this->indicador;
    }

    public function __toString() {
        return $this->getNombre();
    }

}
