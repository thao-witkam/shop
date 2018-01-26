<?php
namespace WebshopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WebshopBundle\Entity\Category;

class LoadCategory extends AbstractFixture //implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName('Fantasy');
        $category1->setCreatedAt(new \DateTime('now'));
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Abstract');
        $category2->setCreatedAt(new \DateTime('now'));
        $manager->persist($category2);

        $manager->flush();

    }
}