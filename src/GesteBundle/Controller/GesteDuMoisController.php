<?php

namespace GesteBundle\Controller;

use GesteBundle\Entity\GesteDuMois;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Gestedumois controller.
 *
 */
class GesteDuMoisController extends Controller
{
    /**
     * Lists all gesteDuMois entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gesteDuMois = $em->getRepository('GesteBundle:GesteDuMois')->findAll();

        return $this->render('@Geste/gestedumois/index.html.twig', array(
            'gesteDuMois' => $gesteDuMois,
        ));
    }

    /**
     * Creates a new gesteDuMois entity.
     *
     */
    public function newAction(Request $request)
    {
        $gesteDuMois = new Gestedumois();
        $form = $this->createForm('GesteBundle\Form\GesteDuMoisType', $gesteDuMois);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$form['imageGeste']->getData();
            $newImageName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('gestes_images'),$newImageName);
            $gesteDuMois->setImageGeste($newImageName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($gesteDuMois);
            $em->flush();

            return $this->redirectToRoute('back_jardinier_geste_show', array('id' => $gesteDuMois->getId()));
        }

        return $this->render('@Geste/gestedumois/new.html.twig', array(
            'gesteDuMois' => $gesteDuMois,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gesteDuMois entity.
     *
     */
    public function showAction(GesteDuMois $gesteDuMois)
    {
        $deleteForm = $this->createDeleteForm($gesteDuMois);

        return $this->render('@Geste/gestedumois/show.html.twig', array(
            'gesteDuMois' => $gesteDuMois,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gesteDuMois entity.
     *
     */
    public function editAction(Request $request, GesteDuMois $gesteDuMois)
    {
        $deleteForm = $this->createDeleteForm($gesteDuMois);
        $editForm = $this->createForm('GesteBundle\Form\GesteDuMoisType', $gesteDuMois);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $file=$editForm['imageGeste']->getData();
            $newImageName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('gestes_images'),$newImageName);
            $gesteDuMois->setImageGeste($newImageName);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back_jardinier_geste_edit', array('id' => $gesteDuMois->getId()));
        }

        return $this->render('@Geste/gestedumois/edit.html.twig', array(
            'gesteDuMois' => $gesteDuMois,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gesteDuMois entity.
     *
     */
    public function deleteAction(Request $request, GesteDuMois $gesteDuMois)
    {
        $form = $this->createDeleteForm($gesteDuMois);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gesteDuMois);
            $em->flush();
        }

        return $this->redirectToRoute('back_jardinier_geste_index');
    }

    /**
     * Creates a form to delete a gesteDuMois entity.
     *
     * @param GesteDuMois $gesteDuMois The gesteDuMois entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GesteDuMois $gesteDuMois)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('back_jardinier_geste_delete', array('id' => $gesteDuMois->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
