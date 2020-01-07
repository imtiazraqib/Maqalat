## CRUD Maqalat
Maqalat is a completely functional CRUD API the features can be tested. Setting it up will create 30 Fake Articles with an `id`, `title` and `body` along with an `author_url` currently set to *[https://imtiazraqib.com](https://imtiazraqib.com)*

#### Setup Maqalat for testing
1. Download [XAMPP](https://www.apachefriends.org/index.html) and [Composer](https://getcomposer.org/)
2. Clone the repository
3. Open XAMPP Control Center and start the Apache Server
4. Fire up a browser and type in `http://maqalat.test` and it is working if you see the **Laravel** logo
5. Fire up [Postman](https://www.getpostman.com/downloads/) or your choice of API tester (Although Postman is pretty cool, not sponsored! 😢)

6. Below is the workflow for [Postman](https://www.getpostman.com/downloads/):
    - **[POST]()**  -> http://maqalat.test/api/article
        - Add a new Header with **Key** = [Content-Type]() and **Value** = [application/json]()
        - Body follows a `raw` format as shown below
        ```json
            {
                "title":"Whatever is your new title",
                "body":"Whatever you wanna keep as the new body"
            }
        ```
    - **[GET]()**   -> http://maqalat.test/api/articles
    - **[PUT]()**   -> http://maqalat.test/api/article
        - Add a new Header with **Key** = [Content-Type]() and **Value** = [application/json]()
        - Body follows a `raw` format as shown below
        ```json
            {
                "article_id": 4,
                "title":"Whatever is your UPDATED title",
                "body":"Whatever you wanna keep as the UPDATED body"
            }
        ```
        - The `article_id` is the `id` of the article that you want to update with the following `title` and `body`
    - **[DEL]()**   -> http://maqalat.test/api/article/{id}
        - Replace `{id}` with the actual article id you want to delete.

## Inspiration
The project is setup personally for me to learn Laravel and familiarize myself with the framework. The project would not have been possible without the tutorial from [Traversy Media](https://www.youtube.com/channel/UC29ju8bIPH5as8OGnQzwJyA) over at YouTube. His video titled, *[Laravel 5.5 API From Scratch Using Resources](https://www.youtube.com/watch?v=4pc6cgisbKE)* is what I used personally to follow along and learn the fundamentals of Laravel.

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
