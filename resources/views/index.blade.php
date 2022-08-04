<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    @include('partial.nav')
    <section class="row black" id="home">

        <div class="carousel carousel-slider">
            <img class="brake-img" src="{{ url('assets/asset/image/breaking.jpg') }}" alt="">
            <a class="carousel-item" href="#one!">
                <div>
                    <img src="{{ url('https://lorempixel.com/250/250/nature/1') }}">
                </div>
            </a>
            <a class="carousel-item" href="#two!">
                <div>
                    <img src="{{ url('https://lorempixel.com/250/250/nature/1') }}">
                </div>
            </a>
            <a class="carousel-item" href="#three!">
                <div>
                    <img src="{{ url('https://lorempixel.com/250/250/nature/1') }}">
                </div>
            </a>

        </div>

    </section>
    <section class="row " id="home">
        <div class="col s12  m10 ">
            <h1 class="xlarge black-text">
                Top headlines
            </h1>
        </div>
    </section>
    <section>
        <div class="article row">
            @foreach ($articles as $article)
                <div class="col s10 offset-s1 offset-m1 m4 l4 offset-l0">
                    <div class="row">
                        <div class="col l12">
                            <a href="{{ url('/articles/' . $article->title) }}">
                                <div class="card z-depth-1" style="min-height: 430px;max-height:430px;overflow:hidden">
                                    <div class="card-image">
                                        <img style="height: 300px" src="{{ $article->urlToImage }}">
                                        <span class="card-title"
                                            style="background: rgba(0, 0,0, 0.5);padding:5px;line-height:1.65rem">{{ $article->title }}</span>
                                        @auth
                                            <a href="{{ url('/save/' . $article->title) }}"
                                                class="btn-floating halfway-fab waves-effect waves-light black"
                                                title="save news"><i class="material-icons">add</i></a>
                                        @endauth

                                    </div>
                                    <div class="card-content black-text"
                                        style="font-size: 1rem;white-space: wrap;padding:5px;
                                            overflow: hidden;text-overflow: ellipsis">
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

    <section class="black white-text row" id="contact">
        <div class="col l12 m12 s12">
            <h4>News Leeter</h4>
        </div>
        <div class="col l5 m5 s12">
            <p>Subscribe to our news letter and Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                magnam soluta illum ut nulla voluptatem! Ad sequi quis ipsam repellat pariatur quia, id veritatis nam
                fugit ratione asperiores quibusdam architecto!</p>
        </div>
        <div class="con-form col l5 m5 s12 push-l2 push-m2">
            <form id="form" method="POST" action="{{ route('newsletter') }}">
                @csrf
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="white-text validate" required />
                </div>

                <div class="btn1 center white-border">
                    <a href="#" onclick="event.preventDefault(); document.querySelector('#form').submit()"
                        class="b white-text transparent">send&nbsp;message</a>
                </div>
            </form>

        </div>
    </section>
</body>
<script src="{{ url('assets/javascript/main.js') }}" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {});
    });
</script>

</html>
