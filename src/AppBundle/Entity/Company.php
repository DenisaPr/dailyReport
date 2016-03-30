<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nume", type="string", length=255, unique=true)
     */
    private $nume;

    /**
     * @var string
     *
     * @ORM\Column(name="prenume", type="string", length=255)
     */
    private $prenume;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_ord_reg_com_an", type="string", length=255, unique=true)
     */
    private $nrOrdRegComAn;

    /**
     * @var string
     *
     * @ORM\Column(name="cif", type="string", length=255, unique=true)
     */
    private $cif;

    /**
     * @var string
     *
     * @ORM\Column(name="sediu", type="string", length=255)
     */
    private $sediu;

    /**
     * @var string
     *
     * @ORM\Column(name="judetul", type="string", length=255)
     */
    private $judetul;

    /**
     * @var string
     *
     * @ORM\Column(name="contul", type="string", length=255)
     */
    private $contul;

    /**
     * @var string
     *
     * @ORM\Column(name="banca", type="string", length=255)
     */
    private $banca;

    /**
     * @var string
     *
     * @ORM\Column(name="seria", type="string", length=255)
     */
    private $seria;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_bi", type="string", length=255)
     */
    private $nrBi;

    /**
     * @var string
     *
     * @ORM\Column(name="eliberat", type="string", length=255)
     */
    private $eliberat;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=255)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nume_firma", type="string", length=255)
     */
    private $numeFirma;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nume
     *
     * @param string $nume
     *
     * @return Company
     */
    public function setNume($nume)
    {
        $this->nume = $nume;

        return $this;
    }

    /**
     * Get nume
     *
     * @return string
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Set prenume
     *
     * @param string $prenume
     *
     * @return Company
     */
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;

        return $this;
    }

    /**
     * Get prenume
     *
     * @return string
     */
    public function getPrenume()
    {
        return $this->prenume;
    }

    /**
     * Set nrOrdRegComAn
     *
     * @param string $nrOrdRegComAn
     *
     * @return Company
     */
    public function setNrOrdRegComAn($nrOrdRegComAn)
    {
        $this->nrOrdRegComAn = $nrOrdRegComAn;

        return $this;
    }

    /**
     * Get nrOrdRegComAn
     *
     * @return string
     */
    public function getNrOrdRegComAn()
    {
        return $this->nrOrdRegComAn;
    }

    /**
     * Set cif
     *
     * @param string $cif
     *
     * @return Company
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set sediu
     *
     * @param string $sediu
     *
     * @return Company
     */
    public function setSediu($sediu)
    {
        $this->sediu = $sediu;

        return $this;
    }

    /**
     * Get sediu
     *
     * @return string
     */
    public function getSediu()
    {
        return $this->sediu;
    }

    /**
     * Set judetul
     *
     * @param string $judetul
     *
     * @return Company
     */
    public function setJudetul($judetul)
    {
        $this->judetul = $judetul;

        return $this;
    }

    /**
     * Get judetul
     *
     * @return string
     */
    public function getJudetul()
    {
        return $this->judetul;
    }

    /**
     * Set contul
     *
     * @param string $contul
     *
     * @return Company
     */
    public function setContul($contul)
    {
        $this->contul = $contul;

        return $this;
    }

    /**
     * Get contul
     *
     * @return string
     */
    public function getContul()
    {
        return $this->contul;
    }

    /**
     * Set banca
     *
     * @param string $banca
     *
     * @return Company
     */
    public function setBanca($banca)
    {
        $this->banca = $banca;

        return $this;
    }

    /**
     * Get banca
     *
     * @return string
     */
    public function getBanca()
    {
        return $this->banca;
    }

    /**
     * Set seria
     *
     * @param string $seria
     *
     * @return Company
     */
    public function setSeria($seria)
    {
        $this->seria = $seria;

        return $this;
    }

    /**
     * Get seria
     *
     * @return string
     */
    public function getSeria()
    {
        return $this->seria;
    }

    /**
     * Set nrBi
     *
     * @param string $nrBi
     *
     * @return Company
     */
    public function setNrBi($nrBi)
    {
        $this->nrBi = $nrBi;

        return $this;
    }

    /**
     * Get nrBi
     *
     * @return string
     */
    public function getNrBi()
    {
        return $this->nrBi;
    }

    /**
     * Set eliberat
     *
     * @param string $eliberat
     *
     * @return Company
     */
    public function setEliberat($eliberat)
    {
        $this->eliberat = $eliberat;

        return $this;
    }

    /**
     * Get eliberat
     *
     * @return string
     */
    public function getEliberat()
    {
        return $this->eliberat;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     *
     * @return Company
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Company
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set numeFirma
     *
     * @param string $numeFirma
     *
     * @return Company
     */
    public function setNumeFirma($numeFirma)
    {
        $this->numeFirma = $numeFirma;

        return $this;
    }

    /**
     * Get numeFirma
     *
     * @return string
     */
    public function getNumeFirma()
    {
        return $this->numeFirma;
    }
}

