<?php

namespace PPE\M2LBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SosPartenaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\SosPartenaireRepository")
 */
class SosPartenaire
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
     * @ORM\ManyToOne(targetEntity="PPE\M2LBundle\Entity\Sport")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sport;

//    /**
//     * @ORM\ManyToOne(targetEntity="PPE\UserBundle\Entity\Utilisateur")
//     * @ORM\JoinColumn(nullable=false)
//     */
//    private $utilisateurSos;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

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
     * Set titre
     *
     * @param string $titre
     * @return SosPartenaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SosPartenaire
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
     * @return SosPartenaire
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
     * @return SosPartenaire
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
     * @return SosPartenaire
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

    /**
     * Set utilisateurSos
     *
     * @param \PPE\M2LBundle\Entity\Utilisateur $utilisateurSos
     * @return SosPartenaire
     */
    public function setUtilisateurSos(\PPE\M2LBundle\Entity\Utilisateur $utilisateurSos)
    {
        $this->utilisateurSos = $utilisateurSos;
    
        return $this;
    }

    /**
     * Get utilisateurSos
     *
     * @return \PPE\M2LBundle\Entity\Utilisateur 
     */
    public function getUtilisateurSos()
    {
        return $this->utilisateurSos;
    }


    /**
     * Set sport
     *
     * @param \PPE\M2LBundle\Entity\Sport $sport
     * @return SosPartenaire
     */
    public function setSport(\PPE\M2LBundle\Entity\Sport $sport)
    {
        $this->sport = $sport;
    
        return $this;
    }

    /**
     * Get sport
     *
     * @return \PPE\M2LBundle\Entity\Sport 
     */
    public function getSport()
    {
        return $this->sport;
    }
}
