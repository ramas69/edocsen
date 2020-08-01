<?php

namespace App\Controller;

use App\Entity\ExtraitNaissance;
use App\Form\ExtraitNaissanceType;
use App\Repository\ExtraitNaissanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("naissance")
 */
class ExtraitNaissanceController extends AbstractController
{
    /**
     * @Route("/", name="extrait_naissance_index", methods={"GET"})
     */
    public function index(ExtraitNaissanceRepository $extraitNaissanceRepository): Response
    {
        return $this->render('extrait_naissance/index.html.twig', [
            'extrait_naissances' => $extraitNaissanceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="extrait_naissance_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $extraitNaissance = new ExtraitNaissance();
        $form = $this->createForm(ExtraitNaissanceType::class, $extraitNaissance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($extraitNaissance);
            $entityManager->flush();

            return $this->redirectToRoute('extrait_naissance_index');
        }

        return $this->render('extrait_naissance/new.html.twig', [
            'extrait_naissance' => $extraitNaissance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="extrait_naissance_show", methods={"GET"})
     */
    public function show(ExtraitNaissance $extraitNaissance): Response
    {
        return $this->render('extrait_naissance/show.html.twig', [
            'extrait_naissance' => $extraitNaissance,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="extrait_naissance_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ExtraitNaissance $extraitNaissance): Response
    {
        $form = $this->createForm(ExtraitNaissanceType::class, $extraitNaissance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('extrait_naissance_index');
        }

        return $this->render('extrait_naissance/edit.html.twig', [
            'extrait_naissance' => $extraitNaissance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="extrait_naissance_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ExtraitNaissance $extraitNaissance): Response
    {
        if ($this->isCsrfTokenValid('delete'.$extraitNaissance->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($extraitNaissance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('extrait_naissance_index');
    }
}
