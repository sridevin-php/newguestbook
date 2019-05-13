<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
	
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
	/**
	*@Route("/logout",name="logout")
	*/
	public function logout(){
		
	}
	public function guestpage(){
		
	}
	
	/**
     * @Route("/login_check", name="login_check")
     */
    public function login_check() {}
	
	 /**
     * @Route("/admin")
     */
	
	public function admin()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
