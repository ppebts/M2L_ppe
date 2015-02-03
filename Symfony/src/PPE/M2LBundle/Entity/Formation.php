<?php

namespace PPE\M2LBundle\Entity;
use PPE\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $debut;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbparticipants", type="integer")
     */
    private $nbparticipants;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbinscrits", type="integer")
     */
    private $nbinscrits;

    /**
     * @ORM\ManyToMany(targetEntity="PPE\UserBundle\Entity\User", inversedBy="formations", cascade={"persist"})
     */
    private $utilisateurs;

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
     * Set nom
     *
     * @param string $nom
     * @return Formation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Formation
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
     * Set duree
     *
     * @param \DateTime $duree
     * @return Formation
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     * @return Formation
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;
    
        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime 
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Formation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Formation
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get nbparticipants
     *
     * @return integer 
     */
    public function getNbparticipants()
    {
        return $this->nbparticipants;
    }
    
    /**
     * Set nbparticipants
     *
     * @param integer $nbparticipants
     * @return Formation
     */
    public function setNbparticipants($nbparticipants)
    {
        $this->nbparticipants = $nbparticipants;
    
        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nbinscrits = 0;
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * Add utilisateurs
     *
     * @param \PPE\UserBundle\Entity\User $utilisateurs
     * @return Formation
     */
    public function addUtilisateur(\PPE\UserBundle\Entity\User $utilisateurs)
    {
        $this->utilisateurs[] = $utilisateurs;
    
        return $this;
    }

    /**
     * Remove utilisateurs
     *
     * @param \PPE\UserBundle\Entity\User $utilisateurs
     */
    public function removeUtilisateur(\PPE\UserBundle\Entity\User $utilisateurs)
    {
        $this->utilisateurs->removeElement($utilisateurs);
    }

    /**
     * Set nbinscrits
     *
     * @param integer $nbinscrits
     * @return Formation
     */
    public function setNbinscrits($nbinscrits)
    {
        $this->nbinscrits = $nbinscrits;

        return $this;
    }

    /**
     * Get nbinscrits
     *
     * @return integer 
     */
    public function getNbinscrits()
    {
        return $this->nbinscrits;
    }
}
