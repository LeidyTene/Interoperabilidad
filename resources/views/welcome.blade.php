<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
    <div class="container">
        <header>
            <h1>Bienvenidos</h1>
            <nav>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a></li>
                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <section class="content">
                <h2>Interoperavilidad de Plataformas</h2>
                <p>Investigación Formativa:Consumo de una API con implementación en Laravel.<br>
                    Realizado por: Leidy Tene
                </p>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </footer>
    </div>
    
    <script src="scripts.js"></script>

    </body>
    </html>