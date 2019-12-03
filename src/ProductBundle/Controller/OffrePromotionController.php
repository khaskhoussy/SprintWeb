<?php

namespace ProductBundle\Controller;

use BddBundle\Entity\OffrePromotion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Offrepromotion controller.
 *
 */
class OffrePromotionController extends Controller
{
    /**
     * Lists all offrePromotion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offrePromotions = $em->getRepository('BddBundle:OffrePromotion')->findAll();

        return $this->render('@Product/offrepromotion/index.html.twig', array(
            'offrePromotions' => $offrePromotions,
        ));
    }

    /**
     * Creates a new offrePromotion entity.
     *
     */
    public function newAction(Request $request)
    {
        $offrePromotion = new Offrepromotion();
        $form = $this->createForm('ProductBundle\Form\OffrePromotionType', $offrePromotion);
        $em=$this->getDoctrine()->getManager();
        $form->handleRequest($request);
        foreach ($offrePromotion->getProducts() as $product){
            $offrePromotion->addProduit($product);
            $product->setPrixOffre($product->getPrixProd() - (($product->getPrixProd()) * ($offrePromotion->getPourcentage())));
            $em->persist($product);
            $em->flush();
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($offrePromotion);
            $em->flush();

            return $this->redirectToRoute('offre_show', array('id' => $offrePromotion->getId()));
        }

        return $this->render('@Product/offrepromotion/new.html.twig', array(
            'offrePromotion' => $offrePromotion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a offrePromotion entity.
     *
     */
    public function showAction(OffrePromotion $offrePromotion)
    {
        $deleteForm = $this->createDeleteForm($offrePromotion);

        return $this->render('@Product/offrepromotion/show.html.twig', array(
            'offrePromotion' => $offrePromotion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing offrePromotion entity.
     *
     */
    public function editAction(Request $request, OffrePromotion $offrePromotion)
    {
        $deleteForm = $this->createDeleteForm($offrePromotion);
        $editForm = $this->createForm('ProductBundle\Form\OffrePromotionType', $offrePromotion);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offre_edit', array('id' => $offrePromotion->getId()));
        }

        return $this->render('@Product/offrepromotion/edit.html.twig', array(
            'offrePromotion' => $offrePromotion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a offrePromotion entity.
     *
     */
    public function deleteAction(Request $request, OffrePromotion $offrePromotion)
    {
        $form = $this->createDeleteForm($offrePromotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($offrePromotion);
            $em->flush();
        }

        return $this->redirectToRoute('offre_index');
    }

    /**
     * Creates a form to delete a offrePromotion entity.
     *
     * @param OffrePromotion $offrePromotion The offrePromotion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OffrePromotion $offrePromotion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offre_delete', array('id' => $offrePromotion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
