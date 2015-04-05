<?php

  class EmpresaController extends Controller
  {
      public function __construct()
      {
          parent::__construct();
      }
    public function Index()
    {
    	$this->Categorias = $this->Load_Model('Categorias');
    }

    public function Consultar()
    {
    		$this->Categorias = $this->Categorias->Consultar();
    }
}

