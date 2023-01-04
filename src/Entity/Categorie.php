<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 */
#[ORM\Table(name: 'categorie')]
#[ORM\UniqueConstraint(name: 'libelle_categorie', columns: ['libelle_categorie'])]
#[ORM\Entity]
class Categorie
{
    /**
     * @var int
     *
     */
    #[ORM\Column(name: 'id_categorie', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $idCategorie;

    /**
     * @var string
     *
     */
    #[ORM\Column(name: 'libelle_categorie', type: 'string', length: 50, nullable: false)]
    private $libelleCategorie;

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getLibelleCategorie(): ?string
    {
        return $this->libelleCategorie;
    }

    public function setLibelleCategorie(string $libelleCategorie): self
    {
        $this->libelleCategorie = $libelleCategorie;

        return $this;
    }


}
