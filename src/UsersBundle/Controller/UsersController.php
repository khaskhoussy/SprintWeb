<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use BddBundle\Entity\User;
use UsersBundle\Form\UserType;
use UsersBundle\Form\UserTypeUpdate;

class UsersController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function addAction(Request $request){
        $user= new User();
        $user->addRole('');
        $form=$this->createForm(UserType::class,$user,array('action'=>$this->generateUrl('users_add')));
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file=$form['image']->getData();
            $user = $form->getData();
            $user->setPlainPassword($form['password']->getData());
            $user->setUsernameCanonical($user->getUsername());
            $user->setEmailCanonical($user->getEmail());
            $user->setEnabled(true);
            $newImageName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('users_images'),$newImageName);
            $user->setImage($newImageName);

            $encoderFactory = $this->container->get("security.encoder_factory");

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
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("users_afficherJardinier");
        }

        return $this->render('@Users/Admin/AjoutUsers.html.twig',array('form'=>$form->createView()));

    }
        public function AficherstaffAction()
        {    $repository=$this->getDoctrine()->getRepository('UsersBundle:User');
            $user=$repository->findAll();
            return $this->render('@Users/Admin/AfficherEmployees.html.twig',
                array('users'=>$user));
        }
    public function AficherAdminAction()
    {    $repository=$this->getDoctrine()->getRepository('UsersBundle:User');
        $user=$repository->findAll();
        return $this->render('@Users/Admin/AfficherAdmin.html.twig',
            array('users'=>$user));
    }
    public function AficherPaysagisteAction()
    {    $repository=$this->getDoctrine()->getRepository('UsersBundle:User');
        $user=$repository->findAll();
        return $this->render('@Users/Admin/AfficherPaysagiste.html.twig',
            array('users'=>$user));
    }
    public function AficherExpertAction()
    {    $repository=$this->getDoctrine()->getRepository('UsersBundle:User');
        $user=$repository->findAll();
        return $this->render('@Users/Admin/AfficherExpert.html.twig',
            array('users'=>$user));
    }
    public function AficherClientAction()
    {    $repository=$this->getDoctrine()->getRepository('UsersBundle:User');
        $user=$repository->findAll();
        return $this->render('@Users/Admin/AfficherClient.html.twig',
            array('users'=>$user));
    }
    public function deleteAction(Request $request,$id)
    {
        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        $personne=$em->getRepository('UsersBundle:User')->find($id);
        if($personne)
        {
            $em->remove($personne);
            $em->flush();
            $session->getFlashbag()->add('success','Personne a ete supprimer');
        }
        else{
            $session->getFlashbag()->add('error','Personne inexistante');
        }
        if($personne->getRoles()[0] == 'ROLE_JARDINIER')
        return $this->forward('UsersBundle:Users:Aficherstaff');
        else if($personne->getRoles()[0] == 'ROLE_EXPERT')
            return $this->forward('UsersBundle:Users:AficherExpert');
        else if($personne->getRoles()[0] == 'ROLE_PAYSAGISTE')
            return $this->forward('UsersBundle:Users:AficherPaysagiste');
        else if($personne->getRoles()[0] == 'ROLE_CLIENT')
            return $this->forward('UsersBundle:Users:AficherClient');
    }
    public function ProfileAction(Request $request)
    {
        $notif = "" ;
        $em=$this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $im = $user->getImage();
        $form=$this->createFormBuilder($user)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('telephone', NumberType::class)
            ->add('Modifier',SubmitType::class)
            ->getForm();

        if($request->isMethod("POST") && $request->files->has("profile_avatar")) {
            $file = $request->files->get("profile_avatar");
            $newImageName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('users_images'),$newImageName);
            $user->setImage($newImageName);
            $em->flush();
            return new Response($newImageName);
        }

        if($request->isMethod("POST") && $request->request->has("changePassword")) {

            $notif = "" ;
            $password = $request->get("currentPassword");
            $newPassword = $request->get("newPassword");
            $verifPassword = $request->get("verifPassword");

            $encoderFactory = $this->container->get("security.encoder_factory");
            $encoder = $encoderFactory->getEncoder($user);

            if ($encoder instanceof BCryptPasswordEncoder) {
                $user->setSalt(null);
            } else {
                $salt = rtrim(str_replace('+', '.', bse64_encode(random_bytes(32))), '=');
                $user->setSalt($salt);
            }

            if($encoder->isPasswordValid($user->getPassword(),$password,null) && $newPassword == $verifPassword ) {
                $hashedPassword = $encoder->encodePassword($newPassword, $user->getSalt());
                $user->setPassword($hashedPassword);
                $user->eraseCredentials();
                $em->flush();
                $notif="Password changed" ;
            }
            else
                $notif="Invalid current password" ;
        }
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $em->flush();
            return $this->redirectToRoute("users_ProfileAdmin");
        }
        return $this->render('@Users/Admin/profile.html.twig',array('username'=>$user->getUsername(),'im'=>$im,'users'=>$user,'form'=>$form->createView()
        ,'notif'=>$notif));
    }


}
