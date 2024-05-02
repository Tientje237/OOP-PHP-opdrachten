<?php

namespace Oefen18;

class SavingsAccount extends BankAccount
{
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, 'Savings');
        $this->interestRate = $interestRate;
    }

    public function getAccount(): string
    {
        $accountDetails = parent::getAccount();
        $accountDetails .= "Interest Rate: {$this->interestRate}%<br>";
        return $accountDetails;
    }
}
