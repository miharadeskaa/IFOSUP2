/* 
décrivez une structure permettant de construire une voiture
en utilisant des valeurs présentes dans des énumérations.

Ensuite, ajoutez lui des variables et méthodes utiles.
Une fois construite, faites la rouler.
*/


struct Voiture(Voiture.TypeVoiture classe,Voiture.Couleur couleur, Voiture.Marque marque, Voiture.Energie energie, Voiture.BoiteVitesse boiteVitesse, Voiture.Modele modele)
{
    public enum TypeVoiture { Citadine, Berline, SUV, Sportive, Utilitaire }
    public enum Couleur { Rouge, Bleu, Vert, Noir, Blanc }
    public enum Marque { Renault, Honda, Citroen, Ford, Toyota }
    public enum Energie { Essence, Diesel, Electrique, Hybride }
    public enum BoiteVitesse { Manuelle, Automatique }
    public enum Modele { Clio, CrX, C3, Fiesta, Corolla }


    public TypeVoiture voiture= classe;
    public Couleur couleur = couleur;
    public Marque marque = marque;
    public Energie energie = energie;
    public BoiteVitesse boiteVitesse = boiteVitesse;
    public Modele modele = modele;
    public int vitesse = 0;
    
    class Program
    {
        static void Main()
        {
            Voiture maVoiture = new Voiture(Voiture.Couleur.Rouge, Voiture.Marque.Renault, Voiture.Energie.Essence, Voiture.BoiteVitesse.Manuelle);
            maVoiture.AfficherDetails();
            maVoiture.Demarrer();
            maVoiture.Accelerer(50);
            maVoiture.Freiner(20);
            maVoiture.Arreter();
        }
    }
    public void Demarrer()
    {
        Console.WriteLine("La voiture démarre.");
        vitesse = 10;
    }

    public void Accelerer(int increment)
    {
        vitesse += increment;
        Console.WriteLine($"La voiture accélère. Vitesse actuelle : {vitesse} km/h.");
    }

    public void Freiner(int decrement)
    {
        vitesse -= decrement;
        if (vitesse < 0) vitesse = 0;
        Console.WriteLine($"La voiture freine. Vitesse actuelle : {vitesse} km/h.");
    }

    public void Arreter()
    {
        vitesse = 0;
        Console.WriteLine("La voiture s'arrête.");
    }
    public void AfficherDetails()
    {
        Console.WriteLine($"Détails de la voiture : Marque - {marque}, Couleur - {couleur}, Énergie - {energie}, Boîte de Vitesse - {boiteVitesse}");
    }
        
}

  
    
    


