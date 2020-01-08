<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="ADMIN", indexes={@ORM\Index(name="I_FK_ADMIN_SUPERADMIN", columns={"ID_CONTROLER"})})
 * @ORM\Entity
 */
class Admin
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
     * @var string|null
     *
     * @ORM\Column(name="PORTABLE", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $portable;

    /**
     * @var string
     *
     * @ORM\Column(name="NBLICENCE", type="string", length=128, nullable=false)
     */
    private $nblicence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VERROUNBLICENCE", type="boolean", nullable=true)
     */
    private $verrounblicence;

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
     * @var string
     *
     * @ORM\Column(name="SOCIETE", type="string", length=128, nullable=false)
     */
    private $societe;

    /**
     * @var \Superadmin
     *
     * @ORM\ManyToOne(targetEntity="Superadmin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CONTROLER", referencedColumnName="ID")
     * })
     */
    private $idControler;

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

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(?string $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getNblicence(): ?string
    {
        return $this->nblicence;
    }

    public function setNblicence(string $nblicence): self
    {
        $this->nblicence = $nblicence;

        return $this;
    }

    public function getVerrounblicence(): ?bool
    {
        return $this->verrounblicence;
    }

    public function setVerrounblicence(?bool $verrounblicence): self
    {
        $this->verrounblicence = $verrounblicence;

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

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getIdControler(): ?Superadmin
    {
        return $this->idControler;
    }

    public function setIdControler(?Superadmin $idControler): self
    {
        $this->idControler = $idControler;

        return $this;
    }


}
