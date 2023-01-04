<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilite
 *
 */
#[ORM\Table(name: 'disponibilite')]
#[ORM\Index(name: 'id_categorie', columns: ['id_categorie'])]
#[ORM\Index(name: 'id_traversee', columns: ['id_traversee'])]
#[ORM\Entity]
class Disponibilite
{
    /**
     * @var int
     *
     */
    #[ORM\Column(name: 'id_dispo', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $idDispo;

    /**
     * @var int
     *
     */
    #[ORM\Column(name: 'placesDispo', type: 'integer', nullable: false)]
    private $placesdispo;

    /**
     * @var int
     *
     */
    #[ORM\Column(name: 'id_traversee', type: 'integer', nullable: false)]
    private $idTraversee;

    /**
     * @var int
     *
     */
    #[ORM\Column(name: 'id_categorie', type: 'integer', nullable: false)]
    private $idCategorie;

    public function getIdDispo(): ?int
    {
        return $this->idDispo;
    }

    public function getPlacesdispo(): ?int
    {
        return $this->placesdispo;
    }

    public function setPlacesdispo(int $placesdispo): self
    {
        $this->placesdispo = $placesdispo;

        return $this;
    }

    public function getIdTraversee(): ?int
    {
        return $this->idTraversee;
    }

    public function setIdTraversee(int $idTraversee): self
    {
        $this->idTraversee = $idTraversee;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }


}
