<?php

namespace GTBundle\Entity;

class Curso {

    private $id;
    private $cursoCodigo;
    private $cursoNombre;
    private $cursoObjetivo;
    private $cursoHoras;
    private $cantidadParticipantes;

    public function getId() {
        return $this->id;
    }

    public function setCursoCodigo($cursoCodigo) {
        $this->cursoCodigo = $cursoCodigo;
    }

    public function getCursoCodigo() {
        return $this->cursoCodigo;
    }

    public function setCursoNombre($cursoNombre) {
        $this->cursoNombre = $cursoNombre;
    }

    public function getCursoNombre() {
        return $this->cursoNombre;
    }

    public function setCursoObjetivo($cursoObjetivo) {
        $this->cursoObjetivo = $cursoObjetivo;
    }

    public function getCursoObjetivo() {
        return $this->cursoObjetivo;
    }

    public function setCursoHoras($cursoHoras) {
        $this->cursoHoras = $cursoHoras;
    }

    public function getCursoHoras() {
        return $this->cursoHoras;
    }

    public function setCantidadParticipantes($cantidadParticipantes) {
        $this->cantidadParticipantes = $cantidadParticipantes;
    }

    public function getCantidadParticipantes() {
        return $this->cantidadParticipantes;
    }

}
