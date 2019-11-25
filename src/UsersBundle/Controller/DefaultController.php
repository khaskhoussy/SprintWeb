<?php

namespace UsersBundle\Controller;

use BddBundle\Entity\User;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class DefaultController extends Controller
{




    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //return $this->render('@Users/Admin/ListeJardinier.html.twig');
        $encoderFactory = $this->container->get("security.encoder_factory");
        $user = new User() ;
        $user->setPlainPassword("ffrfrfrfrfrf");
        $user->setUsername("frfrrfrfrfrfrf");
        $user->setUsernameCanonical("frfrrfrfrfrfrf");
        $user->setEmail("frfrfrrfrfrfr@vrrvrgrgrgr.com");
        $user->setEmailCanonical("frfrfrrfrfrfr@vrrvrgrgrgr.com");
        $user->setNom("frfrfrfrf");
        $user->setPrenom("frfrfrfrf");
        $user->setTelephone(25555555);
        $user->setEnabled(1);
        $user->setImage("frfrfrfrfrfr");
        $user->addRole("ROLE_EXPERT");
        $encoder = $encoderFactory->getEncoder($user);

                if ($encoder instanceof BCryptPasswordEncoder) {
                    $user->setSalt(null);
                } else {
                    $salt = rtrim(str_replace('+', '.', bse64_encode(random_bytes(32))), '=');
                    $user->setSalt($salt);
                }

        $hashedPassword = $encoder->encodePassword($user->getPlainPassword(), $user->getSalt());
        $user->setPassword($hashedPassword);
        $user->eraseCredentials();
        $em->persist($user);
        $em->flush();
        return new Response($user->getPassword());
    }
}
