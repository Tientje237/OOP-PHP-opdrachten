<?php

require_once 'Oefenopdracht_14.php';
require_once 'GameLibrary.php';

$klaas = new GameLibrary();

$game1 = new Game('F1 23', 'Rem als laatste in EA SPORTS™ F1® 23, het officiële videospel van het 2023 FIA Formula One World Championship™. Een nieuw hoofdstuk in de spannende verhaalmodus "Braking Point" staat garant voor razendsnel drama en verhitte rivaliteit.', '70', tag: ['Racen', 'Rijden', 'Multiplayer', 'Sim']);
$game2 = new Game('Ready or Not', 'Ready or Not is een intense, tactische first-person shooter waarin een moderne SWAT-eenheid vijanden uit moet schakelen en crises moeten bezweren.', '50', tag: ['Tactisch', 'Realistisch', 'Shooter', 'Multiplayer']);
$game3 = new Game('metro exodus', 'Ontvlucht de puinhopen van de Moskouse metro in een epische reis over een heel continent, dwars door de wildernis van postapocalyptisch Rusland. In het grootste Metro-avontuur tot nu toe verken je grote, niet-lineaire levels, ga je op in een survivalervaring in een open wereld', '30', tag: ['Postapocalyptisch', 'Open wereld']);


$klaas->addGame($game2);
$klaas->addGame($game3);

echo $game1->getGame();
echo $game2->getGame();
echo $game3->getGame();

foreach ($klaas->getGames() as $game)
{
    echo $game->getGame();
}