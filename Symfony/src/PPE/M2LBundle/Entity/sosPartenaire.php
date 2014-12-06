<?php

namespace PPE\M2LBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sosPartenaire
 *
 * @ORM\Table("sos_partenaire")
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\sosPartenaireRepository")
 */
class sosPartenaire
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
     * @var utilisateur $utilisateur
     *
     * @ORM\ManyToOne(targetEntity="utilisateur", inversedBy="sosPartenaire", cascade={"persist", "merge"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
    * @ORM\OneToOne(targetEntity="sport", cascade={"persist", "merge"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="titree", type="string", length=255)
     */
    private $titree;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time")
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;


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
     * Set titree
     *
     * @param string $titree
     * @return sosPartenaire
     */
    public function setTitree($titree)
    {
        $this->titree = $titree;
    
        return $this;
    }

    /**
     * Get titree
     *
     * @return string 
     */
    public function getTitree()
    {
        return $this->titree;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return sosPartenaire
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return sosPartenaire
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return sosPartenaire
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    
        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return sosPartenaire
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
