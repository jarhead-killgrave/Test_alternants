<?php

/**
 * Classe abstraite représentant une dépense
 * 
 * Une dépense est caractérisée par :
 * - un montant
 * - une description
 * - une date
 * - un payeur
 * - une liste de participants
 */
abstract class Expense
{

    /**
     * @var float Montant de la dépense
     */
    private float $amount;

    /**
     * @var string Description de la dépense
     */
    private $description;

    /**
     * @var \DateTime Date de la dépense
     */
    private \DateTime $happenedAt;

    /**
     * @var User Payeur de la dépense
     */
    private User $payer;

    /**
     * @var array <User> Liste des participants à la dépense
     */
    private array $participants;

    /**
     * Constructeur de la classe Expense
     * 
     * @param float $amount Montant de la dépense
     * @param string $description Description de la dépense
     * @param \DateTime $happenedAt Date de la dépense
     * @param User $payer Payeur de la dépense
     * @param array <User> $participants Liste des participants à la dépense
     */
    public function __construct(float $amount, string $description, \DateTime $happenedAt,
                                    User $payer, array $participants)
    {
        $this->amount = $amount;
        $this->description = $description;
        $this->happenedAt = $happenedAt;
        $this->payer = $payer;
        $this->participants = $participants;
    }

    /**
     * Retourne le montant de la dépense
     * 
     * @return float Montant de la dépense
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Retourne la description de la dépense
     * 
     * @return string Description de la dépense
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Retourne la date de la dépense
     * 
     * @return \DateTime Date de la dépense
     */
    public function getHappenedAt(): \DateTime
    {
        return $this->happenedAt;
    }

    /**
     * Retourne le payeur de la dépense
     * 
     * @return User Payeur de la dépense
     */
    public function getPayer(): User
    {
        return $this->payer;
    }

    /**
     * Retourne la liste des participants à la dépense
     * 
     * @return array <User> Liste des participants à la dépense
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * Retourne le montant à payer par chaque participant
     * 
     * @return float Montant à payer par chaque participant
     */
    public function getUnitaryShared(): float
    {
        return $this->amount / count($this->participants);
    }

    /**
     * Retourne le montant à payer par un participant
     * 
     * @param User $user Participant
     * @return float Montant à payer par le participant
     */
    public function getUserShare(User $user): float
    {   
        return (in_array($user, $this->participants)) === true ? $this->getUnitaryShared() : 0;
    }

    /**
     * Retourne le type de la dépense
     * 
     * @return string Type de la dépense
     */
    abstract public function getType(): string;

}