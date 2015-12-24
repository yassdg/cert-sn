<?php 
namespace Cert\IncidentBundle\Extension;

use Symfony\Component\Validator\Constraints as Assert;



class Media
{

	/**
	* @var string the path - typically started in the database
	*/
	private $path;

	/**
	* @var \Symfony\Component\HttpFoundation\File\UploadedFile
	* @Assert\File(maxSize="1M")
	*/
	public $file;

	/**
	* @return null/string
	*/

	public function getWebPath()
	{
		// $webpath est l'url de l'image a charger dans le template
		return $webpath;
	}
}

?>