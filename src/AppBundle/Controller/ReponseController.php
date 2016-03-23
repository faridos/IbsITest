<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Reponse;
use AppBundle\Form\ReponseType;

/**
 * Reponse controller.
 *
 * @Route("/reponse")
 */
class ReponseController extends Controller
{
    /**
     * Lists all Reponse entities.
     *
     * @Route("/", name="reponse_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reponses = $em->getRepository('AppBundle:Reponse')->findAll();

        return $this->render('reponse/index.html.twig', array(
            'reponses' => $reponses,
        ));
    }

    /**
     * Creates a new Reponse entity.
     *
     * @Route("/new", name="reponse_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reponse = new Reponse();
        $form = $this->createForm('AppBundle\Form\ReponseType', $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('reponse_show', array('id' => $reponse->getId()));
        }

        return $this->render('reponse/new.html.twig', array(
            'reponse' => $reponse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reponse entity.
     *
     * @Route("/{id}", name="reponse_show")
     * @Method("GET")
     */
    public function showAction(Reponse $reponse)
    {
        $deleteForm = $this->createDeleteForm($reponse);

        return $this->render('reponse/show.html.twig', array(
            'reponse' => $reponse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reponse entity.
     *
     * @Route("/{id}/edit", name="reponse_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reponse $reponse)
    {
        $deleteForm = $this->createDeleteForm($reponse);
        $editForm = $this->createForm('AppBundle\Form\ReponseType', $reponse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('reponse_edit', array('id' => $reponse->getId()));
        }

        return $this->render('reponse/edit.html.twig', array(
            'reponse' => $reponse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Reponse entity.
     *
     * @Route("/{id}", name="reponse_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reponse $reponse)
    {
        $form = $this->createDeleteForm($reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reponse);
            $em->flush();
        }

        return $this->redirectToRoute('reponse_index');
    }

    /**
     * Creates a form to delete a Reponse entity.
     *
     * @param Reponse $reponse The Reponse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reponse $reponse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reponse_delete', array('id' => $reponse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
