<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menus = [
            [
                "id" => 1,
                "title" => "buttermilk pancakes",
                "category" => "breakfast",
                "price" => 15.99,
                "image" => "resources/images/item-1.jpeg",
                "description" => "Fluffy and tender pancakes made with buttermilk for a slightly tangy flavor, often served with butter and maple syrup."
            ],
            [
                "id" => 2,
                "title" => "diner double",
                "category" => "lunch",
                "price" => 13.99,
                "image" => "resources/images/item-2.jpeg",
                "description" => "A classic diner-style double cheeseburger, featuring two beef patties, cheese, lettuce, tomato, and condiments in a soft bun",
            ],
            [
                "id" => 3,
                "title" => "godzilla milkshake",
                "category" => "shakes",
                "price" => 6.99,
                "image" => "resources/images/item-3.jpeg",
                "description" => "A massive milkshake that's over-the-top in size and flavor, typically loaded with various toppings, candies, and often served with whipped cream and a cherry on top.",
            ],  
            [
                "id" => 4,
                "title" => "country delight",
                "category" => "breakfast",
                "price" => 20.99,
                "image" => "resources/images/item-4.jpeg",
                "description" => "A hearty and wholesome dish that may include fried or roasted chicken, mashed potatoes, gravy, and a side of vegetables, reminiscent of country-style comfort food.",
            ],
            [
                "id" => 5,
                "title" => "egg attack",
                "category" => "lunch",
                "price" => 22.99,
                "image" => "resources/images/item-5.jpeg",
                "description" => "A dish that showcases eggs in various styles, such as scrambled, fried, or poached, often served with a combination of accompaniments like bacon, sausage, and toast.",
            ],
            [
                "id" => 6,
                "title" => "oreo dream",
                "category" => "shakes",
                "price" => 18.99,
                "image" => "resources/images/item-6.jpeg",
                "description" => "A dessert or milkshake made with Oreo cookies and ice cream, resulting in a sweet, creamy, and chocolaty treat.",
            ],
            [
                "id" => 7,
                "title" => "bacon overflow",
                "category" => "breakfast",
                "price" => 8.99,
                "image" => "resources/images/item-7.jpeg",
                "description" => "A decadent dish featuring an abundance of crispy bacon, often served alongside other breakfast items like eggs, toast, or pancakes.",
            ],
            [
                "id" => 8,
                "title" => "american classic",
                "category" => "lunch",
                "price" => 12.99,
                "image" => "resources/images/item-8.jpeg",
                "description" => "Typically refers to a classic American cheeseburger with a beef patty, cheese, lettuce, tomato, and various condiments, served in a bun.",
            ],
            [
                "id" => 9,
                "title" => "quarantine buddy",
                "category" => "shakes",
                "price" => 16.99,
                "image" => "resources/images/item-9.jpeg",
                "description" => "A dish that might have become a favorite during quarantine, it could be a comfort food item like macaroni and cheese or a special homemade creation.",
            ],
            [
                "id" => 10,
                "title" => "stake",
                "category" => "dinner",
                "price" => 36.99,
                "image" => "resources/images/item-1.jpeg",
                "description" => "A high-quality cut of beef cooked to your preferred level of doneness, often seasoned and served with a choice of sauces and side dishes.",
            ],
            [
                "id" => 11,
                "title" => "soft drinks",
                "category" => "drinks",
                "price" => 4.5,
                "image" => "resources/images/item-1.jpeg",
                "description" => "Cola, Fanta, Sprite, Lemon lime bitters, Sparklin Water.",
            ],
        ];
    
        $faqs = [
            [
                "title" => "Do you offer vegetarian or vegan options on your menu?",
                "description" => "Yes, we offer a variety of vegetarian and vegan dishes. You can find them marked on our menu with specific symbols."
            ],
            [
                "title" => "What are your opening hours?",
                "description" => "We are open from [opening time] to [closing time] on [days of the week]. We are closed on [days when the restaurant is closed]."
            ],
            [
                "title" => "Do you have gluten-free options?",
                "description" => "Yes, we have gluten-free options available. Please specify your preference to our staff when placing your order."
            ],
        ];

        return view('pages.home', ['menus' => $menus, 'faqs' => $faqs]);
    }
}
