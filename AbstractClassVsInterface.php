<!-- Difference between Abstract Class and Interface:

Abstract Class:

Can have both abstract methods (without body) and concrete methods (with body).
Can have properties (variables).
Can provide default behavior for some methods.
A class can extend only one abstract class.
Interface:

Can only have abstract methods (without body).
Cannot have properties.
All methods must be public.
A class can implement multiple interfaces. -->


<!-- Scenario Example:

Use an abstract class when you want to provide common base functionality that can be shared across multiple subclasses. 
Use interfaces when you want to ensure certain methods are implemented by any class, without providing any implementation details. -->


<?php

// Abstract class example
abstract class Animal
{
    // Concrete method
    public function eat()
    {
        echo "This animal is eating.\n";
    }

    // Abstract method
    abstract public function makeSound();
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Bark!\n";
    }
}

$dog = new Dog();
$dog->eat();
$dog->makeSound();

// Interface example
interface Flyable
{
    public function fly();
}

interface Swimmable
{
    public function swim();
}

class Duck implements Flyable, Swimmable
{
    public function fly()
    {
        echo "Duck is flying.\n";
    }

    public function swim()
    {
        echo "Duck is swimming.\n";
    }
}

$duck = new Duck();
$duck->fly();
$duck->swim();
?>