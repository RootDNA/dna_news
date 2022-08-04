<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    @include('partial.nav')

    <section>
        <article class="row">
            <div class="col l10 offset-l1  ">
                <img src="" alt="">
            </div>
            <div col l10 offset-l1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque a provident facilis maiores
                    repudiandae dolorum eligendi quod sit nesciunt! Dolorum sapiente maxime recusandae, vel voluptatibus
                    architecto dolorem reprehenderit fuga facere.</p>
            </div>
            <div class="col l10 offset-l1" style="diplay:flex; justify-content: space-between">
                <p>a</p>
                <p>b</p>
            </div>
        </article>
    </section>

    <section>
        <h4>Similar news</h4>
        <div class="article row">
            @foreach ($articles as $article)
                <div class="col s10 offset-s1 offset-m1 m4 l4 offset-l0">
                    <div class="row">
                        <div class="col l12">
                            <a href="{{ url('/articles/' . $article->title) }}">
                                <div class="card" style="min-height: 450px">
                                    <div class="card-image">
                                        <img src="{{ $article->urlToImage }}">
                                        <span class="card-title">{{ $article->title }}</span>
                                    </div>
                                    <div class="card-content">
                                        <p>{{ $article->description }}</p>
                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <!-- Start Footer -->
    @include('partial.header')
</body>

</html>
