<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR", indexes={@ORM\Index(name="I_FK_UTILISATEUR_SERVICE", columns={"ID_APPARTENIR"}), @ORM\Index(name="I_FK_UTILISATEUR_ADMIN", columns={"ID_DIRIGER"})})
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=128, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=128, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL", type="string", length=128, nullable=false)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEPHONE", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=128, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="MDP", type="string", length=128, nullable=false)
     */
    private $mdp;

    /**
     * @var \Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DIRIGER", referencedColumnName="ID")
     * })
     */
    private $idDiriger;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_APPARTENIR", referencedColumnName="ID")
     * })
     */
    private $idAppartenir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getIdDiriger(): ?Admin
    {
        return $this->idDiriger;
    }

    public function setIdDiriger(?Admin $idDiriger): self
    {
        $this->idDiriger = $idDiriger;

        return $this;
    }

    public function getIdAppartenir(): ?Service
    {
        return $this->idAppartenir;
    }

    public function setIdAppartenir(?Service $idAppartenir): self
    {
        $this->idAppartenir = $idAppartenir;

        return $this;
    }


}
