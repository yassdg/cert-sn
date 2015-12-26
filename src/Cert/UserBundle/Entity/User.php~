<?php

namespace Cert\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  /**
   * @ORM\Column(name="nom", type="string",length=255)
   * 
   */
  protected $nom;
  /**
   * @ORM\Column(name="prenom", type="string",length=255)
   * 
   */
    protected $prenom;
  /**
   * @ORM\Column(name="telephone", type="string",length=255)
   * 
   */
    protected $telephone;

  /**
   * @ORM\OneToMany(targetEntity="\Cert\IncidentBundle\Entity\Incident", mappedBy="user")   
   * 
   */
    protected $incidents;

    /**
    * @ORM\OneToMany(targetEntity="\Cert\IncidentBundle\Entity\Alerte", mappedBy="user")   
    * 
    */
    protected $alertes;

    /**
    * @ORM\OneToMany(targetEntity="\Cert\IncidentBundle\Entity\Vulnerabilite", mappedBy="user")   
    * 
    */
    protected $vulnerabilites;

    /**
    * @ORM\OneToMany(targetEntity="\Cert\IncidentBundle\Entity\Annonce", mappedBy="user")   
    * 
    */
    protected $annonces;

    public function __construct(){
        parent::__construct();
        $this->setEnabled(true);
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Add incidents
     *
     * @param \Cert\IncidentBundle\Entity\Incident $incidents
     * @return User
     */
    public function addIncident(\Cert\IncidentBundle\Entity\Incident $incidents)
    {
        $this->incidents[] = $incidents;

        return $this;
    }

    /**
     * Remove incidents
     *
     * @param \Cert\IncidentBundle\Entity\Incident $incidents
     */
    public function removeIncident(\Cert\IncidentBundle\Entity\Incident $incidents)
    {
        $this->incidents->removeElement($incidents);
    }

    /**
     * Get incidents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncidents()
    {
        return $this->incidents;
    }

    /**
     * Add alertes
     *
     * @param \Cert\IncidentBundle\Entity\Alerte $alertes
     * @return User
     */
    public function addAlerte(\Cert\IncidentBundle\Entity\Alerte $alertes)
    {
        $this->alertes[] = $alertes;

        return $this;
    }

    /**
     * Remove alertes
     *
     * @param \Cert\IncidentBundle\Entity\Alerte $alertes
     */
    public function removeAlerte(\Cert\IncidentBundle\Entity\Alerte $alertes)
    {
        $this->alertes->removeElement($alertes);
    }

    /**
     * Get alertes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlertes()
    {
        return $this->alertes;
    }

    /**
     * Add vulnerabilites
     *
     * @param \Cert\IncidentBundle\Entity\Vulnerabilite $vulnerabilites
     * @return User
     */
    public function addVulnerabilite(\Cert\IncidentBundle\Entity\Vulnerabilite $vulnerabilites)
    {
        $this->vulnerabilites[] = $vulnerabilites;

        return $this;
    }

    /**
     * Remove vulnerabilites
     *
     * @param \Cert\IncidentBundle\Entity\Vulnerabilite $vulnerabilites
     */
    public function removeVulnerabilite(\Cert\IncidentBundle\Entity\Vulnerabilite $vulnerabilites)
    {
        $this->vulnerabilites->removeElement($vulnerabilites);
    }

    /**
     * Get vulnerabilites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVulnerabilites()
    {
        return $this->vulnerabilites;
    }

    /**
     * Add annonces
     *
     * @param \Cert\IncidentBundle\Entity\Annonce $annonces
     * @return User
     */
    public function addAnnonce(\Cert\IncidentBundle\Entity\Annonce $annonces)
    {
        $this->annonces[] = $annonces;

        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \Cert\IncidentBundle\Entity\Annonce $annonces
     */
    public function removeAnnonce(\Cert\IncidentBundle\Entity\Annonce $annonces)
    {
        $this->annonces->removeElement($annonces);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }
}
