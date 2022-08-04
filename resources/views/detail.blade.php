<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    @include('partial.nav')

    <section>
        <article class="row">
            <div class="col l10 offset-l1">
                <img style="height: 450px;width:100%" src="{{ $article->urlToImage }}" alt="new-image">
            </div>
            <div class="col l10 offset-l1">
                <pre>{{ $article->description }}</pre>
                <p>{{ $article->content }}</p>
            </div>

            <div class="col l10 offset-l1 ">
                <p class="right">{{ $article->publishedAt }}</p>
                <p class="left">{{ $article->author }}</p>
            </div>
        </article>
    </section>

    <section>
        <h4>Similar news</h4>
        <div class="article row ">
            @foreach ($articles as $article)
                <div class="col s10 offset-s1 offset-m1 m4 l4 offset-l0">
                    <div class="row">
                        <div class="col l12">
                            <a href="{{ url('/articles/' . $article->title) }}">
                                <div class="card z-depth-1" style="min-height: 430px;max-height:430px">
                                    <div class="card-image">
                                        <img style="height: 300px" src="{{ $article->urlToImage }}">
                                        <span class="card-title"
                                            style="background: rgba(0, 0,0, 0.5);padding:5px;font-size:1.6rem;line-height:1.65rem">{{ $article->title }}</span>
                                    </div>
                                    <div class="card-content black-text"
                                        style="font-size: 1rem;white-space:wrap;padding:5px;
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
            <form action="">
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="white-text validate" />
                </div>

                <div class="btn1 center white-border">
                    <a href="" class="b white-text transparent">send&nbsp;message</a>
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
