<?php

class GameLibrary
{
    private array $games = [];

    public function addGame(Game $games)
    {
        $this->games[] = $games;
    }

    public function getGames()
    {
        return $this->games;
    }
}