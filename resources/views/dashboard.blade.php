<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta type="keywords"
        content="cameroon, cameroon trade, trading, invest, investing, investment, mobile coin,coins,coins,mtn mobile money investing, orange money investing, investment platform,trading platform, decentralised platform, trade in cameroon, investing in cameroon, trading in cameroon, secure trade in cameroon, legit trading in cameroon, momo smart contracts, momo smart contract, momo coin auction, momo smart investments" />
    <title>Sekavehicle</title>

    <link rel="stylesheet" href={{ url('assets/style/materialize.css') }} />
    <link rel="stylesheet" href={{ url('assets/style/material-icon.css') }} />
    <link rel="stylesheet" href={{ url('assets/style/userDashboard.css') }} />
    <link rel="stylesheet" href={{ url('assets/style/stock.css') }} />
    <link rel="stylesheet" href={{ url('assets/style/modal.css') }} />
    <link rel="stylesheet" href={{ url('assets/style/btn.css') }} />
    <script src="{{ url('assets/javascript/materialize.js') }}"></script>
    <script src="{{ url('assets/javascript/userDashboard.js') }}" src="js/userDashboard.js" defer></script>
    {{-- <script src="js/chart.min.js" defer></script> --}}
    <script src="{{ url('assets/javascript/stock.js') }}" defer></script>
    <script src="{{ url('assets/javascript/modal.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>

    <span id="page-location" data-location="report" data-bidstep="1"></span>

    <ul class="main-nav sidenav" id="side-nav">
        <div class="brand-logo">
            <a href="#">
                <!-- <img src="assets/images/logo_mobile.png" alt="logo" /> -->
                <h2 class="whitte-text">Logo</h2>
            </a>
        </div>


        <li>
            <a class="active" href="{{ url('/dashboard') }}" data-location="help"><i
                    class="material-icons">help</i>Demande special</a>
        </li>

        <div class="line"></div>
    </ul>

    <div class="main container">
        <div class="head">
            <div>
                <a href="#" class="btn sidenav-trigger black" data-target="side-nav"><i
                        class="material-icons">menu</i></a>
            </div>

            <div class="user-info-top">
                <div class="user-name hide-on-small-and-down">John Lugs</div>
                <img src="assets/images/download.jpg" class="materialboxed" id="user_avatar" />
                <i class="material-icons" id="expand_more">expand_more</i>
                <ul class="collection log-menu">
                    <li class="collection-item">
                        <a href="{% url 'user_settings' %}" data-location="./settings.html">
                            <button class="btn-flat waves-effect waves-dark black-text">
                                Settings
                            </button>
                        </a>
                    </li>
                    <li class="collection-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="btn-flat waves-effect waves-dark black-text">
                                Logout
                            </button>
                        </form>

                    </li>

                </ul>
            </div>
        </div>
        <div class="page-title">ARTICLES</div>

        <div class="dashboard">
            <div style="display: flex; align-items: center">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias
                    commodi, porro .
                </p>
                <a data-target="#modal1" class="addapp btn-flat btn-2 modal-trigger">Add article</a>
            </div>
            <div class="table-div">

                <div id="test3" class="table">
                    <div class="table-head">
                        <p><b></b> to <b>10</b> of <b> 3000</b></p>
                        <div style="display: flex; align-items: center; width: 220px">
                            <p style="margin-right: 7px">Action</p>
                            <select name="" class="browser-default">
                                <option value="archive">Archive</option>
                            </select>
                            <button class="btn-flat btn-2">OK</button>
                        </div>
                    </div>
                    <table class="centered">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Details</th>
                            <th>Select</th>
                        </tr>
                        @foreach ($articles as $article)
                            <tr>
                                <td><img src="{{ url($article->urlToImage) }}" style="max-height:35px;max-width:70px"
                                        alt=""></td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->author }}</td>
                                <td>{{ $article->publishedAt }}</td>
                                <td>
                                    <form method="POST" class="left" action="{{ route('deleteArticle') }}">
                                        @csrf
                                        <input type="text" value="{{ $article->id }}" name="id" id=""
                                            hidden>
                                        <button class="btn-flat red white-text"
                                            style="padding:5px !important;line-height:10px">delete</button>
                                    </form>

                                    <button onclick="update({{ $article->id }})" class="btn-flat green white-text"
                                        style="padding:5px !important;line-height:10px">update</button>
                                </td>
                                <td>
                                    <input type="checkbox" class="filled-in" />
                                </td>
                            </tr>
                        @endforeach


                    </table>
                    <center>
                        <ul class="pagination">

                            @if ($num == 0)
                                <li class="disabled">
                                    <a href="#!"><i class="material-icons">chevron_left</i></a>
                                </li>
                            @else
                                <li class="waves-effect">
                                    <a href="#!"><i class="material-icons">chevron_left</i></a>
                                </li>
                            @endif
                            @for ($i = 0; $i < $count; $i++)
                                @if ($i == $nums)
                                    <li class="active"><a
                                            href="{{ url('shop/' . $path . '/' . $i) }}">{{ $i }}</a></li>
                                @else
                                    <li class="waves-effect"><a href="">{{ $i }}</a></li>
                                @endif
                            @endfor
                            @if ($count == $num)
                                <li class="disabled">
                                    <a href="#!"><i class="material-icons">chevron_right</i></a>
                                </li>
                            @else
                                <li class="waves-effect">
                                    <a href="#!"><i class="material-icons">chevron_right</i></a>
                                </li>
                            @endif

                        </ul>
                    </center>
                </div>

            </div>
            <div id="modal1" class="full-modal">
                <div class="modal-content">
                    <a data-target="#modal1" onclick="form.action = upd;form.reset() "
                        class="btn-flat btn-3 modal-trigger"><i data-target="#modal1"
                            class="material-icons left white-text">arrow_backward</i>
                        back</a>
                    <div class="row">

                        <div id="car" class="forms col s12 m8 offset-m2">
                            <form class="add" action="{{ route('saveArticle') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form">

                                    <h4 class="center">AJOUTER UN ARTICLE</h4>
                                    <div class="line"></div>
                                    <div class="row">
                                        <br />
                                        <input type="text" value="" name="id" class="id" hidden>
                                        <div class="input-field col s12">
                                            <input id="colori" name="title" type="text"
                                                class=" title validate" />
                                            <label for="colori">Title</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select name="type" id="" class="type">
                                                <option value="" disabled selected>Category</option>
                                                <option value="business">Business</option>
                                                <option value="entertainment">Entertainment</option>
                                                <option value="general">General</option>
                                                <option value="health">Health</option>
                                                <option value="science">Science</option>
                                                <option value="sports">Sports</option>
                                                <option value="technology">Technology</option>
                                            </select>
                                        </div>


                                        <div class="input-field col s12">
                                            <input id="color" name="author" type="text"
                                                class=" author validate" />
                                            <label for="color">Author</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="textarea1" name="description" class="validate description materialize-textarea"></textarea>
                                            <label for="textarea1">Description</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" name="content" class=" validate content materialize-textarea"></textarea>
                                            <label for="textarea1">Content</label>
                                        </div>
                                        <div class="file-field input-field col s12">
                                            <div class="btn">
                                                <span>image</span>
                                                <input name="image" type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <a class="btn-flat btn-2 red" style="border: none">
                                            cancel
                                        </a>
                                        <button class="btn-flat btn-2 right" style="margin-right: 30px">
                                            Proceed
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <br />
        </div>
    </div>
    <script>
        M.AutoInit();
    </script>
    <script>
        let form = document.querySelector(".add");
        web = window.location.host;
        upd = 'https://' + web + "/updateArticle";
        save = 'https://' + web + "/dashboard";

        function update(id) {
            web = window.location.host;
            url = 'https://' + web + '/api/v1/articles/' + id

            fetch(url, {
                method: 'GET',
                credentials: "same-origin",


            }).then(function(response) {
                return response.json();
            }).then(function(json) {


                if (json['status'] == "ok") {
                    form.reset();
                    document.querySelector(".id").value = json["article"]["id"];
                    document.querySelector(".title").value = json["article"]["title"];
                    document.querySelector(".content").value = json["article"]["content"];
                    document.querySelector(".description").value = json["article"]["description"];
                    document.querySelector(".author").value = json["article"]["author"];
                    document.querySelector(".type").value = json["article"]["type"];
                    document.querySelector(".addapp").click();
                    form.action = upd;
                    M.updateTextFields();

                }

            }).catch(function(error) {
                console.log(error);


            });
        }
    </script>
</body>

</html>
