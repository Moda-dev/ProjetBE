<?php 

/**
* Generation d'input, label, textarea, submit et select
*/

namespace modele;

class Form{

	public function input($type, $name, $placeholder = FALSE, $class = FALSE, $id = FALSE, $value = FALSE){
		$balFerme = "";
		$name = "name=\"$name\" required=\"required\" ";
		$id = ($id != FALSE) ? "id=\"$id\"" : "";
		$class = ($class != FALSE) ? "class=\"$class\"" : "";
		$placeholder = ($placeholder != FALSE) ? "placeholder=\"$placeholder\"" : "";
		$valueInput = ($value != FALSE) ? "value=\"$value\"" : "";


		if($type == "textarea"){
			$debut = "<TEXTAREA ";
			$balFerme = ">";
			$fin = $value . "</TEXTAREA>";
		}
		else{
			$debut = "<input type=\"$type\"" . $valueInput;
			$fin = ">";
		}

		$reponse = $debut . $name . $placeholder . $id . $class . $balFerme . $fin;
		return $reponse;	
	}

	public function label($texte, $for = FALSE){
		$for = ($for != FALSE) ? "for=\"$for\"" : "";
		$reponse = "<label ". $for . ">$texte</label>";
		return $reponse;
	}

	public function submit($value = FALSE, $class = FALSE, $id = FALSE){
		$id = ($id != FALSE) ? "id=\"$id\"" : "";
		$class = ($class != FALSE) ? "class=\"$class\"" : "";
		$value = ($value != FALSE) ? "value=\"$value\"" : "";

		$reponse = "<input type=\"submit\" ". $value . $id . $class ." />";
		return $reponse;
	}

	public function select($option, $name = FALSE, $selected = FALSE, $class = FALSE, $id = FALSE){
		$option_html = "";
		$id = ($id != FALSE) ? "id=\"$id\"" : "";
		$class = ($class != FALSE) ? "class=\"$class\"" : "";
		$name = ($name != FALSE) ? "name=\"$name\"" : "";

		foreach ($option as $key => $value) {
			if($value == $selected){
				$option_html .= "<option value='".$key."' selected='selected'>$value</option>";
			}
			else{	
				$option_html .= "<option value='".$key."'>$value</option>";
			}
		}
		$reponse = "<select $name $class $id required>$option_html</select>";
		return $reponse;
	}

	public function startForm($method, $action){
		$reponse = "<form method=\"$method\" action=\"$action\">";
		return $reponse;
	}

	public function endForm(){
		$reponse = "</form>";
		return $reponse;
	}

	// Ajouter la fonction setValue pour l'input

}