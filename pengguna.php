<?php 
class login{
		protected $id ;
		protected $pass ;
		
		public function __construct($user,$pass)
        {
			$this->id = $user;
			$this->pass = $pass;
			
		}
				
		
		function User(){
            if($this->id == "id1" && $this->pass  == "0001")
			{
				$_SESSION['user'] = "Irul";
				header("location:menuA.php");
			}elseif($this->id == "id2" && $this->pass  == "0002"){
				$_SESSION['user'] = "Inung";
				header("location:menuA.php");
			}elseif($this->id == "id3" && $this->pass == "0003"){
				$_SESSION['user'] = "Mekel";
				header("location:menuA.php");
			}//elseif($this->id == "user" && $this->pass == "user"){
				//$_SESSION['user'] = "Mekel";
				//header("location:menu.php");
			}
			//else{
				//header("location:index.php");
			//}
		}
	//}
	
?>
