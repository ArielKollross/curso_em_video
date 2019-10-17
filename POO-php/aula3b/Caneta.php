<?php
class Caneta {
	
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		public function escrever()
			if ($this->tampada == false){
				echo "estou escrevendo";
			}else{
				echo "não estou escrevendo";
			}

		public function rabiscar() {
			if($this->tampada == true) {
				echo "não pode rabiscar meu filho<br>";
			}else{
			echo "Estou rabiscando</br>";
			}
		}

		private function pintar(){
			if($this->tampada == true){
				echo"não pode pintar";
			}else{
				echo "pode pintar";
			}
		}

		private function tampar() {
			$this->tampada = true ;
		}

		 private function destampar() {
			$this->tampada = false;
		}
	}