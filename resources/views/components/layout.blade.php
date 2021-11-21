<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Coursat</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/courses.css">
        <link rel="stylesheet" href="css/course-details.css">
        <link rel="stylesheet" href="css/media.css">
    </head>
    <body>
        <!----------------------Start of Header Section------------------------->
        <header>
            <nav>
                <div class="container">
                    <a href="/">Coursat</a>
                    <ul>
                        <li class="active"><a href="/">home</a></li>
                        <li><a href="/about" >about us</a></li>
                        <li><a href="/courses">courses</a></li>
                        <li><a href="/contact">contact us</a></li>
                    </ul>
                    @auth
                    <div class="login">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>
                            </x-slot>

                            {{-- @admin
                                <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                            @endadmin --}}

                            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>
                            <form id="logout-form" method="POST" action="/logout" class="hidden">
                                @csrf
                            </form>
                        </x-dropdown>
                    </div>
                    @else
                    <div class="login">
                        <a href="/register">Register</a>
                        <a href="login">login</a>
                    </div>
                    @endauth
                </div>
            </nav>
        </header>
        <!----------------------End of Header Section------------------------->

        {{ $slot }}

        <!------Start of footer section---------------------->
        <footer><p>&copy; we can all rights reserved 2019</p></footer>
        <!------End of footer section---------------------->

        <!------Scripts------------------->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
