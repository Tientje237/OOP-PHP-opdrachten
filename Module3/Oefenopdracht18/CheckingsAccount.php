<?php

namespace Oefen18;

class CheckingsAccount extends BankAccount
{
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, 'Checking');
        $this->overdraftLimit = $overdraftLimit;
    }

    public function getAccount(): string
    {
        $accountDetails = parent::getAccount();
        $accountDetails .= "Overdraft Limit: {$this->overdraftLimit}<br>";
        return $accountDetails;
    }
}
    
    
