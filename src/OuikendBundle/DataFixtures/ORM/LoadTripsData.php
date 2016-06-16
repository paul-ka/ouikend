<?php
namespace OuikendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use OuikendBundle\Entity\Trips;
use OuikendBundle\Entity\Activites;
use OuikendBundle\Entity\Users;
use Symfony\Component\Validator\Constraints\DateTime;


class LoadTripsData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $entity = new Trips();
        $entity->setNomVoyage('Ballade en montagne');
        $entity->setDescriptif('Randonnée entre amis dans les montagnes');
        $entity->setBut('Randonnée');
        $entity->setLieu('Grenoble');
        $entity->setDateDebut(New \DateTime('2016/06/30'));
        $entity->setDateFin(New \DateTime('2016/07/07'));
        $entity->setBudget(300);
        $entity->setVote(true);
        $manager->persist($entity);


        $entity = new Trips();
        $entity->setNomVoyage('Les gorges de l Ardeche');
        $entity->setDescriptif('Descente en rafting de l Ardeche');
        $entity->setBut('Rafting');
        $entity->setLieu('Aubena');
        $entity->setDateDebut(New \DateTime('2016/07/23'));
        $entity->setDateFin(New \DateTime('2016/07/31'));
        $entity->setBudget(150);
        $entity->setVote(true);
        $manager->persist($entity);


        $entity = new Trips();
        $entity->setNomVoyage('Les chateaux de la Loire');
        $entity->setDescriptif('Visite des chateaux de la Loire');
        $entity->setBut('Visite');
        $entity->setLieu('Blois');
        $entity->setDateDebut(New \DateTime('2016/12/23'));
        $entity->setDateFin(New \DateTime('2016/12/26'));
        $entity->setBudget(500);
        $entity->setVote(true);
        $manager->persist($entity);




        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 2; // ordre d'appel
    }
}
