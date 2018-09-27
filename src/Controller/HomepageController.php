<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;

class HomepageController extends AbstractController
{
  /**
     * @Route("/", name = "homepage")
     */
    public function home()
    {

      $gameRepository = new GameRepository;
      $games = $gameRepository->findAll();

      return $this->render("/layout/menu.html.twig", [
        'games' => $games,
      ]);
    }
}
?>
