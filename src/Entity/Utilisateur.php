<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR", indexes={@ORM\Index(name="I_FK_UTILISATEUR_UTILISATEUR", columns={"ID_DIRIGER"}), @ORM\Index(name="I_FK_UTILISATEUR_SERVICE", columns={"ID_APPARTENIR"}), @ORM\Index(name="I_FK_UTILISATEUR_SOCIETE", columns={"ID_SOCIETE"})})
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur implements UserInterface, \Serializable
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
     * @var string|null
     *
     * @ORM\Column(name="MAIL", type="string", length=128, nullable=true)
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
     * @var string|null
     *
     * @ORM\Column(name="NBLICENCE", type="string", length=128, nullable=true)
     */
    private $nblicence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VERROUNBLICENCE", type="boolean", nullable=true)
     */
    private $verrounblicence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SOCIETE", type="string", length=128, nullable=true)
     */
    private $societe;

    /**
     * @var int
     *
     * @ORM\Column(name="ROLE", type="integer", nullable=false)
     */
    private $role;

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
     * @var bool|null
     *
     * @ORM\Column(name="VERROUADMIN", type="boolean", nullable=true)
     */
    private $verrouadmin = '0';

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_APPARTENIR", referencedColumnName="ID")
     * })
     */
    private $idAppartenir;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DIRIGER", referencedColumnName="ID")
     * })
     */
    private $idDiriger;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SOCIETE", referencedColumnName="ID")
     * })
     */
    private $idSociete;

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

    public function setMail(?string $mail): self
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

    public function setNblicence(?string $nblicence): self
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

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(?string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

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
        $mdp = base64_encode($mdp);
        $this->mdp = $mdp;

        return $this;
    }

    public function getVerrouadmin(): ?bool
    {
        return $this->verrouadmin;
    }

    public function setVerrouadmin(?bool $verrouadmin): self
    {
        $this->verrouadmin = $verrouadmin;

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

    public function getIdDiriger(): ?self
    {
        return $this->idDiriger;
    }

    public function setIdDiriger(?self $idDiriger): self
    {
        $this->idDiriger = $idDiriger;

        return $this;
    }

    public function getIdSociete(): ?Societe
    {
        return $this->idSociete;
    }

    public function setIdSociete(?Societe $idSociete): self
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    public function getSalt(){
        return null;
    }
    public function getRoles(){
        return array('ROLE_USER');
    }
    public function eraseCredentials(){
    }
    public function getUsername(){
        return $this->getLogin();
    }
    public function getPassword(){
        return base64_decode($this->getMdp());
        //return ($this->getMdp());
    }
    /** @see \Serializable::serialize() */
    public function serialize(){
        return serialize(array(
            $this->id,
            $this->login,
            $this->mdp,
        ));
    }
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized){
        list(
            $this->id,
            $this->login,
            $this->mdp,
        )=unserialize($serialized);
    }

    function rangdanslalphabet($lettre)
    {
        $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_&@€£\$éàè([{}])ù%/*-+!§:/;.,?<>²~#|_ç^°µÀÁÂÃÄÅÆÇÈÉËÊÌÍÎÏÑñ";
        $N = strlen($alphabet);
        $alphabet=str_split($alphabet);
        $j=0;
        $rang=0;
        while ($j < $N)
        {
            if ($lettre==$alphabet[$j])
            {
                $rang = $j;
            }
            $j++;
        }
        return $rang;
    }

    function lettredelalphabet($rang)
    {
        $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_&@€£\$éàè([{}])ù%/*-+!§:/;.,?<>²~#|_ç^°µÀÁÂÃÄÅÆÇÈÉËÊÌÍÎÏÑñ";
        $N = strlen($alphabet);
        $alphabet=str_split($alphabet);
        if ($rang>=$N)
        {
            $rang = $rang - $N;
        }
        if ($rang<0)
        {
            $rang = $rang + $N;
        }
        $lettre = $alphabet[$rang];
        return $lettre;
    }

    function cryptagelettre($lettre, $cle)
    {
        $codelettre=$this->rangdanslalphabet($lettre);
        $codecle=$this->rangdanslalphabet($cle);
        $code=$codelettre+$codecle;
        return $this->lettredelalphabet($code);
    }

    function cryptageVigenere($mot)
    {
        $cle="CDDBAJ";
        $motcode="";
        $longCle=strlen($cle);
        $longMot=strlen($mot);
        $cle=str_split($cle);
        $mot=str_split($mot);
        $tmp=0;
        $i=0;
        while ($i<$longMot)
        {
            $motcode=$motcode.$this->cryptagelettre($mot[$i],$cle[$tmp]);
            $tmp=$tmp+1;
            if ($tmp==$longCle)
            {
                $tmp=0;
            }
            $i++;
        }
        return $motcode;
    }
}
