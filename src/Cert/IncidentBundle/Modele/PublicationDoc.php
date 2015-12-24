<?php

namespace Cert\IncidentBundle\Modele;

use Doctrine\ORM\Mapping as ORM;


class PublicationDoc
{
    protected $id;

    /**
     * @ORM\Column(name="titre", type="string")
     */
    protected $titre;

    /**
     * @ORM\Column(name="contenu", type="text")
     */
    protected $contenu;

    /**
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

}

?>