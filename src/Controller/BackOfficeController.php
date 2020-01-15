<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Entity\Service;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UtilisateurRepository;
use App\Form\AjoutAdminType;
use App\Form\AjoutUtilisateurType;
use App\Form\ModifierAdminType;
use App\Form\ModifierUtilisateurType;

class BackOfficeController extends AbstractController
{
    /**
     * @Route("/backoffice", name="back_office")
     */
    public function index()
    {
        $theUser=$this->getUser();

        $repository=$this->getDoctrine()->getRepository(Utilisateur::class);
        $lesUtilisateurs=$repository->findAll();

        $lesAdmins=$repository->findByAdmin();
        $lesUsers=$repository->findByUser($theUser->getId());

        return $this->render('back_office/index.html.twig', ['lesAdmin' => $lesAdmins, 'lesUtilisateurs' => $lesUsers, 'theUser'=>$theUser]);
    }

    /**
     * @Route("/backoffice/creerAdmin", name="creerAdmin")
     */
    public function creerAdmin(Request $request)
    {
        $theUser=$this->getUser();

        $entityManager = $this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository(Utilisateur::class);
        $user=new Utilisateur;
        $user->setRole(1);
        $superAdmin=$repository->find(0);
        $user->setIdDiriger($superAdmin);
        $form=$this->createForm(AjoutAdminType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($user);
            $entityManager->flush();

            //On affiche une notification
            $this->addFlash('success', 'L\'Admin a bien été modifié !');

            return $this->redirectToRoute('back_office');
        }

        return $this->render('/back_office/gererAdmin.html.twig', ['form' => $form->createView(), 'user' => $user, 'theUser'=>$theUser, 'ajout'=>true]);
    }

    /**
     * @Route("/backoffice/creerUtilisateur", name="creerUtilisateur")
     */
    public function creerUtilisateur(Request $request)
    {
        $theUser=$this->getUser();

        $entityManager = $this->getDoctrine()->getManager();
        $user=new Utilisateur;
        $user->setRole(2);

        $idUserConnecte = $this->getUser()->getId();
        $repository=$this->getDoctrine()->getRepository(Utilisateur::class);
        $admin=$repository->find($idUserConnecte);
        $user->setIdDiriger($admin);

        $repository=$this->getDoctrine()->getRepository(Service::class);
        $services=$repository->findAll();

        $form=$this->createForm(AjoutUtilisateurType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($user);
            $entityManager->flush();

            //On affiche une notification
            $this->addFlash('success', 'L\'utilisateur a bien été créé !');

            return $this->redirectToRoute('back_office');
        }

        return $this->render('/back_office/gererUtilisateur.html.twig', ['form' => $form->createView(), 'user' => $user, 'theUser'=>$theUser, 'ajout'=>true]);
    }

    /**
     * @Route("/backoffice/supprimerAdmin/{id}", name="supprimerAdmin", methods="DELETE")
     */
    public function supprimerAdmin($id, Request $request)
    {
        if($this->isCsrfTokenValid('delete'.$id, $request->request->get('_token')))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
            $admin = $repository->find($id);
            $entityManager->remove($admin);
            $entityManager->flush();
          
            //On affiche une notification
            $this->addFlash('success', 'L\'Admin a bien été supprimé !');
        }
        
        return $this->redirectToRoute("back_office");  
    }

  
    /**
     * @Route("/backoffice/supprimerUtilisateur/{id}", name="supprimerUtilisateur", methods="DELETE")
     */
    public function supprimerUtilisateur($id, Request $request)
    {
        if($this->isCsrfTokenValid('delete'.$id, $request->request->get('_token')))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
            $utilisateur = $repository->find($id);
            $entityManager->remove($utilisateur);
            $entityManager->flush();

            //On affiche une notification
            $this->addFlash('success', 'L\'utilisateur a bien été supprimé !');
          
        }
        
        return $this->redirectToRoute("back_office");  
    }

    /**
     * @Route("/backoffice/modifierAdmin/{id}", name="modifierAdmin")
     */
    public function modifierAdmin($id, Request $request)
    {
        $theUser=$this->getUser();

        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $user = $repository->find($id);
        $form=$this->createForm(ModifierAdminType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            //On affiche une notification
            $this->addFlash('success', 'L\'Admin a bien été modifié !');
            
            $entityManager->flush();
            return $this->redirectToRoute('back_office');

        }
        return $this->render('/back_office/gererAdmin.html.twig', ['form' => $form->createView(), 'user' => $user, 'theUser'=>$theUser, 'ajout'=>false]);
    }

    /**
     * @Route("/backoffice/modifierUtilisateur/{id}", name="modifierUtilisateur")
     */
    public function modifierUtilisateur($id, Request $request)
    {
        $theUser=$this->getUser();

        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $user = $repository->find($id);
        $form=$this->createForm(ModifierUtilisateurType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            //On affiche une notification
            $this->addFlash('success', 'L\'utilisateur a bien été modifié !');
            
            $entityManager->flush();
            return $this->redirectToRoute('back_office');

        }
        return $this->render('/back_office/gererUtilisateur.html.twig', ['form' => $form->createView(), 'user' => $user, 'theUser'=>$theUser, 'ajout'=>false]);
    }
}
