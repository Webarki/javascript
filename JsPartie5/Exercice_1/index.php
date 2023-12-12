<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice_1</title>
</head>

<body>
    <p id="oto"></p>
    <p id="perso"></p>
    <script>
        //Voiture
        let cars = new Object();
        cars.make = "Peugeot";
        cars.modele = "307";
        cars.color = 'rouge';

        let car = {
            make: "Peugeot",
            model: "307",
            color: 'rouge',
        };

        console.log(car)

        //Methode = propriété 
        function showCar() {
            let resultat = `Une belle ${this.make} ${this.modele} , de couleur ${this.color}`;
            document.getElementById('oto').innerHTML = resultat;
        }
        //Constructeur
        function Car(make, modele, color) {
            this.make = make;
            this.modele = modele;
            this.color = color;
            this.showCar = showCar;
        }
        //instanciation d'objet
        let auto = new Car("Peugeot", "307", "gris");
        auto.showCar();




        //Personnage
        function crie() {
            let result = `${this.name} à ${this.age} c'est un ${this.rang}`;
            document.getElementById('perso').innerHTML = result;
        }

        function Personnage(name, age, rang) {
            this.crie = crie;
            this.name = name;
            this.age = age;
            this.rang = rang;
            this.crie = crie;
        }

        let playeur = new Personnage("Spiderman", 31, "super héro");
        playeur.crie();
        console.log(JSON.stringify(playeur));

        //Animal
        class Animal {
            constructor(name, race, pound, crie) {
                this.name = name;
                this.pound = pound;
                this.race = race;
                this.crie = crie;
                this.crier = function() {
                    return console.log('miaouuuu');
                }
            }
        }

        let chat = new Animal("Minou", 'Angora', 55);
        chat.crier();
        console.log(chat);
    </script>

</body>

</html>