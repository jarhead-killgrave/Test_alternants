<?php

/**
 * Classe représentant une dépense de boisson
 * 
 * Une dépense de boisson est caractérisée par :
 * - un montant
 * - une description
 * - une date
 * - un payeur
 * - une liste de participants
 * 
 */
class DrinkExpense extends Expense {



    public function getType(): string
    {
        return "DRINK";
    }
}