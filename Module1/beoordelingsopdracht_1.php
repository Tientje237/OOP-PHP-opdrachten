<?php

class BankAccount
{

    public $accountNumber;
    public $balance;
    public $currency;

    public function __construct($accountNumber, $balance, $currency)
    {
        $this->accountNumber = $accountNumber;
        $this->currency = $currency;
        $this->balance = number_format($balance, 2);
    }

    public function setAccountNumber($accountNumber)
    {
        return $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(): string
    {
        return "Uw bankaccount nummer is gewijzigd in: " . $this->accountNumber;
    }

    public function getBalance()
    {
        return 'Uw huidige saldo is: ' . $this->currency.$this->balance . '<br>';
    }


    public function withdraw($amount): string
    {
        $withdrawResult = $this->balance - $amount;
        if ($withdrawResult > 0) {
            return 'U heeft ' . $this->currency . number_format($amount, 2) . ' opgenomen. Uw huidige saldo is: ' . $this->currency . number_format($withdrawResult, 2) . '<br>';
        }
        return 'U heeft onvoldoende saldo om ' . $this->currency . number_format($amount, 2) . ' op te nemen.' . '<br>';
    }

    public function deposit($amount): string
    {
        $depositResult = $this->balance += $amount;
        return 'U heeft '.$this->currency.number_format($amount, 2).' op uw bankaccount gezet. Uw huidige saldo is: '.$this->currency.number_format($depositResult, 2).'<br>';
    }
}

$customer1 = new BankAccount(286662, 60, "$");
echo 'Uw bankaccount nummer is: '.$customer1->accountNumber.'<br>';
echo $customer1->getBalance();
echo $customer1->withdraw(14);
echo $customer1->deposit(19);
$customer1->setAccountNumber(412530);
echo $customer1->getAccountNumber();