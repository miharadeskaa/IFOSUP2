// Ecrivez une fonction nommée"AdditionnerNombresPairs" qui prend un entier positif
// comme argument et calcule la somme de tout les nombres pairs de 1 à cet entier.
using System;
class Program
{
    static void Main(string[] args)
    {
        AdditionnerNombresPairs();
        EstPalindrome();
        ConvertirCeliusEnFahrenheit();
    }


    static void AdditionnerNombresPairs()
    {
        Console.Write("Entrez un entier positif : ");
        int n = int.Parse(Console.ReadLine() ?? "2");
        int somme = 0;
        for (int i = 1; i <= n; i++)
        {
            if (i % 2 == 0)
            {
                somme += i;
            }
        }
        Console.WriteLine("La somme des nombres pairs de 1 à " + n + " est : " + somme);
    }


    // Ecrivez une fonction nommée "EstPalindrome" qui prend une chaîne de 
    //caractères en éntrée et détermine si elle est un palindrome.

    static void EstPalindrome()
    {
        Console.Write("Entrez une chaîne de caractères : ");
        string input = Console.ReadLine() ?? "";
        string reversed = "";
        for (int i = input.Length - 1; i >= 0; i--)
        {
            reversed += input[i];
        }
        if (input == reversed)
        {
            Console.WriteLine("\"" + input + "\" est un palindrome.");
        }
        else
        {
            Console.WriteLine("\"" + input + "\" n'est pas un palindrome.");
        }
    }
//Ecivez une fonction nommée "ConvertirCeliusEnFahrenheit" qui prend une température en degrés Celsius
// en entrée et la convertit en degrés Fahrenheit.
    static void ConvertirCeliusEnFahrenheit()
    {
        Console.Write("Entrez la température en degrés Celsius : ");
        double celsius = double.Parse(Console.ReadLine() ?? "0");
        double fahrenheit = (celsius * 9 / 5) + 32;
        Console.WriteLine(celsius + "°C est égal à " + fahrenheit + "°F.");
    }
   
}