<?php

namespace PPE\M2LBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;  // Verif de l'unicité de l'entité

/**
 * Actualite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\ActualiteRepository")
 * @UniqueEntity(fields="titre",message="Un article existe déja avec le même titre")
 */
class Actualite
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
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(max=50)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

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
     * @return Actualite
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
     * Set contenu
     *
     * @param string $contenu
     * @return Actualite
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
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
     * @return Actualite
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
