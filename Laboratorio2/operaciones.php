<?php 
	class operaciones
	{
		private $cadena= string;
		private $n,$a,$b,$c;
		function __construct($n1,$a1,$b1,$c1,$cadena1)
		{
			$this->n=$n1;
			$this->a=$a1;
			$this->b=$b1;
			$this->c=$c1;
			$this->cadena=$cadena1;
		}

		public function CalcularFibonaci($n){
			$v=array();
			$v[0]=0;
			$v[1]=1;
			for ($i=2;$i<=$n;$i++)
			{
			 $v[$i]=$v[$i-1]+$v[$i-2];
			 }
			echo $v[$n];
		}
		public function CalcularMenor($a,$b,$c){
			if($a<$b && $a<$c)
				echo $a;
			else
			{
				if($b<$c)
					echo $b;
				else
					echo $c;
			}
		}
		public function Piramide()
		{
			$p=0;
			$r=0;
			for ($i=2; $i <= $p ; $i--) { 
				$p=$i;
				for ($j=1; $j >= $r ; $j++) {
					$r=$j+1;
				}
				echo substr($cadena,$p,$r);
			}
		}

	}



 ?>