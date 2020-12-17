<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_facture;

    /**
     * @ORM\Column(type="integer")
     */
    private $numerofacture;

    /**
     * @ORM\Column(type="integer")
     */
    private $idemetteur;

    /**
     * @ORM\Column(type="integer")
     */
    private $idrecepteur;

    /**
     * @ORM\Column(type="float")
     */
    private $montantttc;

    /**
     * @ORM\Column(type="float")
     */
    private $montantht;

    /**
     * @ORM\Column(type="date")
     */
    private $datefacture;

    /**
     * @ORM\Column(type="date")
     */
    private $dateinpi;

    /**
     * @ORM\Column(type="integer")
     */
    private $alerte;

    public function getId_facture(): ?int
    {
        return $this->id_facture;
    }

    public function getNumeroFacture(): ?int
    {
        return $this->numerofacture;
    }

    public function setNumeroFacture(int $numerofacture): self
    {
        $this->numerofacture = $numerofacture;

        return $this;
    }

    public function getIdEmetteur(): ?int
    {
        return $this->idemetteur;
    }

    public function setIdEmetteur(int $idemetteur): self
    {
        $this->idemetteur = $idemetteur;

        return $this;
    }

    public function getIdRecepteur(): ?int
    {
        return $this->idrecepteur;
    }

    public function setIdRecepteur(int $idrecepteur): self
    {
        $this->idrecepteur = $idrecepteur;

        return $this;
    }

    public function getMontantTtc(): ?float
    {
        return $this->montantttc;
    }

    public function setMontantTtc(float $montantttc): self
    {
        $this->montantttc = $montantttc;

        return $this;
    }

    public function getMontantHt(): ?float
    {
        return $this->montantht;
    }

    public function setMontantHt(float $montantht): self
    {
        $this->montantht = $montantht;

        return $this;
    }

    public function getDateFacture(): ?DateTimeInterface
    {
        return $this->datefacture;
    }

    public function setDateFacture(DateTimeInterface $datefacture): self
    {
        $this->datefacture = $datefacture;

        return $this;
    }



    public function getAlerte(): ?int
    {
        return $this->alerte;
    }

    /**
     * @return mixed
     */
    public function getDateinpi()
    {
        return $this->dateinpi;
    }

    /**
     * @param mixed $dateinpi
     */
    public function setDateinpi($dateinpi): void
    {
        $this->dateinpi = $dateinpi;
    }

    public function setAlerte(int $alerte): self
    {
        $this->alerte = $alerte;

        return $this;
    }
}
