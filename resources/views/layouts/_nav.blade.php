<div class="navbar-area headroom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img style="width: 60%" src="{{asset('assets/images/contoh/1.png')}}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-5">
                            <li class="nav-item">
                                <a href="{{route('index')}}" target="_blank">Beranda</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a href="{{route('tentang')}}" target="_blank">Tentang Saya</a>
                                </li>
                                <li class="nav-item">
                                    <a target="_blank" href="{{route('contoh')}}">Contoh Pengisian Kuesioner</a>
                                </li>
                            @endguest
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @auth()
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endauth
                        </ul>
                    </div> <!-- navbar collapse -->

                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- navbar area -->
