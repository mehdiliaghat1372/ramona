<div class="slider-container">
    <div class="slider">
        @foreach($slides as $slide)
            <div class="slide" style="background-image: url({{ $slide->image }})">
                <div class="content">
                    <h3>{{ $slide->title }}</h3>
                    <p>{{ $slide->description }}</p>
                    <a href="{{ $slide->link }}" class="btn">{{ $slide->button }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
