<?php

namespace Oefen20;

class SavingsAccount extends BankAccount
{
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate)
    {
        parent::setAccount($accountNumber, $accountHolder, $balance, '');
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

    protected function validateWithdrawal(float $amount)
    {
        return ($this->balance - $amount >= 0);
    }

}
