# test de compétences

**Afin que votre entretien puisse être appuyé sur du concret et que l'on ai une petite idée de vos 
compétences par rapport aux technologies que nous utilisons au quotidien,
nous souhaiterions que vous résolviez les quelques tests ci-dessous.**

La procédure est simple, il suffit :
  - de forker ou cloner le repo
  - de répondre à chaque question au sein du fichier correspondant qui se trouve dans le dossier racine answers/
  - de soit nous inviter (@julienOmendo) sur votre fork afin que l'on puisse avoir un visuel, soit de nous envoyer votre repo zippé 
  par email (dev@omendo.com)

## JQUERY

 ### 1/ Ecrivez un script avec JQuery qui :
  - une fois la page chargée, va afficher dans la console : « page chargée » 
  - puis qui affichera chaque seconde durant 5 secondes uniquement :
  ```
    page chargée depuis 1s    
    page chargée depuis 2s    
    page chargée depuis 3s
    page chargée depuis 4s    
    page chargée depuis 5s
  ```
  [Répondre](answers/jquery/question_1.js)

 ### 2/ Click
 Sur un élément HTML button il y a déjà quelques évènements ‘click’ attachés. En utilisant jQuery, attachez un 
 évènement ‘click’ supplémentaire puis détachez-le sans toucher aux autres events.
 [Répondre](answers/jquery/question_2.html)
 
 
 ## Vanilla Js
 
 ### 1/ Que va afficher le code suivant dans la console et pourquoi ? 
 #### Quel est le problème et comment peut-il être corrigé ?

``` 
    var hero = {
        _name: 'John Doe',
        getSecretIdentity: function(){
            return this._name;
        }
    }
    
    var stoleSecretIdentity = hero.getSecretIdentity;
    
    console.log(stoleSecretIdentity());
    console.log(hero.getSecretIdentity());
```
[Répondre](answers/vanillaJs/question_1.js)

 ### 2/ Que va afficher ce code en sortie ?
 ``` 
    for(var i=0; i<5; i++){
        setTimeout(function(){ console.log(i); }, i * 1000);
    }
 ``` 
 
 Expliquer votre réponse. Comment l'utilisation d'une closure ou d'une arrow peut nous aider ici ?
 
 [Répondre](answers/vanillaJs/question_2.js)
 
 ### 3/ Are you DOM ready ?
 Créer une fonction qui, en recevant un élément du DOM, va aller parcourir cet élément ainsi que tous ses 
 enfants (pas seulement ses enfants directs). Pour chaque élément visité, la fonction doit le stocker dans un tableau.
 
 [Répondre](answers/vanillaJs/question_3.js)
 
 ## HTML5 - CSS3
 
 ### 1/ Jurassic' Web
 Voilà une structure HTML conçue par un ancêtre du web, c’est le moment de montrer que la nouvelle génération maîtrise 
 les nouvelles normes HTML5.
 
 Dans un style rédactionnel (c-à-dire par un recodage de la page mais une liste de modifications), 
 décrivez les modifications nécessaires à apporter à cette page afin de se rapprocher 
 d’une structure HTML5 moderne ( sémantique HTML et tout ce qui vous passe par la tête ).
 
 ![jurassicWeb](/assets/jurassic_html.png)
 
 [Répondre](answers/HTML5-CSS3/question_1.md)
 
 ## SQL
 
 ### 1/ Ecrivez la requête MySQL qui permettra de donner la quantité totale pour chacun des fruits :
 
 **Table name : fruit**
 
 - Fruit 	Quantité
 - Banane	    10
 - Pomme	    2
 - Orange 	5
 - Banane	    6
 - Pomme	    15
 - Orange 	7
 
 **Résultat attendu**
 - Banane 16
 - Pomme 17
 - Orange 12
 
 [Répondre](answers/SQL/question_1.sql)

### 2/ Ecrirez les requêtes SQL permettant de répondre aux questions suivantes :

