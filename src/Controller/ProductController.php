<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;

class ProductController extends AbstractController
{
  /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(int $productId)
    {

      $gameRepository = new GameRepository();
      $game = $gameRepository->findOneById($productId);

      return $this->render("/product/detail.html.twig", [
        'game' => $game,
      ]);
    }
}
?>
