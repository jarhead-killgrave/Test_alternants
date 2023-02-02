<?php

/**
 * Classe représentant une dépense de nourriture
 * 
 * Une dépense de nourriture est caractérisée par :
 * - un montant
 * - une description
 * - une date
 * - un payeur
 * - une liste de participants
 * 
 */

class FoodExpense extends Expense {

    public function getType(): string
    {
        return "FOOD";
    }
}