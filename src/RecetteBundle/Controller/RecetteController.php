<?php

namespace RecetteBundle\Controller;

use BddBundle\Entity\Recette;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Recette controller.
 *
 */
class RecetteController extends Controller
{
    /**
     * Lists all recette entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recettes = $em->getRepository('BddBundle:Recette')->findAll();

        return $this->render('@Recette/recette/index.html.twig', array(
            'recettes' => $recettes,
        ));
    }

    /**
     * Creates a new recette entity.
     *
     */
    public function newAction(Request $request)
    {
        $recette = new Recette();
        $form = $this->createForm('RecetteBundle\Form\RecetteType', $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recette);
            $em->flush();

            return $this->redirectToRoute('back_expert_show', array('id' => $recette->getId()));
        }

        return $this->render('@Recette/recette/new.html.twig', array(
            'recette' => $recette,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a recette entity.
     *
     */
    public function showAction(Recette $recette)
    {
        $deleteForm = $this->createDeleteForm($recette);

        return $this->render('@Recette/recette/show.html.twig', array(
            'recette' => $recette,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recette entity.
     *
     */
    public function editAction(Request $request, Recette $recette)
    {
        $deleteForm = $this->createDeleteForm($recette);
        $editForm = $this->createForm('RecetteBundle\Form\RecetteType', $recette);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back_expert_edit', array('id' => $recette->getId()));
        }

        return $this->render('@Recette/recette/edit.html.twig', array(
            'recette' => $recette,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recette entity.
     *
     */
    public function deleteAction(Request $request, Recette $recette)
    {
        $form = $this->createDeleteForm($recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recette);
            $em->flush();
        }

        return $this->redirectToRoute('back_expert_index');
    }

    /**
     * Creates a form to delete a recette entity.
     *
     * @param Recette $recette The recette entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Recette $recette)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('back_expert_delete', array('id' => $recette->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
