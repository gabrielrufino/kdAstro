<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller {
	/**
	 * @Route("/", name="index")
	 */
	public function index() {
		return $this->render('index.html.twig');
	}
	
	/**
	 * @Route("/register", name="register")
	 */
	public function register(Request $request) {
		$data = array(
			'nome' => $request->request->get('nome'),
			'nascimento' => $request->request->get('nascimento'),
			'cpf' => $request->request->get('cpf'),
			'cep' => $request->request->get('cep'),
			'cidade' => $request->request->get('cidade'),
			'estado' => $request->request->get('estado'),
			'bairro' => $request->request->get('bairro'),
			'endereco' => $request->request->get('endereco'),
			'numero' => $request->request->get('numero'),
			'complemento' => $request->request->get('complemento')
		);

		$success = true;
		if ($success) {
			return $this->redirectToRoute('success');
		} else {
			return $this->redirectToRoute('error');
		}
	}

	/**
	 * @Route("/success", name="success")
	 */
	public function success() {
		return $this->render('success.html.twig');
	}

	/**
	 * @Route("/error", name="error")
	 */
	public function error() {
		return $this->render('error.html.twig');
	}
}
