<?php

namespace App\controller;

class HomeController extends Controller
{
	public function index(): void
	{
		$this->loadView('home');
	}
}
