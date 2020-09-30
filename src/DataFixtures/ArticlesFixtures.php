<?php

namespace App\DataFixtures;

use App\Entity\CategoryArticle;
use App\Entity\Article;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        // Seed Categories : CategoryArticle / CategoryProduct
        // Article
        for ($i = 0; $i < 50; $i++) {
            $Article = new Article();
            $Article->setTitle('Article '.$i);
            $Article->setContent($Lorem);
            $Article->getCategoryId();
            $manager->persist($Article);
        }
        $manager->flush();
    }
}


