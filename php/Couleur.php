<?php
class Couleur {
    static public $nbCouleurs = 100;
    static public function rgb($r, $g, $b, $a = 1) {
        $resultat = "rgba($r,$g,$b,$a)";
        return $resultat;
    }
    static public function couleurAlea($aAlea = false) {
        $r = rand(0,255);
        $g = rand(0,255);
        $b = rand(0,255);
        if ($aAlea === false) {
            $a = 1;
        } else {
            $a = rand(0, 10) / 10;
        }
        $resultat = "rgba($r,$g,$b,$a)";
        return $resultat;
    }
    static public function degrade() {
        $couleurs = [];
        for ($i = 0; $i < self::$nbCouleurs; $i += 1) {
            $couleurs[] = self::couleurAlea();
        }
        $couleurs = implode(",", $couleurs);
        $resultat = "linear-gradient(to top right, $couleurs)";
        return $resultat;
    }
}