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



class LoadActivitesData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
   public function load(ObjectManager $manager)
    {
        $entity = new Activites();
        $entity->setActivite("Musée");
        $entity->setDescriptif("Visite du musée de la porcelaine");
        $manager->persist($entity);

        $entity = new Activites();
        $entity->setActivite("Détente");
        $entity->setDescriptif("Journée SPA et massage");
        $manager->persist($entity);

        $entity = new Activites();
        $entity->setActivite("Cave");
        $entity->setDescriptif("Visite des caves à vin");
        $manager->persist($entity);

        $entity = new Activites();
        $entity->setActivite("Piscine");
        $entity->setDescriptif("Farmiente et detente à la piscine");
        $manager->persist($entity);

        $entity = new Activites();
        $entity->setActivite("velo");
        $entity->setDescriptif("Promenade en velo sur les petites routes");
        $manager->persist($entity);

        $entity = new Activites();
        $entity->setActivite("Picodage");
        $entity->setDescriptif("Codage d'application Web et mobile en buvant l'apéro");
        $manager->persist($entity);

        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 3; // ordre d'appel
    }
}

 