<?php

class ContaBanco
{

   //Atributos
   public $numConta;
   protected $tipo;
   private $dono;
   private $saldo;
   private $status;

   // Construtor
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

   // Getters e Setters


   /**
    * Get the value of numConta
    *
    * @return  mixed
    */
   public function getNumConta()
   {
      return $this->numConta;
   }

   /**
    * Set the value of numConta
    *
    * @param   mixed  $numConta  
    *
    * @return  self
    */
   public function setNumConta($numConta)
   {
      $this->numConta = $numConta;
   }

   /**
    * Get the value of tipo
    *
    * @return  mixed
    */
   public function getTipo()
   {
      return $this->tipo;
   }

   /**
    * Set the value of tipo
    *
    * @param   mixed  $tipo  
    *
    * @return  self
    */
   public function setTipo($tipo)
   {
      $this->tipo = $tipo;
   }

   /**
    * Get the value of dono
    *
    * @return  mixed
    */
   public function getDono()
   {
      return $this->dono;
   }

   /**
    * Set the value of dono
    *
    * @param   mixed  $dono  
    *
    * @return  self
    */
   public function setDono($dono)
   {
      $this->dono = $dono;
   }

   /**
    * Get the value of saldo
    *
    * @return  mixed
    */
   public function getSaldo()
   {
      return $this->saldo;
   }

   /**
    * Set the value of saldo
    *
    * @param   mixed  $saldo  
    *
    * @return  self
    */
   public function setSaldo($saldo)
   {
      $this->saldo = $saldo;
   }

   /**
    * Get the value of status
    *
    * @return  mixed
    */
   public function getStatus()
   {
      return $this->status;
   }

   /**
    * Set the value of status
    *
    * @param   mixed  $status  
    *
    * @return  self
    */
   public function setStatus($status)
   {
      $this->status = $status;
   }

   // Metodos
   public function abrirConta($tipo) {
      $this->setTipo($tipo);
      $this->setStatus(true);

      if ($tipo == 'CC') {
         # code...
         $this->setSaldo(50);

      } elseif ($tipo == 'CP') {
         # code...
         $this->setSaldo(150);
      }
   }
}
