<?php

// src/Controller/OutputController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class OutputController extends Controller {	
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
