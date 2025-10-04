/*
Définissez deux structures Celsius et Fahrenheit toutes deux
ayant une variable température de type "double"
et une méthode ToFahrenheit() et ToCelsius() respectivement
*/
using System;
struct Celsius
{
    public double temperature;

    public double ToFahrenheit()
    {
        return (temperature * 9 / 5) + 32;
    }
}
struct Fahrenheit
{
    public double temperature;

    public double ToCelsius()
    {
        return (temperature - 32) * 5 / 9;
    }
}
class Program
{
    static void Main()
    {
        Celsius c = new Celsius();
        c.temperature = 100;
        Console.WriteLine($"{c.temperature}°C = {c.ToFahrenheit()}°F");

        Fahrenheit f = new Fahrenheit();
        f.temperature = 212;
        Console.WriteLine($"{f.temperature}°F = {f.ToCelsius()}°C");
    }
}

