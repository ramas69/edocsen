<?php

namespace App\Controller;

use App\Entity\Casier;
use App\Form\CasierType;
use App\Repository\CasierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/casier")
 */
class CasierController extends AbstractController
{
    /**
     * @Route("/", name="casier_index", methods={"GET"})
     */
    public function index(CasierRepository $casierRepository): Response
    {
        return $this->render('casier/index.html.twig', [
            'casiers' => $casierRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="casier_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $casier = new Casier();
        $form = $this->createForm(CasierType::class, $casier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($casier);
            $entityManager->flush();

            return $this->redirectToRoute('casier_index');
        }

        return $this->render('casier/new.html.twig', [
            'casier' => $casier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="casier_show", methods={"GET"})
     */
    public function show(Casier $casier): Response
    {
        return $this->render('casier/show.html.twig', [
            'casier' => $casier,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="casier_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Casier $casier): Response
    {
        $form = $this->createForm(CasierType::class, $casier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('casier_index');
        }

        return $this->render('casier/edit.html.twig', [
            'casier' => $casier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="casier_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Casier $casier): Response
    {
        if ($this->isCsrfTokenValid('delete'.$casier->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($casier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('casier_index');
    }
}
