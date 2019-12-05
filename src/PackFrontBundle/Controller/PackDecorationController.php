<?php

namespace PackFrontBundle\Controller;

use PackFrontBundle\Entity\PackDecoration;
use PackFrontBundle\PackFrontBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Packdecoration controller.
 *
 */
class PackDecorationController extends Controller
{
    /**
     * Lists all packDecoration entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cat = $request->get('cat');
        if($cat == null)
            $packDecorations = $em->getRepository('BddBundle:PackDecoration')->findAll();
        else
            $packDecorations = $em->getRepository('BddBundle:PackDecoration')->findByCategory($cat);
        return $this->render('@PackFront/packdecoration/index.html.twig', array(
            'packDecorations' => $packDecorations,
        ));
    }

    /**
     * Creates a new packDecoration entity.
     *
     */
    public function newAction(Request $request)
    {
        $packDecoration = new Packdecoration();
        $form = $this->createForm('PackFrontBundle\Form\PackDecorationType', $packDecoration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($packDecoration);
            $em->flush();

            return $this->redirectToRoute('_show', array('id' => $packDecoration->getId()));
        }

        return $this->render('@PackFront/packdecoration/new.html.twig', array(
            'packDecoration' => $packDecoration,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a packDecoration entity.
     *
     */
    public function showAction(PackDecoration $packDecoration)
    {
        $em = $this->getDoctrine()->getManager() ;
        $packData = $em->getRepository(\BddBundle\Entity\PackDecoration::class)->findPacksByMaximumQteProduit($packDecoration->getId());
        $packs = array() ;
        foreach ($packData as $packDatum){
            $pack = $em->getRepository(PackDecoration::class)->find($packDatum->getId());
            array_push($packs,$pack) ;
        }
        $deleteForm = $this->createDeleteForm($packDecoration);

        return $this->render('@PackFront/packdecoration/show.html.twig', array(
            'packDecoration' => $packDecoration,
            'delete_form' => $deleteForm->createView(),
            'packs' => $packs
        ));
    }

    /**
     * Displays a form to edit an existing packDecoration entity.
     *
     */
    public function editAction(Request $request, PackDecoration $packDecoration)
    {
        $deleteForm = $this->createDeleteForm($packDecoration);
        $editForm = $this->createForm('PackFrontBundle\Form\PackDecorationType', $packDecoration);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('_edit', array('id' => $packDecoration->getId()));
        }

        return $this->render('@PackFront/packdecoration/edit.html.twig', array(
            'packDecoration' => $packDecoration,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a packDecoration entity.
     *
     */
    public function deleteAction(Request $request, PackDecoration $packDecoration)
    {
        $form = $this->createDeleteForm($packDecoration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($packDecoration);
            $em->flush();
        }

        return $this->redirectToRoute('_index');
    }

    /**
     * Creates a form to delete a packDecoration entity.
     *
     * @param PackDecoration $packDecoration The packDecoration entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PackDecoration $packDecoration)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_delete', array('id' => $packDecoration->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
