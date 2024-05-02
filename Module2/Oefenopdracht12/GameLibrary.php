<?php

class GameLibrary
{
    public array $games = [];

    public function addGame(Game $games)
    {
        $this->games[] = $games;

    }
}