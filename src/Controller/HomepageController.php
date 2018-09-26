<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
  /**
     * @Route("/", name = "homepage")
     */
    public function home()
    {
      $games = [
          [
            'name' => 'ET',
            'id' => 1,
          ],
          [
            'name' => 'Pong',
            'id' => 2,
          ],
      ];

      return $this->render("/layout/menu.html.twig", [
        'games' => $games,
      ]);
    }
}
?>
