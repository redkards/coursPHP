<?php
class maClass{
   
    private $nom;
    public $rue;

    public function __construct($nom,$rue){
        $this->nom = $nom;
        $this->rue = $rue;
       
    }

        

        public function getNombre(){
            return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function afficher(){
        echo "nom :".$this->nom." rue :".$this->rue."<br>";
    }
}
    $monInst =  new maClass("alexandre","saint thomas");   
$monInst -> afficher();
$var = $monInst->rue;
echo $var;
?>

<?php
class MyCar {
    private $marque;
    private $modèle;
    private $année;
    public $etat;
    public static $nombre=0;

    public function __construct($marque, $modèle, $année, $etat) {
        $this->marque=$marque;
        $this->modèle=$modèle;
        $this->année=$année;
        $this->etat=$etat;
        MyCar::$nombre++;
    }
    public function getMarque (){
       return $this->$marque;
    }
    public function getModèle (){
       return $this->$modèle;
    }
    public function getAnnée (){
       return $this->$année;
    }
    public function setMarque ($marque){
        $this->marque=$marque;
    }
    public function setModèle ($modèle){
        $this->modèle=$modèle;
    }
    public function setAnnée ($année){
        $this->année=$année;
    }
    public function afficher(){
       echo "marque :".$this->marque."<br>"."modèle :".$this->modèle."<br>"."année :".$this->année."<br>"."etat du véhicule : ".$this->etat."<br><br>";



} }

$maVoiture= new MyCar("opel","mériva","2011","neuve");
$maVoiture->afficher();
$maVoiture->setModèle("insigna");

$maVoiture->afficher();
$maVoiture2= new MyCar("porsche","cayenne","2003","occasion");
var_dump($maVoiture);
$maVoiture2->afficher();

echo MyCar::$nombre;
?>
