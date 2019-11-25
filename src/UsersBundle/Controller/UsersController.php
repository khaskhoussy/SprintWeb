<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use UsersBundle\Entity\User;
use UsersBundle\Form\UserType;

class UsersController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function ajoutAction()
    {   $glob=0;
        $users= new User();
        $form=$this->createForm(UserType::class,$users,array('action'=>$this->generateUrl('users_add')));
        return $this->render('UsersBundle:Admin:AjoutUsers.html.twig',
            array('form'=>$form->createView(),'global'=>$glob));
    }

    public function addAction(Request $request){
        $users= new User();
        $form=$this->createForm(UserType::class,$users);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file=$form['image']->getData();
            $newImageName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('users_images'),$newImageName);
            $users->setImage($newImageName);

            $encoderFactory = $this->container->get("security.encoder_factory");
            $user = new \BddBundle\Entity\User() ;
            $user->setPlainPassword($users->getPassword());
            $user->setUsername($users->getUsername());
            $user->setUsernameCanonical($users->getUsername());
            $user->setEmail($users->getEmail());
            $user->setEmailCanonical($users->getEmail());
            $user->setNom($users->getNom());
            $user->setPrenom($users->getPrenom());
            $user->setTelephone($users->getTelephone());
            $user->setEnabled(1);
            $user->setImage($users->getImage());
            $user->addRole($users->getRoles());
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
            //dump($user);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $glob=1;
            $users= new User();
            $form=$this->createForm(UserType::class,$users,array('action'=>$this->generateUrl('users_add')));
            return $this->render('UsersBundle:Admin:AjoutUsers.html.twig',
                array('form'=>$form->createView(),'global'=>$glob));
        }

        die();

    }
        public function AficherstaffAction()
        {    $repository=$this->getDoctrine()->getRepository('UsersBundle:User');
            $user=$repository->findAll();
            return $this->render('@Users/Admin/AfficherEmployees.html.twig',
                array('users'=>$user));
        }

}
