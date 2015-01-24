<?php

namespace PPE\UserBundle\Entity;

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
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Merci de renseigner votre prénom.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $first_name;
 
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Merci de renseigner votre nom.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", length=2)
     *
     * @Assert\NotBlank(message="Choisir votre civilite", groups={"Registration", "Profile"})
     */
    protected $gender;

    /**
     * @ORM\Column(type="integer", length=10)
     *
     * @Assert\NotBlank(message="Merci de renseigner votre numéro de téléphone.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=5,
     *     max="15",
     *     minMessage="The number is too short.",
     *     maxMessage="The number is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $phone_number;

    /**
     * @ORM\Column(type="date")
     *
     * @Assert\NotBlank(message="Merci de renseigner votre date de naissance.", groups={"Registration", "Profile"})
     */
    protected $born_date;

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

}
