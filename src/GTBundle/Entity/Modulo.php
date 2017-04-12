<?php

namespace GTBundle\Entity;

class Modulo {

    private $id;
    private $moduloCodigo;
    private $moduloNombre;
    private $moduloObjetivo;
    private $moduloHoras;

    public function getId() {
        return $this->id;
    }

    public function setModuloCodigo($moduloCodigo) {
        $this->moduloCodigo = $moduloCodigo;
    }

    public function getModuloCodigo() {
        return $this->moduloCodigo;
    }

    public function setModuloNombre($moduloNombre) {
        $this->moduloNombre = $moduloNombre;
    }

    public function getModuloNombre() {
        return $this->moduloNombre;
    }

    public function setModuloObjetivo($moduloObjetivo) {
        $this->moduloObjetivo = $moduloObjetivo;
    }

    public function getModuloObjetivo() {
        return $this->moduloObjetivo;
    }

    public function setModuloHoras($moduloHoras) {
        $this->moduloHoras = $moduloHoras;
    }

    public function getModuloHoras() {
        return $this->moduloHoras;
    }

}
