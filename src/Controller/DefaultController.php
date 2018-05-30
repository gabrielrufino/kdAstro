<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller {
  public function index() {
    return $this->render('index.html.twig');
	}
	
	public function register(Request $request) {
		$nome = $request->request->get('nome');
		$nascimento = $request->request->get('nascimento');
		$cpf = $request->request->get('cpf');
		$cep = $request->request->get('cep');
		$estado = $request->request->get('estado');
		$cidade = $request->request->get('cidade');
		$bairro = $request->request->get('bairro');
		$endereco = $request->request->get('endereco');
		$numero = $request->request->get('numero');
		$complemento = $request->request->get('complemento');

		return $this->redirectToRoute('checkout');
	}

	public function checkout() {
		return $this->render('checkout.html.twig');
	}
}
