<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="tarea", indexes={@ORM\Index(name="proyectos_i", columns={"proyecto"})})
 * @ORM\Entity
 */
class Tarea
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=16777215, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_estimado", type="date", nullable=false)
     */
    private $inicioEstimado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_estimado", type="date", nullable=false)
     */
    private $finEstimado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_real", type="date", nullable=true)
     */
    private $inicioReal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_real", type="date", nullable=true)
     */
    private $finReal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hito", type="boolean", nullable=true)
     */
    private $hito;

    /**
     * @var integer
     *
     * @ORM\Column(name="padre", type="integer", nullable=true)
     */
    private $padre;

    /**
     * @var integer
     *
     * @ORM\Column(name="antecesor", type="integer", nullable=true)
     */
    private $antecesor;

    /**
     * @var integer
     *
     * @ORM\Column(name="sucesor", type="integer", nullable=true)
     */
    private $sucesor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Proyecto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto", referencedColumnName="id")
     * })
     */
    private $proyecto;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tarea
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tarea
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set inicioEstimado
     *
     * @param \DateTime $inicioEstimado
     *
     * @return Tarea
     */
    public function setInicioEstimado($inicioEstimado)
    {
        $this->inicioEstimado = $inicioEstimado;

        return $this;
    }

    /**
     * Get inicioEstimado
     *
     * @return \DateTime
     */
    public function getInicioEstimado()
    {
        return $this->inicioEstimado;
    }

    /**
     * Set finEstimado
     *
     * @param \DateTime $finEstimado
     *
     * @return Tarea
     */
    public function setFinEstimado($finEstimado)
    {
        $this->finEstimado = $finEstimado;

        return $this;
    }

    /**
     * Get finEstimado
     *
     * @return \DateTime
     */
    public function getFinEstimado()
    {
        return $this->finEstimado;
    }

    /**
     * Set inicioReal
     *
     * @param \DateTime $inicioReal
     *
     * @return Tarea
     */
    public function setInicioReal($inicioReal)
    {
        $this->inicioReal = $inicioReal;

        return $this;
    }

    /**
     * Get inicioReal
     *
     * @return \DateTime
     */
    public function getInicioReal()
    {
        return $this->inicioReal;
    }

    /**
     * Set finReal
     *
     * @param \DateTime $finReal
     *
     * @return Tarea
     */
    public function setFinReal($finReal)
    {
        $this->finReal = $finReal;

        return $this;
    }

    /**
     * Get finReal
     *
     * @return \DateTime
     */
    public function getFinReal()
    {
        return $this->finReal;
    }

    /**
     * Set hito
     *
     * @param boolean $hito
     *
     * @return Tarea
     */
    public function setHito($hito)
    {
        $this->hito = $hito;

        return $this;
    }

    /**
     * Get hito
     *
     * @return boolean
     */
    public function getHito()
    {
        return $this->hito;
    }

    /**
     * Set padre
     *
     * @param integer $padre
     *
     * @return Tarea
     */
    public function setPadre($padre)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return integer
     */
    public function getPadre()
    {
        return $this->padre;
    }

    /**
     * Set antecesor
     *
     * @param integer $antecesor
     *
     * @return Tarea
     */
    public function setAntecesor($antecesor)
    {
        $this->antecesor = $antecesor;

        return $this;
    }

    /**
     * Get antecesor
     *
     * @return integer
     */
    public function getAntecesor()
    {
        return $this->antecesor;
    }

    /**
     * Set sucesor
     *
     * @param integer $sucesor
     *
     * @return Tarea
     */
    public function setSucesor($sucesor)
    {
        $this->sucesor = $sucesor;

        return $this;
    }

    /**
     * Get sucesor
     *
     * @return integer
     */
    public function getSucesor()
    {
        return $this->sucesor;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set proyecto
     *
     * @param \AppBundle\Entity\Proyecto $proyecto
     *
     * @return Tarea
     */
    public function setProyecto(\AppBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \AppBundle\Entity\Proyecto
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
}
