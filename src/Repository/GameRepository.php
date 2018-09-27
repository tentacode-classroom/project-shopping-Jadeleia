<?php

namespace App\Repository;

use App\Entity\Game;

class GameRepository
{
  private $games;

  public function __construct()
  {
    $game1 = new Game();
    $game1->setId(1);
    $game1->setName('E.T. the Extra-Terrestrial');
    $game1->setConsole('Atari 2600');
    $game1->setType('Aventure');
    $game1->setDate(1982);
    $game1->setPrice(15);

    $game2 = new Game();
    $game2->setId(2);
    $game2->setName('Pong');
    $game2->setConsole('Borne arcade');
    $game2->setType('Sport');
    $game2->setDate(1972);
    $game2->setPrice(15);

    $game3 = new Game();
    $game3->setId(3);
    $game3->setName('Super Mario 64');
    $game3->setConsole('Nintendo 64');
    $game3->setType('Plateforme');
    $game3->setDate(1996);
    $game3->setPrice(15);

    $this->games = [
           $game1,
           $game2,
           $game3,
       ];
  }

  public function findAll(): array
  {
    return $this->games;
  }

  public function findOneById(int $id): game
  {
    foreach ($this->games as $game) {
      if($game->getId() === $id) {
        return $game;
      }
    }

    throw new \RuntimeException(sprintf(
          'No game found with id "%s"',
          $id
      ));
  }
}
