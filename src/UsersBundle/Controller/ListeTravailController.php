<?php

namespace UsersBundle\Controller;


use BddBundle\Entity\ListeTravail;
use BddBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Listetravail controller.
 *
 */
class ListeTravailController extends Controller
{
    /**
     * Lists all listeTravail entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listeTravails = $em->getRepository('BddBundle:ListeTravail')->findAll();

        return $this->render('@Users/Default/index.html.twig', array(
            'listeTravails' => $listeTravails,
        ));
    }

    /**
     * Creates a new listeTravail entity.
     *
     */
    public function newAction(Request $request)
    {
        $listeTravail = new Listetravail();
        $im = $listeTravail->setImage('');
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();


       if($request->isMethod("POST") && $request->request->has("ajouter")) {

           $file = $request->files->get("kt_apps_user_add_user_avatar");
           $newImageName=md5(uniqid()).'.'.$file->guessExtension();
           $file->move($this->getParameter('travail_images'),$newImageName);
            $listeTravail->setImage($newImageName);
            $listeTravail->setDescriptionTravail($request->get("description"));
            $listeTravail->setDateTravail($request->get("date"));
            $listeTravail->setIduser($user);
            $em->persist($listeTravail);
            $em->flush();
           if($user->getRole()[0]=="ROLE_PAYSAGISTE")

                return $this->redirectToRoute('listetravail_paysagistshow');

           if($user->getRole()[0]=="ROLE_JARDINIER")

               return $this->redirectToRoute('listetravail_show');


       }


        if($user->getRoles()[0]=="ROLE_JARDINIER")
        return $this->render('@Users/listetravail/new.html.twig',array('im'=>$im));

        return $this->render('@Users/listetravail/newPaysagiste.html.twig',array('im'=>$im));
    }

    /**
     * Finds and displays a listeTravail entity.
     *
     */
    public function showAction()
    {
        $users = $this->container->get('security.token_storage')->getToken()->getUser();
        $id =$users->getId();

        $manager=$this->getDoctrine()->getRepository('BddBundle:ListeTravail');
        $list=$manager->findBy(array('iduser' => $users));


        if($users->getRoles()[0] == "ROLE_JARDINIER")
        return $this->render('@Users/listetravail/show.html.twig', array(
            'liste' => $list,'id'=>$id
            ));
        return $this->render('@Users/listetravail/paysagisteshow.html.twig', array(
            'liste' => $list,'id'=>$id
        ));

    }

    /**
     * Displays a form to edit an existing listeTravail entity.
     *
     */
    public function editAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getdoctrine()->getRepository('BddBundle:ListeTravail');
        $list=$repository->findBy(array('id'=>$id));
        $travail=$list[0];
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        if($request->isMethod("POST") && $request->request->has("ajouter")) {

            $file = $request->files->get("kt_apps_user_add_user_avatar");
            $newImageName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('travail_images'),$newImageName);
            $travail->setImage($newImageName);
            $travail->setDescriptionTravail($request->get("description"));
            $travail->setDateTravail($request->get("date"));
            $em->flush();
            if($user->getRoles()[0] == "ROLE_JARDINIER")
            return $this->redirectToRoute('listetravail_show');

            return $this->redirectToRoute('listetravail_paysagistshow');

            //return $this->forward('UsersBundle:ListeTravail:show');


        }
                if($user->getRoles()[0] == "ROLE_JARDINIER")
            return $this->render('@Users/Admin/ModifierTravail.html.twig',array('travail'=>$travail));

                return $this->render('@Users/Admin/modifierTravailPaysagiste.html.twig',array('travail'=>$travail));
    }

    /**
     * Deletes a listeTravail entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {

        $session=$request->getSession();
        $em=$this->getDoctrine()->getManager();
        $travail=$em->getRepository('BddBundle:ListeTravail')->find($id);
        if($travail)
        {
            $em->remove($travail);
            $em->flush();
            $session->getFlashbag()->add('success','Personne a ete supprimer');
        }


            return $this->forward('UsersBundle:ListeTravail:show');


    }
  public function AfficherJardinierAction()
  {
      $user=new User();
      $repository=$this->getDoctrine()->getRepository('BddBundle:User');

      $users=$repository->findAll();
      return $this->render('@Users/listetravail/frontjardinier.html.twig',array('users'=>$users));
  }
    public function AfficherPaysagisteAction()
    {
        $user=new User();
        $repository=$this->getDoctrine()->getRepository('BddBundle:User');

        $users=$repository->findAll();
        return $this->render('@Users/listetravail/frontpaysagiste.html.twig',array('users'=>$users));
    }
    public function showTravailAction(Request $request,$id)
    {
        $mangerU=$this->getDoctrine()->getRepository('BddBundle:User');
        $user=$mangerU->findBy(array('id'=>$id));
        $nom =$user[0]->getNom();
        $im=$user[0]->getImage();

        $manager=$this->getDoctrine()->getRepository('BddBundle:ListeTravail');
        $list=$manager->findBy(array('iduser' => $user));

        return $this->render('@Users/listetravail/frontTravail.html.twig', array(
            'liste'=> $list,'id'=>$id,'nom'=>$nom,'imageU'=>$im
        ));
    }

    /**
     * Creates a form to delete a listeTravail entity.
     *
     * @param ListeTravail $listeTravail The listeTravail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ListeTravail $listeTravail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listetravail_delete', array('id' => $listeTravail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
