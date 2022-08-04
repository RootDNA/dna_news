<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    @include('partial.nav')
    <section class="row black" id="home">
        <div class="col s12 m6 l6 land-img push-l5 offset-l1">
            <img class="responsive-img" src="" alt="image" />
        </div>
        <div class="col s12 m5 l5 pull-l6 white-text">
            <!-- style="background-image: src('{{ url('') }}')" -->
            <h1 class="xlarge">

            </h1>


            <div class="btn1 center white-border">
                <a href="#contact" class="b white-text transparent">Contact&nbsp;me</a>
            </div>
        </div>
    </section>
    <section>
        <div class="article row">
            @foreach ($articles as $article)
                <div class="col s10 offset-s1 offset-m1 m4 l4 offset-l0">
                    <div class="row">
                        <div class="col l12">
                            <a href="{{ url('/articles/' . $val->id) }}">
                                <div class="card" style="min-height: 400px">
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
