// Demander à l'utlisateur d' encoder 1 nombre(int),si le modulo de 2 est 0,
//afficher"le nombre est paire"sinon "le nombre est impaire" et gérer les erreurs.

using System;
using System.Reflection.Metadata;

class Program
{
    static void Main(string[] args)
    {
        // Partie 1 : Pair ou impair
        Console.Write("Entrez un nombre entier : ");
        string? input = Console.ReadLine();

        try
        {
            int nombre = int.Parse(input ?? throw new ArgumentNullException());

            if (nombre % 2 == 0)
            {
                Console.WriteLine("Le nombre est paire.");
            }
            else
            {
                Console.WriteLine("Le nombre est impaire.");
            }
        }
        catch (FormatException)
        {
            Console.WriteLine("Entrée invalide. Veuillez entrer un nombre entier.");
        }
        catch (ArgumentNullException)
        {
            Console.WriteLine("Entrée vide. Veuillez entrer un nombre entier.");
        }

        // Partie 2 : Calculatrice
        Calculatrice();

        BBAN();
    }

    //développez une calculatrice simple. L'utilisateur devrait pouvoir entrer
    //deux nombres et un opérateur(+,-,*,/) pour effectuer une opération arithmétique.
    //Le programme devrait utiliser l'instruction"switch" pour déterminer
    //quelle opération effectuer en fonction de l'opérateur saisi et afficher le résultat.

    static void Calculatrice()
    {
        Console.Write("Entrez le premier nombre.");

        float nombre1 = float.Parse(Console.ReadLine());
        Console.WriteLine($"Le premier nombre est : {nombre1}");

        Console.Write("Entrez le deuxième nombre.");
        float nombre2 = float.Parse(Console.ReadLine());
        Console.WriteLine($"Le deuxième nombre est : {nombre2}");

        Console.Write("Entrez un opérateur (+, -, *, /) : ");

        string operateur = Console.ReadLine();
        Console.WriteLine($"L'opérateur choisi est : {operateur}");

        double? resultat = null;
        switch (operateur)
        {
            case "+":
                resultat = nombre1 + nombre2;
                Console.WriteLine($"Le résultat de l'addition est : {resultat}");
                break;

            case "-":
                resultat = nombre1 - nombre2;
                Console.WriteLine($"Le résultat de la soustraction est : {resultat}");
                break;

            case "*":
                resultat = nombre1 * nombre2;
                Console.WriteLine($"Le résultat de la multiplication est : {resultat}");
                break;

            case "/":
                resultat = nombre1 / nombre2;
                Console.WriteLine($"Le résultat de la division est : {resultat}");
                break;
            default:
                Console.WriteLine("Opérateur invalide. Veuillez entrer +, -, *, ou /.");
                break;
        }

        Console.WriteLine($"le résultat de {nombre1} {operateur} {nombre2} = {resultat}");
    }


    //  Vérifier qu'un compte bancaire BBAN est valide et affichez le résultat dans la
    //  console. (Il est valide si le modulo des 10 premiers chiffres par 97 donne les 
    // 2 derniers ou ils valent 97 s'il vaut 0.)
    //Example valide: 539007547034.

    //partie 3 

    static void BBAN()
    {


        Console.WriteLine("Entrez un numéro de compte bancaire (BBAN) : ");
        string BBAN = Console.ReadLine();


        if (BBAN.Length != 12 || !long.TryParse(BBAN, out _))
        {
            Console.WriteLine("Numéro de compte invalide. Veuillez entrer un BBAN de 12 chiffres.");
        }
        else
        {
            long numero = long.Parse(BBAN);
            long partiePrincipale = numero / 100;
            int keys = (int)(numero % 100);

            int modulo = (int)(partiePrincipale % 97);
            int resultatAttendu = modulo == 0 ? 97 : modulo;

            if (resultatAttendu == keys)
            {
                Console.WriteLine("Le numéro de compte bancaire est valide.");
            }
            else
            {
                Console.WriteLine("Le numéro de compte bancaire est invalide.");
            }
        }
    }

}