<?php

namespace NorteSur\ComercioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    
          /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100 , nullable=true)
     */
    
    
    private $nombre;
    
    
      /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date" , nullable=true)
     */
    
    
    private $fecha;
    
    
    
          /**
     * @var string
     *
     * @ORM\Column(name="urlFoto", type="string", length=100 , nullable=true)
     */
    
    private $urlFoto;
    
    
    
    
          /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=100 , nullable=true)
     */
    
   
    private $estado;
    
    
    
    
            /**
     * @ORM\OneToMany(targetEntity="NorteSur\ComercioBundle\Entity\Producto", mappedBy="categoria")
     */
    
    
    
    
    private $producto;
    
    
    
    
    
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->producto = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Categoria
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Categoria
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set urlFoto
     *
     * @param string $urlFoto
     * @return Categoria
     */
    public function setUrlFoto($urlFoto)
    {
        $this->urlFoto = $urlFoto;
    
        return $this;
    }

    /**
     * Get urlFoto
     *
     * @return string 
     */
    public function getUrlFoto()
    {
        return $this->urlFoto;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Categoria
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add producto
     *
     * @param \NorteSur\ComercioBundle\Entity\Producto $producto
     * @return Categoria
     */
    public function addProducto(\NorteSur\ComercioBundle\Entity\Producto $producto)
    {
        $this->producto[] = $producto;
    
        return $this;
    }

    /**
     * Remove producto
     *
     * @param \NorteSur\ComercioBundle\Entity\Producto $producto
     */
    public function removeProducto(\NorteSur\ComercioBundle\Entity\Producto $producto)
    {
        $this->producto->removeElement($producto);
    }

    /**
     * Get producto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducto()
    {
        return $this->producto;
    }
}