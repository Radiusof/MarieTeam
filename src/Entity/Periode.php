<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Periode
 *
 */
#[ORM\Table(name: 'periode')]
#[ORM\Entity]
class Periode
{
    /**
     * @var int
     *
     */
    #[ORM\Column(name: 'id_periode', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $idPeriode;

    /**
     * @var \DateTime
     *
     */
    #[ORM\Column(name: 'debut', type: 'date', nullable: false)]
    private $debut;

    /**
     * @var \DateTime
     *
     */
    #[ORM\Column(name: 'fin', type: 'date', nullable: false)]
    private $fin;

    public function getIdPeriode(): ?int
    {
        return $this->idPeriode;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

        return $this;
    }


}
