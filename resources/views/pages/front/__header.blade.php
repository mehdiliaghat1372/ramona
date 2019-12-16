<header>
    <div class="container-fluid rtl">
        <div class="row">
            <div class="col-md-6">
                <a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
                <div class="categories">
                    <span>دسته بندی</span>
                    <i class="fas fa-sort-down"></i>
                    <ul>
                        @foreach($categories as $c)
                            <li><a href="{{ route('categories.show', $c) }}">{{ $c->title }}</a></li>
                        @endforeach
                        <li><a href="{{ route('categories.show', 0) }}">همه</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <a href="{{ route('auth.sign-in') }}" class="sign">
                    <i class="fas fa-user"></i>
                    <span>ورود کاربران</span>
                </a>
            </div>
        </div>
    </div>
</header>
