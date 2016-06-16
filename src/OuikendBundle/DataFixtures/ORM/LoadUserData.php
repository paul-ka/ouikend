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

class LoadUsersData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
        $user->setUsername('julien');
        $user->setPlainPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('julien@email.com');
        $user->setRoles(array('ROLE_ADMIN'));
        $this->addReference('user', $user);
        $userManager->updateUser($user, true);


        $user = $userManager->createUser();
        $user->setPlainPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('paul@email.com');
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setUsername('paul');
        $this->addReference('user2', $user);
        $userManager->updateUser($user, true);

        $user = $userManager->createUser();
        $user->setPlainPassword('Manu');
        $user->setEnabled(true);
        $user->setEmail('manu@email.com');
        $user->setUsername('Manu');
        $this->addReference('user3', $user);
        $userManager->updateUser($user, true);

        $user = $userManager->createUser();
        $user->setPlainPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('flo@email.com');
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setUsername('Flo');
        $this->addReference('user4', $user);
        $userManager->updateUser($user, true);

        $user = $userManager->createUser();
        $user->setPlainPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('jerome@email.com');
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setUsername('Jeje');
        $this->addReference('use5', $user);
        $userManager->updateUser($user, true);



        $user = $userManager->createUser();
        $user->setPlainPassword('1234');
        $user->setEnabled(true);
        $user->setEmail('celine@email.com');
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setUsername('Celine');
        $this->addReference('user6', $user);
        $userManager->updateUser($user, true);




        

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