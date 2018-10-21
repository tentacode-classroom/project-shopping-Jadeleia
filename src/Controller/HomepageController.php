<?php

namespace App\Controller;

use App\Entity\Game;
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

      $gameRepository = $this->getDoctrine()->getRepository(Game::class);
      $games = $gameRepository->findAll();

      return $this->render("/layout/menu.html.twig", [
        'games' => $games,
      ]);
    }
}
?>
