<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Article;

use Faker;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle($faker->sentence());
            $article->setSubtitle($faker->sentence());
            $article->setCreatedAt(new \DateTime($faker->date()));
            $article->setAuthor($faker->name());
            $article->setBody($faker->paragraph(5));
            $article->setImage("none.png");

            $manager->persist($article);

            $this->addReference("Article" . $i, $article);
        }

        $manager->flush();
    }
}
