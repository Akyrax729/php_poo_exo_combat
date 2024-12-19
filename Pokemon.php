<?php 

class Pokemon {

// ATTRIBUTS

private $name;
private $atk;
private $type;
private $hp;

// CONSTRUCTEUR


function __construct(
    $name="Pikachu",
    $atk=5,
    $type="Electrik",
    $hp= 44,
){
    $this->setName($name) ;
    $this->setAtk($atk);
    $this->setType($type);
    $this->setHp($hp);
}

// NOM

public function getName(){
    return $this->name;
}

public function setName($name){
    $this->name = $name;
}

// ATTAQUE

public function getAtk(){
    return $this->atk;
}

public function setAtk($atk){
    $this->atk = $atk;
}

// TYPE

public function getType(){
    return $this->type;
}

public function setType($type){
    $this->type = $type;
}

// POINT DE VIE

public function getHp(){
    return $this->hp;
}

public function setHp($hp){
    $this->hp = $hp;
}

// FONTCION POKEDEX
public function Pokedex() {
    echo "Fiche Pokedex <br><br>
    Nom : ".$this->getName()."<br>
    Puissance d'attaque : ".$this->getAtk()."<br>
    Type : ".$this->getType()."<br>
    Nombre de PV : ".$this->getHp()."<br><br><br>"
    ;
}

// FONCTION COMBAT

// FAIRE DES DEGATS

public function attackdone($target,$i){
    $this->getAtk();
    echo $this->getName()." fait ". $this->getAtk()*$this->typeadv($target) . " points de dégat sur ". $target->getName() .".<br>";
    $target->dmgget($this,$i);
}

function dmgget($target,$i){  
    $pokehp = $this->getHp();
    $pokehp = $pokehp-($target->getAtk()*$i);
}

function typeadv($target){
    // FEU SUR PLANTE
    if ($this->getType() === "Feu" && $target->getType() === "Plante"){
        return 1.5;
    } else if ($this->getType() === "Eau" && $target->getType() === "Feu"){
        return 1.5;
    } else if ($this->getType() === "Plante" && $target->getType() === "Eau"){
        return 1.5;
    } else {
        return 1;
    }
}


public function battle($target){
    $poke1hp = $this->getHp();
    $poke2hp = $target->getHp();
    // $poke1hp>= 0 || $poke2hp->getHp() >= 0
    $i=0;
    while  (($poke1hp > 0) && ($poke2hp > 0)){
        $i++;
        echo "<br>Tour ".$i." :<br><br>";

        $rand = rand(1,2);
        if ($rand == 1){
            // $poke2hp = $poke2hp-($this->getAtk()*$this->typeadv($target));
            // $poke1hp = $poke1hp-($target->getAtk()*$target->typeadv($this));

            if ($poke1hp > 0){
                $poke2hp = $poke2hp-($this->getAtk()*$this->typeadv($target));
                echo $this->getName()." fait ". $this->getAtk()*$this->typeadv($target) . " points de dégat sur ". $target->getName() .".<br>";


                if ($poke2hp < 0){
                    $poke2hp = 0;
                }

                echo "Il reste " . $poke2hp. " points de vie à " . $target->getName() .".<br><br>";

                if ($poke2hp > 0){
                    $poke1hp = $poke1hp-($target->getAtk()*$target->typeadv($this));
                    echo $target->getName()." fait ". $target->getAtk()*$target->typeadv($this) . " points de dégat sur ". $this->getName() .".<br>";
                    
                    if ($poke1hp < 0){
                        $poke1hp = 0;
                    }

                    echo "Il reste " . $poke1hp. " points de vie à " . $this->getName() .".<br><br>";

                    if ($poke1hp <= 0) {
                        echo $this->getName()." est KO.<br>";

                    }


                }else {
                    echo $target->getName()." est KO.<br>";
                }

            }else {
                echo $this->getName()." est KO.<br>";
            }
            
        } else {


            if ($poke2hp > 0){
                $poke1hp = $poke1hp-($target->getAtk()*$target->typeadv($this));
                echo $target->getName()." fait ". $target->getAtk()*$target->typeadv($this) . " points de dégat sur ". $this->getName() .".<br>";


                if ($poke1hp < 0){
                    $poke1hp = 0;
                }

                echo "Il reste " . $poke1hp. " points de vie à " . $this->getName() .".<br><br>";

                if ($poke1hp > 0){
                    $poke2hp = $poke2hp-($this->getAtk()*$this->typeadv($target));
                    echo $this->getName()." fait ". $this->getAtk()*$this->typeadv($target) . " points de dégat sur ". $target->getName() .".<br>";
                    
                    if ($poke2hp < 0){
                        $poke2hp = 0;
                    }

                    echo "Il reste " . $poke2hp. " points de vie à " . $target->getName() .".<br><br>";

                    if ($poke2hp <= 0) {
                        echo $target->getName()." est KO.<br>";

                    }


                }else {
                    echo $this->getName()." est KO.<br>";
                }

            }else {
                echo $target->getName()." est KO.<br>";
            }
  
        }                          
    }

}


}