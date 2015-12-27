<?php

namespace Cert\IncidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ServiceImage
 */
class ServiceImage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\File(maxSize="6000000")
     */
    private $fichier;


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
     * Sets fichier
     *
     * @param UploadedFile $fichier
     */
    public function setFichier(UploadedFile $fichier = null)
    {
        $this->fichier = $fichier;
    }

    /**
     * Get fichier.
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
}
