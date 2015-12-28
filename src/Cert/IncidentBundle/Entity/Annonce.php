<?php

namespace Cert\IncidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Annonce
 */
class Annonce
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
    private $image;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $dateAnnonce;

     /**
     * @var \Cert\UserBundle\Entity\User
     */

    private $user;
     /**
     * @Assert\File(maxSize="6000000")
     */
    private $fichier;


    public function __construct() {
        $this->dateAnnonce = new \DateTime();
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFichier(UploadedFile $fichier = null)
    {
        $this->fichier = $fichier;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFichier()
    {
        return $this->fichier;
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
     * Set image
     *
     * @param string $image
     * @return Annonce
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
     * Set source
     *
     * @param string $source
     * @return Annonce
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
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
     * Set dateAnnonce
     *
     * @param \DateTime $dateAnnonce
     * @return Annonce
     */
    public function setDateAnnonce($dateAnnonce)
    {
        $this->dateAnnonce = $dateAnnonce;

        return $this;
    }

    /**
     * Get dateAnnonce
     *
     * @return \DateTime 
     */
    public function getDateAnnonce()
    {
        return $this->dateAnnonce;
    }

   
    /**
     * Set user
     *
     * @param \Cert\UserBundle\Entity\User $user
     * @return Annonce
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
