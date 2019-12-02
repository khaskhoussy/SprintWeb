<?php


namespace UsercomBundle\Controller;


use BddBundle\Entity\Evenement;
use BddBundle\Entity\EventComments;
use BddBundle\Repository\EvenementRepository;
use DateTime;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UsercomController extends Controller
{


    public function listuserAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evenements = $em->getRepository('BddBundle:Evenement')->findAll();

        return $this->render('@Usercom/voir.html.twig', array(
            'evenements' => $evenements,
        ));
    }



    public function showdetailedAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $p=$em->getRepository('BddBundle:Evenement')->find($id);
        return $this->render('@Usercom/details.html.twig', array(
            'event'=>$p,
        ));
    }


    public function addCommentAction(Request $request)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $event = $this->getDoctrine()
            ->getRepository(Evenement::class)
            ->find($request->request->get('idevenement'));

        $comment = new EventComments();

        $comment->setIduser($user);
        $comment->setIdevenement($event);
        $comment->setContenu($request->request->get('comment'));
        $comment->setDate(new DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($comment);
        $em->flush();

     ;

        return $this->redirectToRoute("detailed_post",array('id'=>$event->getId()));

    }

    public function deleteCommentAction(Request $request)
    {
        $id = $request->get('id');
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em= $this->getDoctrine()->getManager();
        $comment=$em->getRepository(EventComments::class)->find($id);
        if($user->getId() == $comment->getIdUser()->getId()){
            $em->remove($comment);
            $em->flush();
        }
        return $this->redirectToRoute('detailed_post',array('id'=>$comment->getIdevenement()->getId()));
    }




    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $events =  $em->getRepository(Evenement::class)->findEntitiesByString($requestString);
        if(!$events) {
            $result['events']['error'] = "Post Not found :( ";
        } else {
            $result['events'] = $this->getRealEntities($events);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($events){
        foreach ($events as $event){
            $realEntities[$event->getId()] = [$event->getImage(),$event->getNom()];

        }
        return $realEntities;
    }

}