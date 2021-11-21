<x-layout>
    <!------Start of Main video section------->
    <div class="overview-video">
        <div class="overlay">
            <div class="container">
                <div class="main-info">
                    <h3>course name <span>$39.99</span></h3>
                    <button><img src="images/white-play-icon-png-6.jpg"></button>
                    <p class="watch">watch a video intro</p>
                </div>
            </div>
        </div>
    </div>
    <!------End of Main video section------->

    <!------Start of add to cart section---->
    <section class="add-cart">
        <div class="container">
            <div class="some-info">
                <h4>how this course will help your career</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, reprehenderit enim magni blanditiis praesentium, quidem quo hic tenetur repellat voluptate delectus? Expedita quam magnam iure veniam, doloremque natus earum? Laborum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, reprehenderit enim magni blanditiis praesentium, quidem quo hic tenetur repellat voluptate delectus? Expedita quam magnam iure veniam, doloremque natus earum? Laborum.</p>
            </div>
            <div class="cart">
                <button>buy this course</button>
                <button>add to cart</button>
            </div>
        </div>
    </section>
    <!------End of add to cart section------>

    <!------Start of course content section-------->
    <section class="course-content">
        <div class="container">
            <h3>course content</h3><hr class="hr">
            <div class="content-bar">
                <div class="head-bar">
                    <h4><img src="images/plus-24.png">introduction to the coures<span>22:00</span></h4>
                </div>
                <div class="bar-content">
                    <h6><img src="images/purple-play.png">why this course<span>01:00</span></h6>
                    <h6><img src="images/purple-play.png">syllabus walk through<span>02:05</span></h6>
                </div>
            </div>
            <div class="content-bar">
                <div class="head-bar">
                    <h4><img src="images/plus-24.png">introduction to the coures<span>22:00</span></h4>
                </div>
                <div class="bar-content">
                    <h6><img src="images/purple-play.png">why this course<span>01:00</span></h6>
                    <h6><img src="images/purple-play.png">syllabus walk through<span>02:05</span></h6>
                </div>
            </div>
            <div class="content-bar">
                <div class="head-bar">
                    <h4><img src="images/plus-24.png">introduction to the coures<span>22:00</span></h4>
                </div>
                <div class="bar-content">
                    <h6><img src="images/purple-play.png">why this course<span>01:00</span></h6>
                    <h6><img src="images/purple-play.png">syllabus walk through<span>02:05</span></h6>
                </div>
            </div>
            <div class="content-bar">
                <div class="head-bar">
                    <h4><img src="images/plus-24.png">introduction to the coures<span>22:00</span></h4>
                </div>
                <div class="bar-content">
                    <h6><img src="images/purple-play.png">why this course<span>01:00</span></h6>
                    <h6><img src="images/purple-play.png">syllabus walk through<span>02:05</span></h6>
                </div>
            </div>
            <div class="content-bar">
                <div class="head-bar">
                    <h4><img src="images/plus-24.png">introduction to the coures<span>22:00</span></h4>
                </div>
                <div class="bar-content">
                    <h6><img src="images/purple-play.png">why this course<span>01:00</span></h6>
                    <h6><img src="images/purple-play.png">syllabus walk through<span>02:05</span></h6>
                </div>
            </div>
            <div class="content-bar">
                <div class="head-bar">
                    <h4><img src="images/plus-24.png">introduction to the coures<span>22:00</span></h4>
                </div>
                <div class="bar-content">
                    <h6><img src="images/purple-play.png">why this course<span>01:00</span></h6>
                    <h6><img src="images/purple-play.png">syllabus walk through<span>02:05</span></h6>
                </div>
            </div>
        </div>
    </section>
    <!------End of course content section-------->

    <!------Start of description section--------->
    <section class="course-description">
        <div class="container">
            <div>
                <h3>description</h3><hr class="hr">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum quae voluptatem, voluptate ratione voluptatum, sapiente neque odit veritatis atque quidem praesentium tenetur velit! Ullam voluptates sit excepturi velit quasi maiores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum quae voluptatem, voluptate ratione voluptatum, sapiente neque odit veritatis atque quidem praesentium tenetur velit! Ullam voluptates sit excepturi velit quasi maiores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum quae voluptatem, voluptate ratione voluptatum, sapiente neque odit veritatis atque quidem praesentium tenetur velit! Ullam voluptates sit excepturi velit quasi maiores.
                </p>
            </div>
        </div>
    </section>
    <!------Start of description section--------->

    <!------Start of featured section------------>
    <section class="featured-review">
        <div class="container">
            <h3>featured review</h3><hr class="hr">
            <div class="review">
                <div class="user-info">
                    <img src="images/17.png">
                    <div>
                        <h6>said omar</h6>
                        <span>1 week ago</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloremque aliquid culpa minima autem, sunt consectetur. Quo qui sed quasi.Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloremque aliquid culpa minima autem, sunt consectetur. Quo qui sed quasi</p>
            </div>
        </div>
    </section>
    <!------End of featured section-------------->

    <!------Start of current courses section----->
    <div class="checked-courses">
        <div class="container">
            <h2>students also check this</h2><hr class="hr">
            <div class="cards">
                @foreach ($courses as $course)
                    <x-course-card :course="$course" />
                @endforeach
            </div>
            <button><img src="images/chevron-right.png"></button>
            <button><img src="images/chevron-left.png"></button>
        </div>
    </div>
    <!---------------End of current courses section--------------------------------------->
</x-layout>
