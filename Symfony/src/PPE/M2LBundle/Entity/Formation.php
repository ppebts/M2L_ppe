<?php

namespace PPE\M2LBundle\Entity;
use PPE\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;  // Verif de l'unicité de l'entité 
use PPE\M2LBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\FormationRepository")
 * @UniqueEntity(fields="nom",message="Une formation similaire existe déja")
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
     * @Assert\Length(max=35)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\Length(max=550)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer")
     * @Assert\Type(type="numeric", message="Veuillez saisir des chiffres")
     */
    private $duree;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \Time
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\OneToOne(targetEntity="PPE\M2LBundle\Entity\Image", cascade={"persist"})
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $finished = false;
 
    private $uploaded_image;
 
    /**
     * @var integer
     *
     * @ORM\Column(name="nbparticipants", type="integer")
     * @Assert\Type(type="numeric", message="Veuillez saisir des chiffres")
     */
    private $nbparticipants;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbinscrits", type="integer")
     */
    private $nbinscrits;

    /**
     * @ORM\ManyToMany(targetEntity="PPE\UserBundle\Entity\User", inversedBy="formations")
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

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Formation
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
     * Set time
     *
     * @param \DateTime $time
     * @return Formation
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     * @return Encodejob
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;
    
        return $this;
    }
 
    /**
     * Get finished
     *
     * @return boolean 
     */
    public function getFinished()
    {
        return $this->finished;
    }
 
    /**
     * Set image
     *
     * @param \PPE\M2LBundle\Entity\Image $image
     * @return Formation
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }
 
    /**
     * Get image
     *
     * @return \PPE\M2LBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

 public function setUploadedImage(UploadedFile $uploaded_image = null)
    {
        $this->uploaded_image = $uploaded_image;
        return $this;
    }
 
    public function getUploadedImage()
    {
        return $this->uploaded_image;
    }
}
