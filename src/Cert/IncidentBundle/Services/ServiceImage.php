<?php

namespace Cert\IncidentBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ServiceImage
 */
class ServiceImage
{


    /**
     * @var string
     *
     * @Assert\File(maxSize="6000000")
     */
    private $fichier;

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

    public function __construct(){
    }
    /*
        Permet d'uploader un fichier
    */
    public function upload(UploadedFile $fichier = null)
    {
        $this->setFichier($fichier);
        // the file property can be empty if the field is not required
        var_dump($fichier);
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


        // clean up the file property as you won't need it anymore
        $this->fichier = null;
        return $imagePath;
    }
}
