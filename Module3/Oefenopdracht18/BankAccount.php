<?php

namespace Oefen18;

class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType)
    {
      $this->accountNumber = $accountNumber;
      $this->accountHolder = $accountHolder;
      $this->accountType = $accountType;
      $this->balance = $balance;
    }



    public function setAccount($accountNumber, $accountHolder, $accountType,)
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->accountType = $accountType;
    }

    public function getAccount(): string
    {
        return "<br><br>".$this->accountNumber.' <br>'.$this->accountHolder.' <br>'.$this->balance.' <br>'.$this->accountType.'<br>';
    }

    public function deposit($amount): string
    {
        $depositResult = $this->balance += $amount;
    }

    public function withdraw($amount): string
    {
        $withdrawResult = $this->balance - $amount;
        if ($withdrawResult > 0) {
            return "voldoende";
        }
        return "onvoldoende";
    }

    public function getBalance()
    {
        return $this->balance;
    }

}