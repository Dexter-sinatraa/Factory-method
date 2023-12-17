<?php
// Інтерфейс фабричного методу
interface ProductFactory {
    public function createProduct();
}

// Конкретна реалізація фабричного методу для створення конкретного продукту
class ConcreteProductFactory implements ProductFactory {
    public function createProduct() {
        return new ConcreteProduct();
    }
}

// Базовий клас продукту
interface Product {
    public function getName();
}

// Конкретний клас продукту
class ConcreteProduct implements Product {
    public function getName() {
        return 'Concrete Product';
    }
}

// Використання фабричного методу
$factory = new ConcreteProductFactory();
$product = $factory->createProduct();

echo $product->getName(); // Виведе: Concrete Product
