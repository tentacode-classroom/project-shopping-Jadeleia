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
    $game2->setconsole('Borne d'arcade');
    $game2->settype('Sport');
    $game2->setdate(1972);
    $game2->setPrice(15);

    $game3 = new Game();
    $game3->setId(3);
    $game3->setName('Super Mario 64');
    $game3->setconsole('Nintendo 64');
    $game3->settype('Plateforme');
    $game3->setdate(1996);
    $game3->setPrice(15);
  }
}
