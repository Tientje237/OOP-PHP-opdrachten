<?php

namespace File;

class BankAccount
{
    private string $accountNumber;
    private string $accountHolder;
    protected float $balance;
    protected string $accountType;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType)
    {
      $this->accountNumber = $accountNumber;
      $this->accountHolder = $accountHolder;
      $this->accountType = $accountType;
      $this->balance = $balance;
    }


    public function getAccount(): string
    {
        return "<br><br>".$this->accountNumber.' <br>'.$this->accountHolder.' <br>'.$this->balance.' <br>'.$this->accountType.'<br>';
    }


    public function deposit(float $amount): void
    {
        $this->balance += $amount;
        echo "<br>Deposited: $$amount to ".$this->accountHolder."<br>";
    }

    public function withdraw(float $amount): void
    {
        if ($this->validateWithdrawal($amount)) {
            $this->balance -= $amount;
            echo "<br>Withdrawn: $$amount from ".$this->accountHolder."<br>";
        } else {
            echo "<br> Withdrawal from ".$this->accountHolder." exceeds overdraft limit or insufficient funds.<br>".
                "Overdraft limit = $".$this->overdraftLimit($amount).", Withdraw = $$amount, Balance = $".$this->balance;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getAccountInfo(): string
    {
        return "<br><br>".$this->accountNumber.' <br>'.$this->accountHolder.' <br>'.$this->balance.' <br>'.$this->accountType.'<br>';
    }


}