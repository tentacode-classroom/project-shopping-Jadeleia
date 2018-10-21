<?php

namespace App\DataFixtures;

use App\ Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ShoppingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $game1 = new Game();
        $game1->setName('E.T. the Extra-Terrestrial');
        $game1->setConsole('Atari 2600');
        $game1->setType('Aventure');
        $game1->setDate(1982);
        $game1->setPrice(15);
        $manager->persist($game1);

        $game2 = new Game();
        $game2->setName('Pong');
        $game2->setConsole("Borne d'arcade");
        $game2->setType('Sport');
        $game2->setDate(1972);
        $game2->setPrice(15);
        $manager->persist($game2);

        $game3 = new Game();
        $game3->setName('Super Mario 64');
        $game3->setConsole('Nintendo 64');
        $game3->setType('Plateforme');
        $game3->setDate(1996);
        $game3->setPrice(15);
        $manager->persist($game3);

        $manager->flush();
    }
}
