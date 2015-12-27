<?php
namespace Cert\IncidentBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class ArrayToTextTransformer implements DataTransformerInterface
{ 

    public function __construct()
    {
    }
 	public function transform($array)
    {	
    	if($array != null ){

    		$string = implode(';', $array);
    		return $string;
    	}
    }

    public function reverseTransform($string)
    {

        return explode(';', $string);
    }
}