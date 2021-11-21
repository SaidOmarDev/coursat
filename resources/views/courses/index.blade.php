<x-layout>
    <!---------------Start of current courses section----------------------------->
    <div class="courses-tabs">
        <div class="container">
            <!-----------Start of courses tabs Section----------->
            <div class="tabs">
                <ul>
                    <li><a href="#">web development</a></li>
                    <li><a href="#">design</a></li>
                    <li><a href="#">economic</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">network</a></li>
                    <li><a href="#">databases</a></li>
                </ul>
            </div>
            <!------------End of courses tabs Section------------->
            <div class="current-courses">
                <h2>recent courses</h2><hr class="hr">
                <div class="cards">
                    @foreach ($courses as $course)
                        <x-course-card :course="$course" />
                    @endforeach
                </div>
                <button><img src="images/chevron-right.png"></button>
                <button><img src="images/chevron-left.png"></button>
            </div>
        </div>
    </div>
    <!---------------End of current courses section--------------------------------------->

    <!---------------Start of popular courses section--------------------------------------->
    <div class="popular-courses">
        <div class="container">
            <h2>popular courses</h2><hr class="hr">
            <div class="cards">
                @foreach ($courses as $course)
                    <x-course-card :course="$course" />
                @endforeach
            </div>
            <a class="more" href="#">
                <p>more courses</p>
                <img src="images/right-arrow-24.png">
            </a>
        </div>
    </div>
    <!---------------End of popular courses section----------------------------------------->
</x-layout>
