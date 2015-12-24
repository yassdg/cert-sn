<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCompetence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\ArticleCompetenceRepository")
 */
class ArticleCompetence
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Article")
     */
    private $article;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Competence")
     */
    private $competence;

    /**
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;

    //getter et setter de l'entite article
    public function setArticle(\Sdz\BlogBundle\Entity\Article $article)
    {
        # code...
        $this->article = $article;
    }

    public function getArticle(\Sdz\BlogBundle\Entity\Article $article)
    {
        return $this->article ;
    }

    //getter et setter de l'entite competence
    public function setCompetence(\Sdz\BlogBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;
    }

    public function getCompetence(\Sdz\BlogBundle\Entity\Competence $competence)
    {
        return $this->competence ;
    }

    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }
     public function getNiveau()
    {
        return $this->niveau;
    }
}
