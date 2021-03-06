<?php

namespace PPE\M2LBundle\Entity;
use PPE\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;  // Verif de l'unicité de l'entité (ligne 13)
use PPE\M2LBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\AnnonceRepository")
 * @UniqueEntity(fields="titre",message="Une annonce existe déja avec le même titre")
 */
class Annonce
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
     * @ORM\ManyToOne(targetEntity="PPE\UserBundle\Entity\User", inversedBy="annonces")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id", nullable=false)
     */
    private $utilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(min=5)
     * @Assert\Length(max=50)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     * @Assert\Length(max=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     * @Assert\Type(type="numeric", message="Veuillez saisir des chiffres")
     */
    private $prix;

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
     * @return Annonce
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
     * @return Annonce
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
     * Set prix
     *
     * @param integer $prix
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set utilisateur
     *
     * @param \PPE\UserBundle\Entity\User $utilisateur
     * @return Annonce
     */
    public function setUtilisateur(\PPE\UserBundle\Entity\User $utilisateur)
    {
        $this->utilisateur = $utilisateur;
    
        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \PPE\UserBundle\Entity\User 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
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
     * @return Annonce
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
