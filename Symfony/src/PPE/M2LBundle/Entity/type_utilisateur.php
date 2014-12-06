<?php

namespace PPE\M2LBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * type_utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\type_utilisateurRepository")
 */
class type_utilisateur
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
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

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
     * Set type
     *
     * @param integer $type
     * @return type_utilisateur
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set libele
     *
     * @param string $libele
     * @return type_utilisateur
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
