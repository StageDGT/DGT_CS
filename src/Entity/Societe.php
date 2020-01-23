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
     * @ORM\Column(name="URLLCMS", type="string", length=128, nullable=true)
     */
    private $urllcms;

    /**
     * @var string
     *
     * @ORM\Column(name="URLLMS", type="string", length=128, nullable=true)
     */
    private $urllms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGINSUPERADMIN", type="string", length=128, nullable=true)
     */
    private $loginsuperadmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDPSUPERADMIN", type="string", length=128, nullable=true)
     */
    private $mdpsuperadmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGINLCMS", type="string", length=128, nullable=true)
     */
    private $loginlcms;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGINLMS", type="string", length=128, nullable=true)
     */
    private $loginlms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDPLCMS", type="string", length=128, nullable=true)
     */
    private $mdplcms;

    /**
     * @var string
     *
     * @ORM\Column(name="MDPLMS", type="string", length=128, nullable=true)
     */
    private $mdplms;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrllcms(): ?string
    {
        return $this->urllcms;
    }

    public function setUrllcms(?string $urllcms): self
    {
        $this->urllcms = $urllcms;

        return $this;
    }

    public function getUrllms(): ?string
    {
        return $this->urllms;
    }

    public function setUrllms(string $urllms): self
    {
        $this->urllms = $urllms;

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

    public function getMdpsuperadmin(): ?string
    {
        return $this->mdpsuperadmin;
    }

    public function setMdpsuperadmin(?string $mdpsuperadmin): self
    {
        $this->mdpsuperadmin = $mdpsuperadmin;

        return $this;
    }

    public function getLoginlcms(): ?string
    {
        return $this->loginlcms;
    }

    public function setLoginlcms(?string $loginlcms): self
    {
        $this->loginlcms = $loginlcms;

        return $this;
    }

    public function getLoginlms(): ?string
    {
        return $this->loginlms;
    }

    public function setLoginlms(string $loginlms): self
    {
        $this->loginlms = $loginlms;

        return $this;
    }

    public function getMdplcms(): ?string
    {
        return $this->mdplcms;
    }

    public function setMdplcms(?string $mdplcms): self
    {
        $this->mdplcms = $mdplcms;

        return $this;
    }

    public function getMdplms(): ?string
    {
        return $this->mdplms;
    }

    public function setMdplms(string $mdplms): self
    {
        $this->mdplms = $mdplms;

        return $this;
    }


}
