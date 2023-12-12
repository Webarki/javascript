<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <script>
        //Créer un tableau "languages" contenant "Html", "CSS", "Java", "PHP"

        var user = ['lulu', 'lala', 'tutu', 'titi', 'fifi'];
        user.push('toto', 'tata');
        user.shift();
        user.splice(3, 1, 'Jean');
        user.pop();
        let tab = user.join(', ');
        console.log(user.reverse());
        console.log(user.toString());


        /*Créer un tableau "numbers" contenant les numbers de 0 à 5
        var numbers = [0, 1, 2, 3, 4, 5];
        //Remplacer le troisième élément du tableau par "Javascript"
        languages.splice(2, 1, 'Javascript');
        //Ajouter "Ruby" et "Python" à la fin du tableau
        languages.push('Ruby', 'Python');
        //Ajouter "-2" et "-1" au début du tableau numbers
        numbers.unshift(-2, -1);
        //Supprimer le premier élément du tableau languages
        languages.shift();
        //Supprimer le dernier élément du tableau languages
        languages.pop();
        //Faire du tableau "languages" une chaîne "languagesInString". Séparer les languages par une virgule
        languages.toString(',');
        //Bonus : Inverser le tableau "languages"
        console.log(languages.reverse());
        //Créer une variable socialMediaInString contenant une chaine de caractère
        var socialMediaInString = 'Facebook,Twitter,Google +,Viadeo,LinkedIn';
        //Faire de la chaîne "socialMediaInString" un tableau "socialMedia"
        var socialMedia = socialMediaInString.split(',');
        console.log(socialMedia.toString(','));*/
    </script>
</body>

</html>