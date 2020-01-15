<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="SOCIETE")
 * @ORM\Entity
 */
class Societe
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
     * @var string|null
     *
     * @ORM\Column(name="URL", type="string", length=128, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGINSUPERADMIN", type="string", length=128, nullable=true)
     */
    private $loginsuperadmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=128, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDP", type="string", length=128, nullable=true)
     */
    private $mdp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLoginsuperadmin(): ?string
    {
        return $this->loginsuperadmin;
    }

    public function setLoginsuperadmin(?string $loginsuperadmin): self
    {
        $this->loginsuperadmin = $loginsuperadmin;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(?string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }


}
