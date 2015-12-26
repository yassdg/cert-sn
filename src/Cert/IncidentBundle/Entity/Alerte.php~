<?php

namespace Cert\IncidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Cert\UserBundle\Entity\User;

/**
 * Alerte
 */
class Alerte
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $systemeAffecte;

    /**
     * @var string
     */
    private $vuDensemble;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $impact;

    /**
     * @var string
     */
    private $solution;

    /**
     * @var array
     */
    private $reference;

    /**
     * @var array
     */
    private $revisions;

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
     * @var \Cert\UserBundle\Entity\User
     */
    private $user;

    /**
     * Set titre
     *
     * @param string $titre
     * @return Alerte
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
     * Set systemeAffecte
     *
     * @param string $systemeAffecte
     * @return Alerte
     */
    public function setSystemeAffecte($systemeAffecte)
    {
        $this->systemeAffecte = $systemeAffecte;

        return $this;
    }

    /**
     * Get systemeAffecte
     *
     * @return string 
     */
    public function getSystemeAffecte()
    {
        return $this->systemeAffecte;
    }

    /**
     * Set vuDensemble
     *
     * @param string $vuDensemble
     * @return Alerte
     */
    public function setVuDensemble($vuDensemble)
    {
        $this->vuDensemble = $vuDensemble;

        return $this;
    }

    /**
     * Get vuDensemble
     *
     * @return string 
     */
    public function getVuDensemble()
    {
        return $this->vuDensemble;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Alerte
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
     * Set impact
     *
     * @param string $impact
     * @return Alerte
     */
    public function setImpact($impact)
    {
        $this->impact = $impact;

        return $this;
    }

    /**
     * Get impact
     *
     * @return string 
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Set solution
     *
     * @param string $solution
     * @return Alerte
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string 
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Set reference
     *
     * @param array $reference
     * @return Alerte
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return array 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set revisions
     *
     * @param array $revisions
     * @return Alerte
     */
    public function setRevisions($revisions)
    {
        $this->revisions = $revisions;

        return $this;
    }

    /**
     * Get revisions
     *
     * @return array 
     */
    public function getRevisions()
    {
        return $this->revisions;
    }
   

    /**
     * Set user
     *
     * @param \Cert\IncidentBundle\Entity\User $user
     * @return Alerte
     */
    public function setUser(\Cert\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Cert\IncidentBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
