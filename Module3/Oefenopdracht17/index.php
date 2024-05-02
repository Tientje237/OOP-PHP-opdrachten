<?php

namespace Oefen17;

require_once 'BankAccount.php';
require_once 'SavingsAccount.php';
require_once 'CheckingsAccount.php';
require_once 'BankList.php';

$bank = new Banklist();

$account1 = new SavingsAccount('0001', 'john doe', '100', '2');
$account2 = new SavingsAccount('0002', 'john doe', '100', '2');
$account3 = new CheckingsAccount('0003', 'bertus', '200', '1000');


echo $account1->getAccount();
echo $account3->getAccount();




$bank->addAccount($account1);
$bank->addAccount($account2);

echo '<br><br>Dit zijn uw accounts: ';
foreach ($bank->getAccounts() as $account)
{
    echo $account->getAccount();
}