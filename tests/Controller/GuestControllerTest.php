<?php

namespace App\Tests\Controller;

use App\Controller\GuestController;
use PHPUnit\Framework\TestCase;
use App\Entity\Guest;
use App\Form\Guest1Type;
use App\Repository\GuestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/guest")
 */
class GuestControllerTest extends TestCase
{
    /**
     * @Route("/", name="guest_index", methods={"GET"})
     */
    public function testindex(GuestRepository $guestRepository): Response
    {
        return $this->render('guest/index.html.twig', [
            'guests' => $guestRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="guest_new", methods={"GET","POST"})
     */
    public function testnew(Request $request): Response
    {
        $guest = new Guest();
        $form = $this->createForm(Guest1Type::class, $guest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($guest);
            $entityManager->flush();

            return $this->redirectToRoute('guest_index');
        }

        return $this->render('guest/new.html.twig', [
            'guest' => $guest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="guest_show", methods={"GET"})
     */
    public function testshow(Guest $guest): Response
    {
        return $this->render('guest/show.html.twig', [
            'guest' => $guest,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="guest_edit", methods={"GET","POST"})
     */
    public function testedit(Request $request, Guest $guest): Response
    {
        $form = $this->createForm(Guest1Type::class, $guest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('guest_index', [
                'id' => $guest->getId(),
            ]);
        }

        return $this->render('guest/edit.html.twig', [
            'guest' => $guest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="guest_delete", methods={"DELETE"})
     */
    public function testdelete(Request $request, Guest $guest): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guest->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($guest);
            $entityManager->flush();
        }

        return $this->redirectToRoute('guest_index');
    }
}
