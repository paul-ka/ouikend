<?php

namespace OuikendBundle\Entity;

/**
 * Trips
 */
class Trips
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomVoyage;

    /**
     * @var string
     */
    private $but;

    /**
     * @var string
     */
    private $descriptif;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var string
     */
    private $lieu;

    /**
     * @var string
     */
    private $budget;

    /**
     * @var bool
     */
    private $vote;

    private $users;
    
    private $activites;

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
     * Set nomVoyage
     *
     * @param string $nomVoyage
     *
     * @return Trips
     */
    public function setNomVoyage($nomVoyage)
    {
        $this->nomVoyage = $nomVoyage;

        return $this;
    }

    /**
     * Get nomVoyage
     *
     * @return string
     */
    public function getNomVoyage()
    {
        return $this->nomVoyage;
    }

    /**
     * Set but
     *
     * @param string $but
     *
     * @return Trips
     */
    public function setBut($but)
    {
        $this->but = $but;

        return $this;
    }

    /**
     * Get but
     *
     * @return string
     */
    public function getBut()
    {
        return $this->but;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Trips
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Trips
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Trips
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Trips
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set budget
     *
     * @param string $budget
     *
     * @return Trips
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set vote
     *
     * @param boolean $vote
     *
     * @return Trips
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return bool
     */
    public function getVote()
    {
        return $this->vote;
    }
}

