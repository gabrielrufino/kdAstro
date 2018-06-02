<?php

// src/Controller/RegisterController.php
namespace App\Controller;

use App\Entity\Cadastro;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegisterController extends Controller {	
	/**
	 * @Route("/register", name="register")
	 */
	public function register(Request $request) {
		$data = array(
			'nome' => $request->request->get('nome'),
			'nascimento' => $request->request->get('nascimento'),
			'cpf' => $request->request->get('cpf'),
			'cep' => $request->request->get('cep'),
			'estado' => $request->request->get('estado'),
			'cidade' => $request->request->get('cidade'),
			'bairro' => $request->request->get('bairro'),
			'endereco' => $request->request->get('endereco'),
			'numero' => $request->request->get('numero'),
			'complemento' => $request->request->get('complemento')
		);

		$cadastros = $this->getDoctrine()->getRepository(Cadastro::class);
		
		$sucesso = !$cadastros->findOneBy(['cpf' => $data['cpf']]);
		if ($sucesso) {
			$entityManager = $this->getDoctrine()->getManager();

			$cadastro = new Cadastro();
			$cadastro->setNome($data['nome']);
			$cadastro->setNascimento($data['nascimento']);
			$cadastro->setCpf($data['cpf']);
			$cadastro->setCep($data['cep']);
			$cadastro->setEstado($data['estado']);
			$cadastro->setCidade($data['cidade']);
			$cadastro->setBairro($data['bairro']);
			$cadastro->setEndereco($data['endereco']);
			$cadastro->setNumero($data['numero']);
			$cadastro->setComplemento($data['complemento']);
	
			$entityManager->persist($cadastro);
			$entityManager->flush();
			
			return $this->redirectToRoute('success');
		} else {
			return $this->redirectToRoute('error');
		}
	}
}
