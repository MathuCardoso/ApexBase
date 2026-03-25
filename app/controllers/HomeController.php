<?php

namespace App\controllers;


class HomeController
{
	public function index(): void
	{
		$nome = "Fulano de Tal";
		loadView('home', \compact("nome"));
	}

	// Exemplo de como passar variaveis para a view
	// public function exemplo()
	// {
	// 	loadView("exemplo", ["nome_variavel" => $variavel]);
	// ou 
	// loadView("exemplo", compact('nome_variavel'));
	// }

}
