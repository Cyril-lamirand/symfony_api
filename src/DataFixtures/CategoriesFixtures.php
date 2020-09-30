<?php

namespace App\DataFixtures;

use App\Entity\CategoryArticle;
use App\Entity\CategoryProduct;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Seed Categories : CategoryArticle / CategoryProduct
        // Article
        for ($i = 1; $i < 11; $i++) {
            $CategoryArticle = new CategoryArticle();
            $CategoryArticle->setName('Category Article '.$i);
            $manager->persist($CategoryArticle);
        }
        // Product
        for ($i = 1; $i < 11; $i++){
            $CategoryProduct = new CategoryProduct();
            $CategoryProduct->setName('Category Product '.$i);
            $manager->persist($CategoryProduct);
        }
        $manager->flush();
    }
}