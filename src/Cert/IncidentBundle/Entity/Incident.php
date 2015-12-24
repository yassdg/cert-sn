<?php

namespace Cert\IncidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Incident
 *
 * @ORM\Table(name="incident")
 * @ORM\Entity(repositoryClass="Cert\IncidentBundle\Entity\IncidentRepository")
 */
class Incident
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
     * @ORM\Column(name="type", type="string", length=200)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=40)
     */
    private $categorie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeclaration", type="date")
     */
    private $dateDeclaration;

   


    //definition du controleur
    public function __construct() {
        $this->dateDeclaration = new \DateTime();
    }


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
     * Set type
     *
     * @param string $type
     * @return Incident
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Incident
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
     * Set categorie
     *
     * @param string $categorie
     * @return Incident
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set dateDeclaration
     *
     * @param \DateTime $dateDeclaration
     * @return Incident
     */
    public function setDateDeclaration($dateDeclaration)
    {
        $this->dateDeclaration = $dateDeclaration;

        return $this;
    }

    /**
     * Get dateDeclaration
     *
     * @return \DateTime 
     */
    public function getDateDeclaration()
    {
        return $this->dateDeclaration;
    }

    /**
     * @var \Cert\IncidentBundle\Entity\Visiteur
     */
    private $visiteur;


    /**
     * Set visiteur
     *
     * @param \Cert\IncidentBundle\Entity\Visiteur $visiteur
     * @return Incident
     */
    public function setVisiteur(\Cert\IncidentBundle\Entity\Visiteur $visiteur = null)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @return \Cert\IncidentBundle\Entity\Visiteur 
     */
    public function getVisiteur()
    {
        return $this->visiteur;
    }
    /**
     * @var boolean
     */
    private $traitee;


    /**
     * Set traitee
     *
     * @param boolean $traitee
     * @return Incident
     */
    public function setTraitee($traitee)
    {
        $this->traitee = $traitee;

        return $this;
    }

    /**
     * Get traitee
     *
     * @return boolean 
     */
    public function getTraitee()
    {
        return $this->traitee;
    }
    /**
     * @var \Cert\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Cert\UserBundle\Entity\User $user
     * @return Incident
     */
    public function setUser(\Cert\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Cert\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