#### Considérant les deux tables suivantes :
**Table 'Category'**
 - id
 - name

**Table 'Products'**
 - id
 - name
 - description
 - category_id
 - price


#### Questions :

- a. Quels produits contiennent le mot "clavier" dans leur description ?
- b. Quelle catégorie contient le produit nommé "Produit 1" ?
- c. Dans quelle(s) catégorie(s) se trouve le produit le plus cher ?
- d. Quelles catégories possèdent 5 produits ou plus ?

 [Répondre](answers/SQL/question_2.sql)

### 3/ Ecrire la requête SQL permettant d'afficher les produits par catégorie de la manière suivante :
``` 
Catégorie    --------   Produits
Catégorie 1 		Produit 1
Catégorie 2 		Produit 2, Produit 3, Produit 4
Catégorie 3 		Produit 5, Produit 6
```
*Sachant que category_id de la table Products renvoit à un id de la table Category*

 [Répondre](answers/SQL/question_3.sql)

## PHP

### 1/ Transformation
La variable PHP $testArray est un tableau remplit de données. En utilisant PHP, transformez-le dans un format pouvant être traité en js
```
<?php
    $testArray = ["banane" => 16, "pomme" => 17, "orange" => 17];
    $resultForJs = ""; // which must contain, in finish, the result of your code
?>
<script type="text/javascript">
    var testArray = <?=$resultForJs?>;
</script>
```
 [Répondre](answers/PHP/question_1.php)

### 2/ PreProcessing
On dispose des données suivantes :
```
$products = array( 
    array('productID' => 1,
        'productName' => "Produit 1",
        'productCategorie' => 1),
    array('productID' => 2,
        'productName' => "Produit 2",
        'productCategorie' => 2),
    array('productID' => 3,
        'productName' => "Produit 3",
        'productCategorie' => 2),
    array('productID' => 4,
        'productName' => "Produit 4",
        'productCategorie' => 2),
    array('productID' => 5,
        'productName' => "Produit 5",
        'productCategorie' => 3),
    array('productID' => 6,
        'productName' => "Produit 6",
        'productCategorie' => 3)
    );
$categories = array ("Catégorie 1", "Catégorie 2", "Catégorie 3");
```
#### Ecrire le code PHP permettant d'afficher les produits par catégorie sous la forme :
 - Catégorie 1 : Produit 1
 - Catégorie 2 : Produit 2, Produit 3, Produit 4
 - Catégorie 3 : Produit 5, Produit 6
 
  [Répondre](answers/PHP/question_2.php)

### 3/ String au fort caractère
On dispose de la variable suivante :
```$str = "Chaîne de de caractères";```
#### a. La transformer pour qu'elle contienne "Chaine de caractère"
#### b. Transformer le "é" en caractère correspondant HTML
#### c. Remplacer chaque lettre de début des mots par la majuscule correspondante
 [Répondre](answers/PHP/question_3.php)

## Algorithmie

Nous avons les 2 tableaux suivants :

```
$hero1 = array(
    "nom"=>"batman", 
    "force"=>12, 
    "vitesse"=>10, 
    "vie"=>"1800"
);
$hero2 = array(
    "nom"=>"spiderman", 
    "force"=>8, 
    "vitesse"=>8, 
    "vie"=>"1800"
);
```

Les deux héros (tableaux) s'affrontent dans un combat à mort (une boucle infinie).

Chaque héros donne un coup à l'autre toutes les X occurrences de boucle, X correspondant à sa vitesse.

A chaque coup, il inflige autant de dégâts à l'autre héros que sa caractéristique "force".

Les dégâts sont retirés de la "vie" de l'autre héros.

### 1/ Ecrire l'algorithme du combat
**qui affiche le détail des coups infligés et se termine à la mort d'un héros.**

#### bonus : Qui est le vainqueur ?
 [Répondre](answers/algorithmie/question_1.php)
