<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Admin;
use App\Entity\Utilisateur;
use App\Entity\Service;
use App\Form\CreerAdminType;
use App\Form\CreerUtilisateurType;
use App\Form\ModifAdminType;
use App\Form\ModifUtilisateurType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\AdminRepository;
use App\Repository\UtilisateurRepository;


class BackOfficeController extends AbstractController
{
    /**
     * @Route("/backoffice", name="back_office")
     */
    public function index()
    {
        
        $repository=$this->getDoctrine()->getRepository(Admin::class);
        $lesAdmin=$repository->findAll();

        $repository=$this->getDoctrine()->getRepository(Utilisateur::class);
        $lesUtilisateurs=$repository->findAll();

        return $this->render('back_office/index.html.twig', ['lesAdmin' => $lesAdmin, 'lesUtilisateurs' => $lesUtilisateurs]);
    }

    /**
     * @Route("/backoffice/creerAdmin", name="creerAdmin")
     */
    public function creerAdmin(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $admin=new Admin;
        $form=$this->createForm(CreerAdminType::class,$admin);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($admin);
            $entityManager->flush();
            return $this->redirectToRoute('menu');

        }

        return $this->render('/back_office/ajouterAdmin.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/backoffice/creerUtilisateur", name="creerUtilisateur")
     */
    public function creerUtilisateur(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $utilisateur=new Utilisateur;

        $repository=$this->getDoctrine()->getRepository(Service::class);
        $services=$repository->findAll();

        $form=$this->createForm(CreerUtilisateurType::class,$utilisateur);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($utilisateur);
            $entityManager->flush();
            return $this->redirectToRoute('menu');

        }

        return $this->render('/back_office/ajouterUtilisateur.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/backoffice/supprimerAdmin/{idAdmin}", name="supprimerAdmin", methods="DELETE")
     */
    public function supprimerAdmin($idAdmin, Request $request)
    {
        if($this->isCsrfTokenValid('delete'.$idAdmin, $request->request->get('_token')))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository(Admin::class);
            $admin = $repository->find($idAdmin);
            $entityManager->remove($admin);
            $entityManager->flush();
          
        }
        
        return $this->redirectToRoute("back_office");  
    }

  
    /**
     * @Route("/backoffice/supprimerUtilisateur/{idUtilisateur}", name="supprimerUtilisateur", methods="DELETE")
     */
    public function supprimerUtilisateur($idUtilisateur, Request $request)
    {
        if($this->isCsrfTokenValid('delete'.$idUtilisateur, $request->request->get('_token')))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
            $utilisateur = $repository->find($idUtilisateur);
            $entityManager->remove($utilisateur);
            $entityManager->flush();
          
        }
        
        return $this->redirectToRoute("back_office");  
    }

    /**
     * @Route("/backoffice/modifierAdmin/{idAdmin}", name="modifierAdmin")
     */
    public function modifierAdmin($idAdmin, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Admin::class);
        $admin = $repository->find($idAdmin);
        $form=$this->createForm(ModifAdminType::class,$admin);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            
            $entityManager->flush();
            return $this->redirectToRoute('back_office');

        }
        return $this->render('/back_office/modifierAdmin.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/backoffice/modifierUtilisateur/{idUtilisateur}", name="modifierUtilisateur")
     */
    public function modifierUtilisateur($idUtilisateur, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateur = $repository->find($idUtilisateur);
        $form=$this->createForm(ModifUtilisateurType::class,$utilisateur);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            
            $entityManager->flush();
            return $this->redirectToRoute('back_office');

        }
        return $this->render('/back_office/modifierUtilisateur.html.twig', ['form' => $form->createView()]);
    }
}
