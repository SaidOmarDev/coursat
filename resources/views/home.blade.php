<x-layout>
<!------Start of Main video section------->
    <div class="main-video">
        <div class="overlay">
            <div class="container">
                <div class="main-info">
                    <h3>together we can</h3>
                    <p>courses that changes your life</p>
                    <button><img src="images/white-play-icon-png-6.jpg"></button>
                    <p class="watch">watch a video intro</p>
                </div>
            </div>
        </div>
    </div>
<!------End of Main video section------->
<!------Start of recent courses section---------------->
    <section class="recent-courses">
        <div class="container">
            <div class="recent-info">
                <h3>recent courses</h3>
                <p>more courses</p>
                <img src="images/right-arrow-24.png">
            </div>
            <div class="video-cards cards">
                <x-recent-course-card />
                <x-recent-course-card />
                <x-recent-course-card />
            </div>
        </div>
    </section>
<!------End of recent courses section---------------->

<!------Start of about section---------------->
    <x-about />
<!------End of about section------------------>

<!------Start of our courses section------------------>
    <section class="our-courses">
        <div class="container">
            <h3>our courses</h3><hr class="hr">
            <div class="cards">
                @foreach ($courses as $course)
                    <x-course-card :course="$course" />
                @endforeach
            </div>
            <button><img src="images/chevron-right.png"></button>
            <button><img src="images/chevron-left.png"></button>
        </div>
    </section>
<!------End of our courses section-------------------->

<!------Start of contact section---------------------->
    <x-contact />
<!------End of contact section---------------------->
</x-layout>
