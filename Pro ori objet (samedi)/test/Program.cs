using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Bonjour, monde !");
    }
}

// Ceci est un commentaire en français
// Le programme affiche un message de bienvenue en français lorsqu'il est exécuté.

// Demandez à l'utilisateur son nom et son age,stockez ces informations dans des variables appopriées et affichez-les.

using System;
class Program
{
    static void Main(string[] args)
    {
        Console.Write("Entrez votre nom : ");
        string nom = Console.ReadLine();

        Console.Write("Entrez votre âge : ");
        string age = string.Parse(Console.ReadLine());

        Console.WriteLine($"Bonjour {nom}, vous avez {age} ans.");
    }
}

//Calculez et affichez la somme, la différence, le produit et le quotient de deux nombres que vous stockez dans des variables.
using System;
class Program
{
    static void Main(string[] args)
    {
        Console.Write("Entrez le premier nombre : ");
        double nombre1 = double.Parse(Console.ReadLine());

        Console.Write("Entrez le deuxième nombre : ");
        double nombre2 = double.Parse(Console.ReadLine());

        double somme = nombre1 + nombre2;
        double difference = nombre1 - nombre2;
        double produit = nombre1 * nombre2;
        double quotient = nombre1 / nombre2;

        Console.WriteLine($"Somme: {somme}");
        Console.WriteLine($"Différence: {difference}");
        Console.WriteLine($"Produit: {produit}");
        Console.WriteLine($"Quotient: {quotient}");
    }
}

//Demandez à l 'utilisateur de saisir une valeur décimale, stockez-la dans une variable de type"double",
// puis affichez-la avec une précision de deux décimales.

using System;
class Program
{
    static void Main(string[] args)
    {
        Console.Write("Entrez une valeur décimale : ");
        double valeur = double.Parse(Console.ReadLine());

        Console.WriteLine($"Valeur avec deux décimales : {valeur:F2}");
    }
}

//Ecrivez un programme qui convertitun nombre de jours en nombre d'heures, de minutes et de secondes,
// et affichez ces résultats.
using System;
class Program
{
    static void Main(string[] args)
    {
        Console.Write("Entrez le nombre de jours : ");
        int jours = int.Parse(Console.ReadLine());

        int heures = jours * 24;
        int minutes = heures * 60;
        int secondes = minutes * 60;

        Console.WriteLine($"{jours} jours équivalent à {heures} heures, {minutes} minutes et {secondes} secondes.");
    }
}