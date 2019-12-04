<?php

namespace ForumBundle\Controller;
use BddBundle\Entity\Sujet;
use BddBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Commentaire controller.
 *
 * @Route("commentaire")
 */
class CommentaireController extends Controller
{
    /**
     * Lists all commentaire entities.
     *
     * @Route("/", name="commentaire_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $id = $request->get('sujet');
        $em = $this->getDoctrine()->getManager();
        $commentaire = new Commentaire();
        $form = $this->createForm('ForumBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDatepub(new \DateTime('now'));
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $commentaire->setIdclient($user);
            $sujet = $em->getRepository(Sujet::class)->find($id);
            $commentaire->setIdsujet($sujet);
            //$id = $request->get('sujet');
            //$idsujet =  $request->getIdsujet('id');
            //$commentaire->setIdsujet($this->getIdsujet());
            //$commentaire->setIdsujet($idsujet);



            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('commentaire_show', array('id' => $commentaire->getId()));
        }
        $em->getRepository('ForumBundle:Commentaire')->findAll();

        $query = $em->createQuery(
            "SELECT c FROM BddBundle:Commentaire c  WHERE c.idsujet = :id"
        )->setParameter('id',$id);

        $commentaires = $query->getResult();
        //$request->setIdsujet('id');
        //$this->forward('module', 'action');

        return $this->render('@Forum/commentaire/index.html.twig', array(
            'commentaires' => $commentaires,
            'form' =>$form->createView()
        ));
    }

    /**
     * Creates a new commentaire entity.
     *
     * @Route("/new", name="commentaire_new")
     * @Method({"GET", "POST"})
     */
   /* public function newAction(Request $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm('ForumBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $commentaire->setDatepub(new \DateTime('now'));
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $commentaire->setIdclient($user);
            //$id = $request->get('sujet');
            //$idsujet =  $request->getIdsujet('id');
            //$commentaire->setIdsujet($this->getIdsujet());
           //$commentaire->setIdsujet($idsujet);



            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('commentaire_show', array('id' => $commentaire->getId()));
        }

        return $this->render('@Forum/commentaire/new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
    }*/

    /**
     * Finds and displays a commentaire entity.
     *
     * @Route("/{id}", name="commentaire_show")
     * @Method("GET")
     */
    public function showAction(Commentaire $commentaire)
    {

        $deleteForm = $this->createDeleteForm($commentaire);
        return $this->render('@Forum/commentaire/show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commentaire entity.
     *
     * @Route("/{id}/edit", name="commentaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('ForumBundle\Form\CommentaireType', $commentaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('commentaire_edit', array('id' => $commentaire->getId()));
        }

        return $this->render('@Forum/commentaire/edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commentaire entity.
     *
     * @Route("/{id}", name="commentaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Commentaire $commentaire)
    {
        $form = $this->createDeleteForm($commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();
        }

        return $this->redirectToRoute('commentaire_index');
    }

    /**
     * Creates a form to delete a commentaire entity.
     *
     * @param Commentaire $commentaire The commentaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaire $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaire_delete', array('id' => $commentaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function rechercheAction(Request $request)
    {

        $em = $this->container->get('doctrine')->getEntityManager();

        $produits = $em->getRepository('BddBundle:Produit')->findAll();

        if ($request->getMethod("POST")) {

            $motcle = $request->get('input_recherche');
            $query = $em->createQuery(
                "SELECT p FROM BddBundle:Produit p Join BddBundle:Categorie c WITH p.categorie=c AND c.nomCat LIKE '" . $motcle . "%'"
            );
            $produits = $query->getResult();

            return $this->render('@Product/produit/index.html.twig',
                array(
                    'produits' => $produits
                ));
        }

        return $this->render('@Product/produit/index.html.twig',
            array(
                'produits' => $produits
            ));

    }
    /**
     * Lists all commentaire entities.
     *
     * @Route("/forum")
     * @Method("GET")
     */
    public function indexbackAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('sujet');
        $em->getRepository('ForumBundle:Commentaire')->findAll();

        $query = $em->createQuery(
            "SELECT c FROM BddBundle:Commentaire c  WHERE c.idsujet = :id"
        )->setParameter('id',$id);

        $commentaires = $query->getResult();
        //$request->setIdsujet('id');
        //$this->forward('module', 'action');

        return $this->render('@Forum/commentaire/indexback.html.twig', array(
            'commentaires' => $commentaires,

        ));
    }
}
