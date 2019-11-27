<?PHP
class panier{
	
	private $refp;
	
	private $quantite;
	

	function __construct($refp,$quantite){
		
		$this->refp=$refp;
		
		$this->quantite=$quantite;
		
	
	}
	
	
	function getrefp(){
		return $this->refp;
	}
	
	
	function getQuantite(){
		return $this->quantite;
	}
	

	function setrefp($refp){
		$this->refp=$refp;
	}
	
	function setQuantite($quantite){
		$this->quantite;
	}
	
}

?>