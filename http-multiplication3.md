# partie 7
- l'or de la saisie de l'URL http://localhost:8000/nombre.html le client demande la ressource au serveur qui luit envoi
- Un fou le formulaire rempli et envoyer, le client envoie les informations au serveur
- le serveur traite les informations puis crée la table et envois la page produite
- le serveur ferme la connexion entre chaque communication.

# partie 8
- comme la méthode utilisée est la method get la valeur du paramètre est envoyé dans l'URL
- ci l'on modifie la valeur a la main dans l'URL la nouvelle valeur est pris en compte dans le script PHP
- il est possible de modifier la valeur car la méthode utilisée est la méthode get
- le formulaire ne vérifie que l'entrée depuis l'interface graphique est non l'URL
- is_int() n'est pas utilisable car tot ce que l'on renvoie dans un formulaire est une chaine de caractère
- il faut utiliser ctype_digit dans ce cas là
- il n'y a pas de test qui vérifie si n'est défini ou non