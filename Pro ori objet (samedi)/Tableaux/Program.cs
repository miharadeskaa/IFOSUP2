// Calculer la somme et de la moyenne des éléments d' un tableau
using System;
class Program
{
    static void Main(string[] args)
    {
        sommeetmoyenne();
        maxmini();
        matrice();
    }
    static void sommeetmoyenne()
    {

        int[] nombres = { 10, 20, 30, 40, 50 };
        int somme = 0;
        for (int i = 0; i < nombres.Length; i++)
        {
            somme += nombres[i];
        }
        double moyenne = (double)somme / nombres.Length;
        Console.WriteLine("Somme : " + somme);
        Console.WriteLine("Moyenne : " + moyenne);
    }


    //Trouvez les éléments maximum et minimum dans un tableau

    static void maxmini()
    {
        int[] nombres = { 10, 20, 5, 40, 15 };
        int max = nombres[0];
        int min = nombres[0];

        for (int i = 1; i < nombres.Length; i++)
        {
            if (nombres[i] > max)
            {
                max = nombres[i];
            }
            if (nombres[i] < min)
            {
                min = nombres[i];
            }
        }

        Console.WriteLine("Maximum : " + max);
        Console.WriteLine("Minimum : " + min);
    }

    //Remplir et afficher une matrice de 10x10 avec les nombres de 1 à 100

    static void matrice()
    {
        int[,] matrice = new int[10, 10];
        int valeur = 1;

        for (int i = 0; i < 10; i++)
        {
            for (int j = 0; j < 10; j++)
            {
                matrice[i, j] = valeur;
                valeur++;
            }
        }

        for (int i = 0; i < 10; i++)
        {
            for (int j = 0; j < 10; j++)


                Console.Write($"{matrice[i, j]}\t");
        }
        Console.Write("\r");


    }

}

