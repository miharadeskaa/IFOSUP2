//Ecrivez un programme qui demande à l'utilisateur de saisir un nombre
//entier, le multiplie par 2, convertit le résultat en chaine de caractère,
//puis affichez la chaine résultante.

using System;
class Program
{
    static void Main(string[] args)
    {
        // Exercice 1
        Console.Write("Entrez un nombre entier : ");
        int nombre = int.Parse(Console.ReadLine());

        int resultat = nombre * 2;
        string chaineResultat = resultat.ToString();

        Console.WriteLine($"Le résultat est : {chaineResultat}");

        // Exercice 2
        Console.Write("Entrez un nombre décimal : ");
        double nbrDecimal = double.Parse(Console.ReadLine());

        int entierConvert = (int)nbrDecimal;

        Console.WriteLine($"Le nombre converti en entier est : {entierConvert}");

        // Exercice 3
        Console.Write("Entrez la température en degrés Celsius : ");
        double celsius = double.Parse(Console.ReadLine());

        double fahrenheit = (celsius * 9 / 5) + 32;

        Console.WriteLine($"{celsius} degrés Celsius est égal à {fahrenheit} degrés Fahrenheit.");
    }
}
