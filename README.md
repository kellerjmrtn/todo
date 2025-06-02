# Installation

I used PHP 8.3, Laravel 12, Livewire 3, NPM 10. To install,

1. Clone the repo
2. `composer install` & `npm install`
3. Copy .env.example to .env
4. `php artisan key:generate` & `php artisan migrate`
5. `composer run dev`

# Comments

I thought the Figma design looked really good, and it fit really well with Flux's components and Tailwind's styles, so I mostly followed it with a few tweaks. My implementation is responsive for all screen sizes, and is keyboard navigable. I had a good time using Flux, which I had never used before, the components were convenient and very nice looking.

The app allows for adding new tasks, completing tasks, moving tasks back from completed state to to-do state, and deleting tasks once completed.