<?php

namespace ForumBundle\Controller;
use BddBundle\Entity\Commentaire;
use BddBundle\Entity\User;
use BddBundle\Entity\Sujet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sujet controller.
 *
 * @Route("sujet")
 */
class SujetController extends Controller
{

    /**
     * Lists all sujet entities.
     *
     * @Route("/", name="sujet_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('ForumBundle:Sujet')->createQueryBuilder('bp');
        //$u = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($request->query->getAlnum('filter')) {
            $queryBuilder->where('bp.nomSujet LIKE :title')
                ->setParameter('title', '%' . $request->query->getAlnum('filter') . '%');
        }
        $query = $queryBuilder->getQuery();
        $paginator  = $this->get('knp_paginator');
        $sujets = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit',5)/*limit per page*/
        );

        return $this->render('@Forum/sujet/index.html.twig', array(
            'sujets' => $sujets,
            //'user' => $user,

        ));
    }

    /**
     * Creates a new sujet entity.
     *
     * @Route("/new", name="sujet_new")
     * @Method({"GET", "POST"})
     */

    public function newAction(Request $request)
    {
        $sujet = new Sujet();
        $form = $this->createForm('ForumBundle\Form\SujetType', $sujet);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $sujet->setIduser($user);
            $date = new \DateTime('now') ;
            $sujet->setDatepub($date->format('Y-m-d H:i:s'));
            $em->persist($sujet);
            $em->flush();

            return $this->redirectToRoute('sujet_show', array('id' => $sujet->getId()));
        }

        return $this->render('@Forum/sujet/new.html.twig', array(
            'sujet' => $sujet,
            //'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sujet entity.
     *
     * @Route("/{id}", name="sujet_show")
     * @Method("GET")
     */
    public function showAction(Sujet $sujet)
    {
        $deleteForm = $this->createDeleteForm($sujet);

        return $this->render('@Forum/sujet/show.html.twig', array(
            'sujet' => $sujet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sujet entity.
     *
     * @Route("/{id}/edit", name="sujet_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sujet $sujet)
    {
        $deleteForm = $this->createDeleteForm($sujet);
        $editForm = $this->createForm('ForumBundle\Form\SujetType', $sujet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sujet_edit', array('id' => $sujet->getId()));
        }

        return $this->render('@Forum/sujet/edit.html.twig', array(
            'sujet' => $sujet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sujet entity.
     *
     * @Route("/{id}", name="sujet_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {

            $em = $this->getDoctrine()->getManager();
            $sujet = $em->getRepository(Sujet::class)->find($id);
            $em->remove($sujet);
            $em->flush();


        return $this->redirectToRoute('sujet_index');
    }

    /**
     * Creates a form to delete a sujet entity.
     *
     * @param Sujet $sujet The sujet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sujet $sujet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sujet_delete', array('id' => $sujet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
