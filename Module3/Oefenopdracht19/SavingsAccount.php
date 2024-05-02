<?php

namespace Oefen19;

class SavingsAccount extends BankAccount
{
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate)
    {
        parent::__construct($accountNumber, $accountHolder, $balance, '');
        $this->interestRate = $interestRate;
        $this->setType('Savings');
    }

    public function getAccount(): string
    {
        $accountDetails = parent::getAccount();
        $accountDetails .= "Interest Rate: {$this->interestRate}%<br>";
        return $accountDetails;
    }

    public function setType(string $type): void
    {
        parent::setAccountType($type);
    }

}
