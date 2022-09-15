<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //pagina de login
        return view('pagina/formLogin');
    }


    public function cadastro(){
		return view('pagina/cadastro');
	}


    public function candidato()
    {
        //pagina do candidato
    }

    public function empresa()
    {
        //pagina da empresa
    }
}