<?php

namespace App\Controller;

use App\Entity\Deces;
use App\Form\DecesType;
use App\Repository\DecesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/deces")
 */
class DecesController extends AbstractController
{
    /**
     * @Route("/", name="deces_index", methods={"GET"})
     */
    public function index(DecesRepository $decesRepository): Response
    {
        return $this->render('deces/index.html.twig', [
            'deces' => $decesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="deces_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dece = new Deces();
        $form = $this->createForm(DecesType::class, $dece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dece);
            $entityManager->flush();

            return $this->redirectToRoute('deces_index');
        }

        return $this->render('deces/new.html.twig', [
            'dece' => $dece,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="deces_show", methods={"GET"})
     */
    public function show(Deces $dece): Response
    {
        return $this->render('deces/show.html.twig', [
            'dece' => $dece,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="deces_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Deces $dece): Response
    {
        $form = $this->createForm(DecesType::class, $dece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('deces_index');
        }

        return $this->render('deces/edit.html.twig', [
            'dece' => $dece,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="deces_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Deces $dece): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dece->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dece);
            $entityManager->flush();
        }

        return $this->redirectToRoute('deces_index');
    }
}
