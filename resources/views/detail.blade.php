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
            {{-- @foreach ($articles as $article) --}}
            <div class="col s10 offset-s1 offset-m1 m4 s3">
                <div class="row">
                    <div class="col s12 m7">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/sample-1.jpg">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>

    </section>
    <!-- Start Footer -->
    @include('partial.header')
</body>

</html>
