<?php

namespace UsersBundle\Controller;

use UsersBundle\Entity\ListeTravail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

        $listeTravails = $em->getRepository('UsersBundle:ListeTravail')->findAll();

        return $this->render('listetravail/index.html.twig', array(
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
        $form = $this->createForm('UsersBundle\Form\ListeTravailType', $listeTravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listeTravail);
            $em->flush();

            return $this->redirectToRoute('listetravail_show', array('id' => $listeTravail->getId(),
                'form'=>$form->createView()));
        }

        return $this->render('@Users/listetravail/new.html.twig', array(
            'listeTravail' => $listeTravail,'form'=>$form->createView()

        ));
    }

    /**
     * Finds and displays a listeTravail entity.
     *
     */
    public function showAction(ListeTravail $listeTravail)
    {
        $deleteForm = $this->createDeleteForm($listeTravail);

        return $this->render('@Users/listetravail/show.html.twig', array(
            'listeTravail' => $listeTravail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing listeTravail entity.
     *
     */
    public function editAction(Request $request, ListeTravail $listeTravail)
    {
        $deleteForm = $this->createDeleteForm($listeTravail);
        $editForm = $this->createForm('UsersBundle\Form\ListeTravailType', $listeTravail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listetravail_edit', array('id' => $listeTravail->getId()));
        }

        return $this->render('listetravail/edit.html.twig', array(
            'listeTravail' => $listeTravail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a listeTravail entity.
     *
     */
    public function deleteAction(Request $request, ListeTravail $listeTravail)
    {
        $form = $this->createDeleteForm($listeTravail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listeTravail);
            $em->flush();
        }

        return $this->redirectToRoute('listetravail_index');
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
