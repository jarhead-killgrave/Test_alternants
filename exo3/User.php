<?php

/**
 * Classe représentant un utilisateur
 * 
 * Un utilisateur est caractérisé par :
 * - un prénom
 * - un nom
 * - une adresse mail
 * 
 */
class User
{

    /**
     * @var string Prénom de l'utilisateur
     */
    private string $firstName;

    /**
     * @var string Nom de l'utilisateur
     */
    private string $lastName;

    /**
     * @var string Adresse mail de l'utilisateur
     */
    private string $mailAddress;

    /**
     * Constructeur de la classe User
     * 
     * @param string $firstName Prénom de l'utilisateur
     * @param string $lastName Nom de l'utilisateur
     * @param string $mailAddress Adresse mail de l'utilisateur
     */
    public function __construct(string $firstName, string $lastName, string $mailAddress)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->mailAddress = $mailAddress;
    }

    /**
     * Retourne le prénom de l'utilisateur
     * 
     * @return string Prénom de l'utilisateur
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Retourne le nom de l'utilisateur
     * 
     * @return string Nom de l'utilisateur
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Retourne l'adresse mail de l'utilisateur
     * 
     * @return string Adresse mail de l'utilisateur
     */
    public function getMailAddress(): string
    {
        return $this->mailAddress;
    }

    /**
     * Retourne le nom complet de l'utilisateur
     * 
     * @return string Nom complet de l'utilisateur
     */
    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
