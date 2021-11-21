<div class="card">
    <div class="video-img">
        <img src="images/image1.jpg">
    </div>
    <div class="video-info">
        <h5>{{ $course->name }} <span>${{ $course->price }}</span></h5>
        <p>{{ $course->slug }}</p>
        <a href="/courses/{{ $course->slug }}">
            <button class="btn">details</button>
        </a>
    </div>
</div>

