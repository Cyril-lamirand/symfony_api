<?php

namespace App\DataFixtures;

use App\Entity\CategoryProduct;
use App\Entity\Product;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ProductsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $CategoriesProduct = $manager->getRepository(CategoryProduct::class)->findAll();
        $Lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        dd($CategoriesProduct);
        // Product
        for ($i = 0; $i < 50; $i++){
            $Product = new Product();
            $Product->setTitle('Product '.$i);
            $Product->setDescription($Lorem);
            $Product->setPrice(mt_rand(10, 1000));
            $Product->setStock(mt_rand(5, 50));
            $Product->setCategoryId($this->$CategoriesProduct[array_rand($this->$CategoriesProduct)]);
            $manager->persist($Product);
        }
        $manager->flush();
    }
}