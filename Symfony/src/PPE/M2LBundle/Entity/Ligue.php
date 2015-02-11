<?php

namespace PPE\M2LBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\LigueRepository")
 */
class Ligue
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
     * @var string
     *
     * @ORM\Column(name="url", type="text")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="PPE\M2LBundle\Entity\Sport", inversedBy="ligues")
     * @ORM\JoinColumn(name="sport_id", referencedColumnName="id", nullable=false)
     */
    private $sportLigue;

    /**
     * @ORM\OneToOne(targetEntity="PPE\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userLigue;


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
     * @return Ligue
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
     * @return Ligue
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
     * Set url
     *
     * @param string $url
     * @return Ligue
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Ligue
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
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
     * Set userLigue
     *
     * @param \PPE\UserBundle\Entity\User $userLigue
     * @return Ligue
     */
    public function setUserLigue(\PPE\UserBundle\Entity\User $userLigue = null)
    {
        $this->userLigue = $userLigue;
    
        return $this;
    }

    /**
     * Get userLigue
     *
     * @return \PPE\UserBundle\Entity\User 
     */
    public function getUserLigue()
    {
        return $this->userLigue;
    }

    /**
     * Set sportLigue
     *
     * @param \PPE\M2LBundle\Entity\Sport $sportLigue
     * @return Ligue
     */
    public function setSportLigue(\PPE\M2LBundle\Entity\Sport $sportLigue)
    {
        $this->sportLigue = $sportLigue;

        return $this;
    }

    /**
     * Get sportLigue
     *
     * @return \PPE\M2LBundle\Entity\Sport 
     */
    public function getSportLigue()
    {
        return $this->sportLigue;
    }
}
