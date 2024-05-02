<?php

namespace Oefen19;

class CheckingsAccount extends BankAccount
{
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, '');
        $this->overdraftLimit = $overdraftLimit;
        $this->setType('Checking');
    }

    public function getAccount(): string
    {
        $accountDetails = parent::getAccount();
        $accountDetails .= "Overdraft Limit: {$this->overdraftLimit}<br>";
        return $accountDetails;
    }

    public function setType(string $type): void
    {
        parent::setAccountType($type);
    }
}
    
    
