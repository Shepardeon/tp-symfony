<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use Faker;

class CommentFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $article = $this->getReference("Article" . $i);
            for ($j = 0; $j < rand(1, 4); $j++) {
                $comment = new Comment();
                $comment->setName($faker->name());
                $comment->setEmail($faker->email());
                $comment->setCreatedAt(new \DateTime($faker->date()));
                $comment->setComment($faker->text());
                $comment->setArticle($article);
                $article->addComment($comment);

                $manager->persist($comment);
            }
        }

        $manager->flush();
    }
}
