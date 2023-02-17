<!-- <script>

    const User = {
        first_name: "jc",
        last_name: "AZIAHA",

        saluer: function(){
            // console.log("Salut! C'est " + this.first_name);
            console.log(this);
        }
        
        saluer: () => {
            console.log(this);
            // console.log("Salut! C'est " + this.first_name);
        }
    }

    User.saluer();
</script> -->


<!-- Equivalent en JS -->
<!-- <script>
    const Vahicule ={
        marque:"Audi",
        model:"A7",
        puissance:100,

    };

    console.log(vehicule0.marque);
</script> -->
<?php


class User
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function sePresenter()
    {
        echo "Hello ! Je m'appelle $this->firstName $this->lastName </br> ";
    }
}

$user0 = new User("JC", "AZIAHA");
$user1 = new User("Mickey", "MOUSE");
$user2 = new User("Mnnie", "MOUSE");

$user0->sePresenter();
$user1->sePresenter();
$user2->sePresenter();

// class Vehicule
// {
//     private $marque;
//     private $model;
//     private $nitro;

//     public static function rouler()
//     {
//         echo "Le véhicule roule . <br>";
//     }
// }

// Vehicule::rouler();

// $v0 = new Vehicule();
// $v0->rouler();


// ORM
// class User
// {
//     private $firstName;
//     private $lastName;
//     private $email;
//     private $password;
//     private $createdAt;
//     private $updatedAt;

//     public function getFirstName()
//     {
//         return $this->firstName;
//     }

//     public function setFirstName($firstName)
//     {
//         $this->firstName = $firstName;
//     }

//     public function getLastName()
//     {
//         return $this->lastName;
//     }

//     public function setLastName($lastName)
//     {
//         $this->lastName = $lastName;
//     }

//     public function getEmail()
//     {
//         return $this->email;
//     }

//     public function setEmail($email)
//     {
//         $this->email = $email;
//     }

//     public function getPassword()
//     {
//         return $this->password;
//     }

//     public function setPassword($password)
//     {
//         $this->password = $password;
//     }
//     public function getCreatedAt()
//     {
//         return $this->createdAt;
//     }

//     public function setCreatedAt($createdAt)
//     {
//         $this->createdAt = $createdAt;
//     }

//     public function getUpdatedAt()
//     {
//         return $this->updatedAt;
//     }

//     public function setUpdatedAt($updatedAt)
//     {
//         $this->updatedAt = $updatedAt;
//     }
// }



// Constructeur
// class User
// {
//     private $firstName;
//     private $lastName;

//     public function __construct($new_first_name, $new_last_name)
//     {
//         $this->firstName = $new_first_name;
//         $this->lastName = $new_last_name;
//     }
//     // L' accesseur du prénom
//     public function getFirstName()
//     {
//         return $this->firstName;
//     }
//     // L' accesseur du nom
//     public function getstLastName()
//     {
//         return $this->lastName;
//     }

//     // Le mutateur du prénom
//     public function setFirstName($new_first_name)
//     {
//         $this->firstName = $new_first_name;
//     }

//     // Le mutateur du nom
//     public function setLastName($new_last_name)
//     {
//         $this->lastName = $new_last_name;
//     }
// }

// $user0 = new User("Mickey", "Mouse");
// $user1 = new User("Minnie", "Mouse");

// $user0->setFirstName("hello");
// echo $user0->getFirstName() . "<br/>";

// echo "<pre>";
// var_dump($user0);

// $user0->first_name;


// class Vehicule
// {
//     public $marque = "Audi";
//     protected $couleur = "bleue";

//     // Accesseur de la marque
//     public function getMarque()
//     {
//         return $this->marque;
//     }
//     // Accesseur de la couleur
//     public function getCouleur()
//     {
//         return $this->couleur;
//     }

//     // Mutateur de la marque
//     public function setMarque($nouvelle_marque)
//     {
//         $this->marque = $nouvelle_marque;
//     }

//     // Mutateur de la couleur
//     public function setCouleur($nouvelle_couleur)
//     {
//         $this->couleur = $nouvelle_couleur;
//     }
// }

// $vehicule_de_jb = new Vehicule;
// $vehicule_de_jc = new Vehicule;

// echo $vehicule_de_jb->getMarque() . "<br>"; // Audi
// echo $vehicule_de_jc->getMarque() . "<br>"; // Audi

// $vehicule_de_jb->setCouleur("blanche");

// echo $vehicule_de_jb->getCouleur() . "<br>";// Blanche
// echo $vehicule_de_jc->getCouleur() . "<br>";// Bleue


// $v0 = new Vehicule;
// echo $v0->getMarque() . "<br>";
// echo $v0->getCouleur() . "<br>";


// class User
// {
//     public $first_name;
//     public $last_name;
//     public $email;
//     public $age;
//     public $phone;
//     public $comment;

//     public function saluer()
//     {

//     }

//     public function envoyerMessage()
//     {
        
//     }
// }


// class Vehicule
// {
//     public $marque = "Audi";
//     protected $model = "A7";
//     private $puissance = 100;

//     function demarrer()
//     {
//         echo "Vroum ! le véhicule démarre .";
//     }

//     public function rouler()
//     {
//         echo "Le véhicule roule";
//     }


// }



// $v0 = new Vehicule;

// $v0->demarrer();

// echo $v0->marque . "<br>";
// echo $v0->model . "<br>";
// echo $v0->puissance . "<br>";



// class Stylo
// {
// }


// // La classe de nom Robot
// // ou la maquette Robot
// class Robot
// {
// }

// $robot0 = new Robot;

// class user
// {
// }


// // Ici $jc est l'objet et User est la class
// $jc = new User;
// $jb = new User;
// $jm = new User;
// $jp = new User;
// $jf = new User;
