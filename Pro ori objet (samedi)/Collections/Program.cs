/*
Grace à une boucle "while" et à l'aide d'une collection,
calculez les nombres premiers inférieur à un nombre entrié entré au clavier.
*/


while (true)
{
    Console.Write("Entrez un nombre entier positif pour trouver tous les nombres premiers inférieurs : ");
    if (int.TryParse(Console.ReadLine(), out int limite) && limite > 1)
    {
        List<int> nombresPremiers = new List<int>();

        for (int num = 2; num < limite; num++)
        {
            bool estPremier = true;
            for (int diviseur = 2; diviseur <= Math.Sqrt(num); diviseur++)
            {
                if (num % diviseur == 0)
                {
                    estPremier = false;
                    break;
                }
            }
            if (estPremier)
            {
                nombresPremiers.Add(num);
            }
        }

        Console.WriteLine("Nombres premiers inférieurs à " + limite + " : " + string.Join(", ", nombresPremiers));
        break;
    }
    else
    {
        Console.WriteLine("Veuillez entrer un nombre entier positif supérieur à 1.");
    }
}

/* Grace à une boucle "for" et à l' aide d' une collection générique, 
caluclez les x premiers nombres premiers.
*/

Console.Write("Entrez le nombre de nombres premiers que vous souhaitez générer : ");
if (int.TryParse(Console.ReadLine(),out var count) && count > 0) 
{
    List<int> nombresPremiers = new List<int>();
    int nombre = 2; 
    while (nombresPremiers.Count < count)
    {
        bool estPremier = true;
        for (int diviseur = 2; diviseur <= nombre; diviseur++)
        {
            if (nombre % diviseur == 0)
            {
                estPremier = false;
                break;
            }
        }
        if (estPremier)
        {
            nombresPremiers.Add(nombre);
        }
        nombre++;
    }
    Console.WriteLine($"Les {count} premiers nombres premiers sont : {string.Join(", ", nombresPremiers)}");
}
else
{
    Console.WriteLine("Veuillez entrer un nombre entier positif.");
}




