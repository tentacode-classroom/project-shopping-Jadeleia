<?php

namespace App\Controller;

use App\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
//    public function index(int $productId)
//    {
//
//        $gameRepository = $this->getDoctrine()->getRepository(Game::class);
//        $game = $gameRepository->find($productId);
//
//        return $this->render("/product/detail.html.twig", [
//            'game' => $game,
//        ]);
//    }

    public function show($productid)
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($productid);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $productid
            );
        }

        return new Response('Check out this great product: ' . $product->getName());
    }

}
