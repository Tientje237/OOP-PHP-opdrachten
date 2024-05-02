<?php

namespace Bank;

require_once 'BankAccount.php';
require_once 'SavingsAccount.php';
require_once 'CheckingsAccount.php';
require_once 'BankList.php';


use \bank\BankList as Blist;
use \bank\CheckingsAccount as Checkings;
use \bank\SavingsAccount as Savings;

$bank = new Blist;

$account1 = new Savings('0001', 'John Doe', '100', '2');
$account2 = new Savings('0002', 'John Doe', '100', '2');
$account3 = new Checkings('0003', 'Bertus', '200', '1000');


echo $account1->getAccount();
echo $account3->getAccount();

$savingsaccount = new Savings('0004', 'Bryan', '3000', '0.02');
$checkingsaccount = new Checkings('0005', 'Jack', '6000', '200');
$savingsaccount2 = new Savings('0006', 'Mustafa', '300', '0.02');
$checkingsaccount2 = new Checkings('0007', 'Jan', '1000', '200');


$savingsaccount->deposit(500);
$checkingsaccount->withdraw(300);

$bank->addAccount($account1);
$bank->addAccount($account2);
$bank->addAccount($savingsaccount);
$bank->addAccount($checkingsaccount);
$bank->addAccount($savingsaccount2);
$bank->addAccount($checkingsaccount2);



echo '<br><br>Dit zijn uw accounts: ';
foreach ($bank->getAccounts() as $account)
{
    echo $account->getAccountInfo();
}