// Calculer la somme de tout les nombres pairs de 1 à 100 à l'aide d'une boucle for
using System;

class Program
{
    static void Main(string[] args)
    {
        SommeNombresPairs();
        CalculerFactoriel();
        TableMultiplication();
    }

    // Calculer la somme de tous les nombres pairs de 1 à 100
    static void SommeNombresPairs()
    {
        int somme = 0;
        for (int i = 1; i <= 100; i++) // Boucle de 1 à 100
        {
            if (i % 2 == 0) // Vérifie si le nombre est pair
            {
                somme += i; // Ajoute le nombre pair à la somme
            }
        }
        Console.WriteLine("La somme des nombres pairs de 1 à 100 est : " + somme);
    }

    // Calculer le factoriel d'un nombre entré au clavier à l'aide d'une boucle "while"
    static void CalculerFactoriel()
    {
        Console.Write("Entrez un nombre pour calculer son factoriel : ");
        int nombre = int.Parse(Console.ReadLine() ?? "0");// Lit le nombre entré par l'utilisateur
        int factoriel = 1; // Initialisation du facteur
        int i = 1;  // Compteur pour la boucle

        while (i <= nombre)
        {
            factoriel *= i; // Multiplie le facteur courant
            i++; // Incrémente le compteur
        }

        Console.WriteLine("Le factoriel de " + nombre + " est : " + factoriel);
    }

    // Demander à l'utilisateur de saisir un nombre entier et afficher la table de multiplication de ce nombre de 1 à 10.
    static void TableMultiplication()
    {
        Console.Write("Entrez un nombre entier pour afficher sa table de multiplication : ");
        int nombre = int.Parse(Console.ReadLine() ?? "0");

        Console.WriteLine("Table de multiplication de " + nombre + " :");
        for (int i = 1; i <= 10; i++)
        {
            Console.WriteLine(nombre + " x " + i + " = " + (nombre * i));
        }
    }
}

