<?php

namespace PPE\M2LBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PPE\M2LBundle\Entity\SportRepository")
 */
class Sport
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
     * @ORM\OneToMany(targetEntity="PPE\M2LBundle\Entity\Ligue", mappedBy="userLigue")
     */
    private $ligues;

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
     * @return Sport
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
     * Constructor
     */
    public function __construct()
    {
        $this->ligues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ligues
     *
     * @param \PPE\M2LBundle\Entity\Ligue $ligues
     * @return Sport
     */
    public function addLigue(\PPE\M2LBundle\Entity\Ligue $ligues)
    {
        $this->ligues[] = $ligues;

        return $this;
    }

    /**
     * Remove ligues
     *
     * @param \PPE\M2LBundle\Entity\Ligue $ligues
     */
    public function removeLigue(\PPE\M2LBundle\Entity\Ligue $ligues)
    {
        $this->ligues->removeElement($ligues);
    }

    /**
     * Get ligues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigues()
    {
        return $this->ligues;
    }
}
