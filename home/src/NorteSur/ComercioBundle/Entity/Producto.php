<?php

namespace NorteSur\ComercioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Producto
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
     * @ORM\Column(name="descripcionCorta", type="string", length=100 , nullable=true)
     */
    
    
    
    private  $descripcionCorta;
    
    
              /**
     * @var string
     *
     * @ORM\Column(name="DescripcionLarga" , type="string", length=400 , nullable=true)
     */
    
    
    private $DescripcionLarga;
    
    
              /**
     * @var string
     *
     * @ORM\Column(name="numeroPiezas", type="string", length=400 , nullable=true)
     */
    
    
    
    private $numeroPiezas;
    
    
              /**
     * @var string
     *
     * @ORM\Column(name="numeroBanos", type="string", length=400 , nullable=true)
     */
    
    
    
    private $numeroBanos;
    
    
              /**
     * @var string
     *
     * @ORM\Column(name="metrosConstruidos", type="string", length=400 , nullable=true)
     */
    
    
    
    private $metrosConstruidos;
    
    
    
    
          /**
     * @var string
     *
     * @ORM\Column(name="MetrosTerreno", type="string", length=400 , nullable=true)
     */
    
    
    
    private $MetrosTerreno;
    
    
              /**
     * @var string
     *
     * @ORM\Column(name="TipoPropiedad", type="string", length=400 , nullable=true)
     */
    
    
    
        private $TipoPropiedad;
    
    
              /**
     * @var string
     *
     * @ORM\Column(name="estadoPropiedad", type="string", length=400 , nullable=true)
     */
    
    
       private  $estadoPropiedad;
        
        
       
       
             /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=400 , nullable=true)
     */
    
       
       private $direccion ;
       
    
     /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=400 , nullable=true)
     */
    
    
    private $region;
    
    
              /**
     * @var string
     *
     * @ORM\Column(name="comuna", type="string", length=400 , nullable=true)
     */
    
    
    
    private $comuna;
    
    
            /**
     * @var string
     *
     * @ORM\Column(name="ArriendoVenta", type="string", length=400 , nullable=true)
     */
    
    
    private $ArriendoVenta;
   
    
          /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="string", length=400 , nullable=true)
     */
    
    
    
    private $Precio;
    
    
                /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=100 , nullable=true)
     */
    
    
    
    private $estado;
    
    
     
         /**
     * @ORM\OneToMany(targetEntity="NorteSur\ComercioBundle\Entity\Fotos", mappedBy="producto")
     */
      
    
    
    

    
    private $fotos;
    
    
    
    
     /**
     * @ORM\ManyToOne(targetEntity="NorteSur\ComercioBundle\Entity\Categoria", inversedBy="producto")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    
   
    private $categoria;
  
  
  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fotos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Producto
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
     * @return Producto
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
     * Set descripcionCorta
     *
     * @param string $descripcionCorta
     * @return Producto
     */
    public function setDescripcionCorta($descripcionCorta)
    {
        $this->descripcionCorta = $descripcionCorta;
    
        return $this;
    }

    /**
     * Get descripcionCorta
     *
     * @return string 
     */
    public function getDescripcionCorta()
    {
        return $this->descripcionCorta;
    }

    /**
     * Set DescripcionLarga
     *
     * @param string $descripcionLarga
     * @return Producto
     */
    public function setDescripcionLarga($descripcionLarga)
    {
        $this->DescripcionLarga = $descripcionLarga;
    
        return $this;
    }

    /**
     * Get DescripcionLarga
     *
     * @return string 
     */
    public function getDescripcionLarga()
    {
        return $this->DescripcionLarga;
    }

    /**
     * Set numeroPiezas
     *
     * @param string $numeroPiezas
     * @return Producto
     */
    public function setNumeroPiezas($numeroPiezas)
    {
        $this->numeroPiezas = $numeroPiezas;
    
        return $this;
    }

    /**
     * Get numeroPiezas
     *
     * @return string 
     */
    public function getNumeroPiezas()
    {
        return $this->numeroPiezas;
    }

    /**
     * Set numeroBanos
     *
     * @param string $numeroBanos
     * @return Producto
     */
    public function setNumeroBanos($numeroBanos)
    {
        $this->numeroBanos = $numeroBanos;
    
        return $this;
    }

    /**
     * Get numeroBanos
     *
     * @return string 
     */
    public function getNumeroBanos()
    {
        return $this->numeroBanos;
    }

    /**
     * Set metrosConstruidos
     *
     * @param string $metrosConstruidos
     * @return Producto
     */
    public function setMetrosConstruidos($metrosConstruidos)
    {
        $this->metrosConstruidos = $metrosConstruidos;
    
        return $this;
    }

    /**
     * Get metrosConstruidos
     *
     * @return string 
     */
    public function getMetrosConstruidos()
    {
        return $this->metrosConstruidos;
    }

    /**
     * Set MetrosTerreno
     *
     * @param string $metrosTerreno
     * @return Producto
     */
    public function setMetrosTerreno($metrosTerreno)
    {
        $this->MetrosTerreno = $metrosTerreno;
    
        return $this;
    }

    /**
     * Get MetrosTerreno
     *
     * @return string 
     */
    public function getMetrosTerreno()
    {
        return $this->MetrosTerreno;
    }

    /**
     * Set TipoPropiedad
     *
     * @param string $tipoPropiedad
     * @return Producto
     */
    public function setTipoPropiedad($tipoPropiedad)
    {
        $this->TipoPropiedad = $tipoPropiedad;
    
        return $this;
    }

    /**
     * Get TipoPropiedad
     *
     * @return string 
     */
    public function getTipoPropiedad()
    {
        return $this->TipoPropiedad;
    }

    /**
     * Set estadoPropiedad
     *
     * @param string $estadoPropiedad
     * @return Producto
     */
    public function setEstadoPropiedad($estadoPropiedad)
    {
        $this->estadoPropiedad = $estadoPropiedad;
    
        return $this;
    }

    /**
     * Get estadoPropiedad
     *
     * @return string 
     */
    public function getEstadoPropiedad()
    {
        return $this->estadoPropiedad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Producto
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Producto
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set comuna
     *
     * @param string $comuna
     * @return Producto
     */
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;
    
        return $this;
    }

    /**
     * Get comuna
     *
     * @return string 
     */
    public function getComuna()
    {
        return $this->comuna;
    }

    /**
     * Set ArriendoVenta
     *
     * @param string $arriendoVenta
     * @return Producto
     */
    public function setArriendoVenta($arriendoVenta)
    {
        $this->ArriendoVenta = $arriendoVenta;
    
        return $this;
    }

    /**
     * Get ArriendoVenta
     *
     * @return string 
     */
    public function getArriendoVenta()
    {
        return $this->ArriendoVenta;
    }

    /**
     * Set Precio
     *
     * @param string $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->Precio = $precio;
    
        return $this;
    }

    /**
     * Get Precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->Precio;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Producto
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
     * Add fotos
     *
     * @param \NorteSur\ComercioBundle\Entity\Fotos $fotos
     * @return Producto
     */
    public function addFoto(\NorteSur\ComercioBundle\Entity\Fotos $fotos)
    {
        $this->fotos[] = $fotos;
    
        return $this;
    }

    /**
     * Remove fotos
     *
     * @param \NorteSur\ComercioBundle\Entity\Fotos $fotos
     */
    public function removeFoto(\NorteSur\ComercioBundle\Entity\Fotos $fotos)
    {
        $this->fotos->removeElement($fotos);
    }

    /**
     * Get fotos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotos()
    {
        return $this->fotos;
    }

    /**
     * Set categoria
     *
     * @param \NorteSur\ComercioBundle\Entity\Categoria $categoria
     * @return Producto
     */
    public function setCategoria(\NorteSur\ComercioBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return \NorteSur\ComercioBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}