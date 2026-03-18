<?php

namespace App\controllers;


class HomeController
{
	public function index(): void
	{
		loadView('home');
	}

	// Exemplo de como passar variaveis para a view
	// public function exemplo()
	// {
	// 	loadView("exemplo", ["nome_varaivel" => $variavel]);
	// }

}
