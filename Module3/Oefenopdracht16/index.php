<?php

namespace Oefen16;

require_once 'BankAccount.php';
require_once 'BankList.php';

$bank = new Banklist();

$account1 = new BankAccount('0001', 'john doe', '100', 'Savings');
$account2 = new BankAccount('0002', 'john doe', '100', 'Savings');
$account3 = new BankAccount('0003', 'bertus', '200', 'Checking');


echo $account1->getAccount();
echo $account3->getAccount();


$account1->setAccount('0001', 'john doe',  'Checking');


$bank->addAccount($account1);
$bank->addAccount($account2);

echo '<br><br>Dit zijn uw accounts: ';
foreach ($bank->getAccounts() as $account)
{
    echo $account->getTest();
}