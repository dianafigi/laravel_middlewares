<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioControlador extends Controller
{
  /*
  //Metodo 1 para chamar middleware. A chamada é feita na rota (web).
    public function index() {
      return '<h3>Lista de Usuarios</h3' .
            '<ul>' .
            '<li>Joao</li>' .
            '<li>Maria</li>' .
            '<li>José</li>' .
            '<li>Marcos</li>' .
            '</ul>';
    }
  */

  //Metodo 2 para chamar middleware - chamar aqui no controlador e nao na rota(web). Primeiro executa o middleware e dps as rotas e é para qq rota.
  // public function __construct() {
  //   $this->middleware('primeiro');
  // }
  //   public function index() {
  //     return '<h3>Lista de Usuarios</h3' .
  //           '<ul>' .
  //           '<li>Joao</li>' .
  //           '<li>Maria</li>' .
  //           '<li>José</li>' .
  //           '<li>Marcos</li>' .
  //           '</ul>';
  //   }

    //Metodo 3 para chamar middleware - colocar, para alem do registo, outro registo do middleware no ficheiro Kernel como antes mas agora tb no protected $middlewareGroups. Assim o middleware vai ser applicado a qq rota.
    public function index() {
      return '<h3>Lista de Usuarios</h3' .
            '<ul>' .
            '<li>Joao</li>' .
            '<li>Maria</li>' .
            '<li>José</li>' .
            '<li>Marcos</li>' .
            '</ul>';
    }
}

