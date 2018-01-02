<?php

class Students{

public function getStudentFirstName(){

    $studentFN = array("Fercy", "Henry", "Sandy", "Boaldy",
			"Moncy", "Andrey", "Lucy", "Kardy", "Jorry",
			"Vanessa", "John");
                        
    return $studentFN;

}

    public function getStudentLastName(){

        $studentLN = array("Forme", "Bob", "Jarry", "Goncy",
			"Nofsa", "Sandy", "Noncy", "Morgan", "Hollu",
			"Vorda", "Donk");
                        
        return $studentLN;

}

 public function getStudentNames(){

   $studentNames = "Donk Forme, Forly, Sandra Form, " .
            "Focr Vorda, Derreck Forna, Agorn Donra, " .
            "Jarret Borna, Landa Forda, Tancy Nonca, " .
            "Dorns Worsa, Sorda Gorns";

    return $studentNames;

     

    }


}

?>