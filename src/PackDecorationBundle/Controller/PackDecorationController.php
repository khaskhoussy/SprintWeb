<?php

namespace PackDecorationBundle\Controller;

use BddBundle\Entity\LignePack;
use BddBundle\Entity\Produit;
use BddBundle\Entity\PackDecoration;
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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $packDecorations = $em->getRepository('PackDecorationBundle:PackDecoration')->findAll();

        return $this->render('@PackDecoration/packdecoration/index.html.twig', array(
            'packDecorations' => $packDecorations,
        ));
    }

    /**
     * Creates a new packDecoration entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produitList = $em->getRepository(Produit::class)->findAll();
        $packDecoration = new Packdecoration();
        $form = $this->createForm('PackDecorationBundle\Form\PackDecorationType', $packDecoration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$form['imagePack']->getData();
            $newImageName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('packs_images'),$newImageName);
            $packDecoration->setImagePack($newImageName);
            $em->persist($packDecoration);
            $liste = $request->request->get("produits");
            foreach ($liste as $input) {
                $data = json_decode($input);
                $produit = $em->getRepository(Produit::class)->find($data->{'id'});
                $lignePack = new LignePack();
                $lignePack->setIdproduit($produit);
                $lignePack->setIdpack($packDecoration);
                $lignePack->setQuantitePack($data->{'qte'});
                $lignePack->setDescriptionPack($data->{'description'});
                $em->persist($lignePack);
            }
            $em->flush();

            return $this->redirectToRoute('back_paysagiste_show', array('id' => $packDecoration->getId()));
        }

        return $this->render('@PackDecoration/packdecoration/new.html.twig', array(
            'packDecoration' => $packDecoration,
            'produits'=>$produitList,
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
        $packs = $em->getRepository(\BddBundle\Entity\PackDecoration::class)->findPacksByMaximumQteProduit($packDecoration->getId());
        $ids = "" ;
        foreach ($packs as $pack) {
            $ids = $ids."-".$pack->getId();
        }
        return new Response($ids);
        $deleteForm = $this->createDeleteForm($packDecoration);

        return $this->render('@PackDecoration/packdecoration/show.html.twig', array(
            'packDecoration' => $packDecoration,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing packDecoration entity.
     *
     */
    public function editAction(Request $request, PackDecoration $packDecoration)
    {
        $deleteForm = $this->createDeleteForm($packDecoration);
        $editForm = $this->createForm('PackDecorationBundle\Form\PackDecorationType', $packDecoration);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back_paysagiste_edit', array('id' => $packDecoration->getId()));
        }

        return $this->render('@PackDecoration/packdecoration/edit.html.twig', array(
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

        return $this->redirectToRoute('back_paysagiste_index');
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
            ->setAction($this->generateUrl('back_paysagiste_delete', array('id' => $packDecoration->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
