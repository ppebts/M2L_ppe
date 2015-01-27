<?php

namespace PPE\UserBundle\Entity;

use PPE\M2LBundle\Entity\Annonce;
use PPE\M2LBundle\Entity\Formation;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

    /**
     * @ORM\OneToMany(targetEntity="PPE\M2LBundle\Entity\Annonce", mappedBy="utilisateur_id", cascade={"remove"})
     */
    protected $annonces;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $first_name;
 
    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", length=2)
     *
     */
    protected $gender;

    /**
     * @ORM\Column(type="string", length=10)
     *
     *
     */
    protected $phone_number;

    /**
     * @ORM\Column(type="date")
     *
     *
     */
    protected $born_date;

    /**
     * @ORM\OneToOne(targetEntity="PPE\M2LBundle\Entity\Ligue", mappedBy="userLigue")
     */
     private $ligue;

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
     * Set first_name
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set phone_number
     *
     * @param integer $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;
    
        return $this;
    }

    /**
     * Get phone_number
     *
     * @return integer 
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set born_date
     *
     * @param \DateTime $bornDate
     * @return User
     */
    public function setBornDate($bornDate)
    {
        $this->born_date = $bornDate;
    
        return $this;
    }

    /**
     * Get born_date
     *
     * @return \DateTime 
     */
    public function getBornDate()
    {
        return $this->born_date;
    }

    public function setEmail($email){
        parent::setEmail($email);
        $this->setUsername($email);
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->annonces = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();
        // your own logic
        $this->roles = array('ROLE_USER');
    }

    /**
     * Add annonces
     *
     * @param \PPE\M2LBundle\Entity\Annonce $annonces
     * @return User
     */
    public function addAnnonce(\PPE\M2LBundle\Entity\Annonce $annonces)
    {
        $this->annonces[] = $annonces;
    
        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \PPE\M2LBundle\Entity\Annonce $annonces
     */
    public function removeAnnonce(\PPE\M2LBundle\Entity\Annonce $annonces)
    {
        $this->annonces->removeElement($annonces);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * Set ligue
     *
     * @param \PPE\M2LBundle\Entity\Ligue $ligue
     * @return User
     */
    public function setLigue(\PPE\M2LBundle\Entity\Ligue $ligue = null)
    {
        $this->ligue = $ligue;
    
        return $this;
    }

    /**
     * Get ligue
     *
     * @return \PPE\M2LBundle\Entity\Ligue 
     */
    public function getLigue()
    {
        return $this->ligue;
    }
}
