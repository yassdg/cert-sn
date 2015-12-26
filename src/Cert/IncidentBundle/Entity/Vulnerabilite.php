<?php

namespace Cert\IncidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Vulnerabilite
 */
class Vulnerabilite
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
     * @var \DateTime
     */
    private $datepub;

    /**
     * @var array
     */
    private $reference;

    /**
     * @var string
     */
    private $source;

    /**
     * @var \DateTime
     */
    private $dateModification;
    /**
     * @var string
     */
    private $image;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $fichier;

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

     public function getAbsolutePath()
    {
        return null === $this->fichier
            ? null
            : $this->getUploadRootDir().'/'.$this->fichier;
    }

    public function getWebPath()
    {
        return null === $this->fichier
            ? null
            : $this->getUploadDir().'/'.$this->fichier;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/pictures';
    }


    public function __construct() {
        $this->datepub = new \DateTime();
    }
    /*
        Permet d'uploader un fichier
    */
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFichier()) {
            return;
        }

        $uploadDir      = $this->getUploadDir(); 
        $originalName   = $this->getFichier()->getClientOriginalName();
        $imagePath      = $uploadDir."/".$originalName;
        $this->getFichier()->move(
            $uploadDir,
            $originalName
        );

        // set the path property to the filename where you've saved the file
        $this->image = $imagePath;

        // clean up the file property as you won't need it anymore
        $this->fichier = null;
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
     * @return Vulnerabilite
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
     * @return Vulnerabilite
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
     * @return Vulnerabilite
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
     * @return Vulnerabilite
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
     * Set datepub
     *
     * @param \DateTime $datepub
     * @return Vulnerabilite
     */
    public function setDatepub($datepub)
    {
        $this->datepub = $datepub;

        return $this;
    }

    /**
     * Get datepub
     *
     * @return \DateTime 
     */
    public function getDatepub()
    {
        return $this->datepub;
    }



    /**
     * Set reference
     *
     * @param string $reference
     * @return Vulnerabilite
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Vulnerabilite
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
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Vulnerabilite
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }
    /**
     * @var \Cert\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Cert\UserBundle\Entity\User $user
     * @return Vulnerabilite
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

    /**
     * Set image
     *
     * @param string $image
     * @return Vulnerabilite
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


}
