## ui42 candidate assignment

Mojou úlohou bolo implementovať body 1 a 4 zo zadania. Implementovala som body 1, 2, 4, 5 a 6.

## Použité technológie

- **PHP 8.0.12**
- **Laravel 8.67.0**
- **Eloquent ORM**
- **Postgres**
- **Bootstrap 5.1.3**
- **php simple html dom parser**

## Inštrukcie k používaniu
`php artisan data:import` - parsovanie dát na webe e-obce.sk, načítané dáta o mestách uloží do databázy s vyhýbaním sa duplikátom
`php artisan serve` - spustenie servera na localhoste

## Postrehy počas riešenia zadania

**Backend**
Do začiatku riešenia tohto zadania som sa nestretla s parsovaním dát z DOMu webu, preto mi chvíľu trvalo, kým som sa oboznámila s tým, ako sa niečo takéto robí. Nakoniec to však pre mňa nebol problém, nakoľko sa mi podarilo implementovať body 1 a 2, ktoré sa tohto týkali.

Trochu problematické bolo pre mňa routovanie v bode 6, nakoľko to bolo prvý raz, čo som skúšala presmerovanie routy podľa id bez udalosti vyvolanej userom.

**Frontend**
Zároveň, nemám skúsenosť s používaním SASS, preto som s ním v zadaní pracovala veľmi striedmo.


## Čas potrebný na implementáciu

- **bod 1 a 2**: 6 hodín (vrátane setupu projektu)
- **bod 4**: 7 hodín (vrátane tvorby bladeov pre celú appku, controllera a routovania)
- **bod 5**: 6 hodín (vrátane responzivity)
- **bod 6**: 1 hodina
- **refaktoring**: 1 hodina