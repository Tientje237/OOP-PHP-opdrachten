<?php

namespace BankApp;

class BankList
{
    private array $accounts = [];

    public function addAccount(SavingsAccount|CheckingsAccount $accounts)
    {
        $this->accounts[] = $accounts;
        return $accounts->getaccount();
    }

    public function removeAccount(SavingsAccount|CheckingsAccount $account): string
    {
        $key = array_search($account, $this->accounts);
        if ($key !== false) {
            unset($this->accounts[$key]);
            return $account->getaccount();
        }
        return $account->getaccount();
    }

    public function getAccounts()
    {
        return $this->accounts;
    }




}
