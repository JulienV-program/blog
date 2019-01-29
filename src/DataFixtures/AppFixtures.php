<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setName('user ' . $i);
            $user->setPassword(mt_rand(10, 100));
            $user->setEmail('user' . $i . '@test.com');
            $manager->persist($user);
        }
        $manager->flush();
    }
}