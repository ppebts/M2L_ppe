<?php

namespace PPE\M2LBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUtilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\TypeUtilisateurRepository")
 */
class TypeUtilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libele", type="string", length=255)
     */
    private $libele;

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
     * Set libele
     *
     * @param string $libele
     * @return TypeUtilisateur
     */
    public function setLibele($libele)
    {
        $this->libele = $libele;
    
        return $this;
    }

    /**
     * Get libele
     *
     * @return string 
     */
    public function getLibele()
    {
        return $this->libele;
    }
}
