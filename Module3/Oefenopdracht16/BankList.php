<?php

namespace Oefen16;

class BankList
{
    private array $accounts = [];

    public function addAccount(BankAccount $accounts)
    {
        $this->accounts[] = $accounts;
        return $accounts->getaccount();
    }

    public function removeAccount(BankAccount $account): string
    {
        $key = array_search($account, $this->accounts);
        if ($key !== false) {
            unset($this->accounts[$key]);
            return "<li>Boek: ".$account->getaccount()." is verwijderd</li>";
        }
        return "<li>Boek: ".$account->getaccount()." is niet gevonden</li>";
    }

    public function getAccounts()
    {
        return $this->accounts;
    }




}
