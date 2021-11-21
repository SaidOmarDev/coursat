<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Coursat</title>
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
                    <div class="login">
                        <a href="/register">Register</a>
                        <a href="login">login</a>
                    </div>
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
        <script src="js/scripts.js"></script>
    </body>
</html>
