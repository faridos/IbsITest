<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Questionnaire;
use AppBundle\Form\QuestionnaireType;

/**
 * Questionnaire controller.
 *
 * @Route("/questionnaire")
 */
class QuestionnaireController extends Controller
{
    /**
     * Lists all Questionnaire entities.
     *
     * @Route("/", name="questionnaire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questionnaires = $em->getRepository('AppBundle:Questionnaire')->findAll();

        return $this->render('questionnaire/index.html.twig', array(
            'questionnaires' => $questionnaires,
        ));
    }

    /**
     * Creates a new Questionnaire entity.
     *
     * @Route("/new", name="questionnaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $questionnaire = new Questionnaire();
        $form = $this->createForm('AppBundle\Form\QuestionnaireType', $questionnaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($questionnaire);
            $em->flush();

            return $this->redirectToRoute('questionnaire_show', array('id' => $questionnaire->getId()));
        }

        return $this->render('questionnaire/new.html.twig', array(
            'questionnaire' => $questionnaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Questionnaire entity.
     *
     * @Route("/{id}", name="questionnaire_show")
     * @Method("GET")
     */
    public function showAction(Questionnaire $questionnaire)
    {
        $deleteForm = $this->createDeleteForm($questionnaire);

        return $this->render('questionnaire/show.html.twig', array(
            'questionnaire' => $questionnaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Questionnaire entity.
     *
     * @Route("/{id}/edit", name="questionnaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Questionnaire $questionnaire)
    {
        $deleteForm = $this->createDeleteForm($questionnaire);
        $editForm = $this->createForm('AppBundle\Form\QuestionnaireType', $questionnaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($questionnaire);
            $em->flush();

            return $this->redirectToRoute('questionnaire_edit', array('id' => $questionnaire->getId()));
        }

        return $this->render('questionnaire/edit.html.twig', array(
            'questionnaire' => $questionnaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Questionnaire entity.
     *
     * @Route("/{id}", name="questionnaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Questionnaire $questionnaire)
    {
        $form = $this->createDeleteForm($questionnaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($questionnaire);
            $em->flush();
        }

        return $this->redirectToRoute('questionnaire_index');
    }

    /**
     * Creates a form to delete a Questionnaire entity.
     *
     * @param Questionnaire $questionnaire The Questionnaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Questionnaire $questionnaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questionnaire_delete', array('id' => $questionnaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
