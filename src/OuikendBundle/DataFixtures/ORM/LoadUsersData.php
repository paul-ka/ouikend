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


class LoadDivisionData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        // Get our userManager, you must implement `ContainerAwareInterface`
        $userManager = $this->getUserManager();

        // Creation du User aaa
        $user = $userManager->createUser();
        $user->setPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('julien@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->setUsername('Julien');
        $userManager->updateUser($user, true);
        $this->addReference('user', $user);

        $user = $userManager->createUser();
        $user->setPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('paul@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->setUsername('Paul');
        $userManager->updateUser($user, true);
        $this->addReference('user2', $user);

        $user = $userManager->createUser();
        $user->setPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('manu@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->setUsername('Manu');
        $userManager->updateUser($user, true);
        $this->addReference('user3', $user);

        $user = $userManager->createUser();
        $user->setPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('flo@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->setUsername('Flo');
        $userManager->updateUser($user, true);
        $this->addReference('user4', $user);

        $user = $userManager->createUser();
        $user->setPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('jerome@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->setUsername('Jeje');
        $userManager->updateUser($user, true);
        $this->addReference('use5', $user);


        $user = $userManager->createUser();
        $user->setPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('celine@email.com');
        $user->setRoles(array('ROLE_USER'));
        $user->setUsername('Celine');
        $userManager->updateUser($user, true);
        $this->addReference('user6', $user);
        
        

    }

    public function getSecurityManager()
    {
        return $this->container->get('security.encoder_factory');
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return UserManagerInterface
     */
    public function getUserManager()
    {
        return $this->container->get('fos_user.user_manager');
    }

    public function getOrder()
    {
        return 1; // ordre d'appel
    }
}