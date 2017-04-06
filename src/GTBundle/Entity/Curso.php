<?php

namespace GTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso")
 * @ORM\Entity(repositoryClass="GTBundle\Repository\CursoRepository")
 */
class Curso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cursoCodigo", type="string", length=10)
     */
    private $cursoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="cursoNombre", type="string", length=255)
     */
    private $cursoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cursoObjetivo", type="text")
     */
    private $cursoObjetivo;

    /**
     * @var int
     *
     * @ORM\Column(name="cursoHoras", type="integer")
     */
    private $cursoHoras;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidadParticipantes", type="integer")
     */
    private $cantidadParticipantes;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cursoCodigo
     *
     * @param string $cursoCodigo
     *
     * @return Curso
     */
    public function setCursoCodigo($cursoCodigo)
    {
        $this->cursoCodigo = $cursoCodigo;

        return $this;
    }

    /**
     * Get cursoCodigo
     *
     * @return string
     */
    public function getCursoCodigo()
    {
        return $this->cursoCodigo;
    }

    /**
     * Set cursoNombre
     *
     * @param string $cursoNombre
     *
     * @return Curso
     */
    public function setCursoNombre($cursoNombre)
    {
        $this->cursoNombre = $cursoNombre;

        return $this;
    }

    /**
     * Get cursoNombre
     *
     * @return string
     */
    public function getCursoNombre()
    {
        return $this->cursoNombre;
    }

    /**
     * Set cursoObjetivo
     *
     * @param string $cursoObjetivo
     *
     * @return Curso
     */
    public function setCursoObjetivo($cursoObjetivo)
    {
        $this->cursoObjetivo = $cursoObjetivo;

        return $this;
    }

    /**
     * Get cursoObjetivo
     *
     * @return string
     */
    public function getCursoObjetivo()
    {
        return $this->cursoObjetivo;
    }

    /**
     * Set cursoHoras
     *
     * @param integer $cursoHoras
     *
     * @return Curso
     */
    public function setCursoHoras($cursoHoras)
    {
        $this->cursoHoras = $cursoHoras;

        return $this;
    }

    /**
     * Get cursoHoras
     *
     * @return int
     */
    public function getCursoHoras()
    {
        return $this->cursoHoras;
    }

    /**
     * Set cantidadParticipantes
     *
     * @param integer $cantidadParticipantes
     *
     * @return Curso
     */
    public function setCantidadParticipantes($cantidadParticipantes)
    {
        $this->cantidadParticipantes = $cantidadParticipantes;

        return $this;
    }

    /**
     * Get cantidadParticipantes
     *
     * @return int
     */
    public function getCantidadParticipantes()
    {
        return $this->cantidadParticipantes;
    }
}

