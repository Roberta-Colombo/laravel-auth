<section class="sidebar">
    <div class="d-flex align-items-end flex-column" style="height: 100%">
        <header>
            {{-- nome utente e avatar --}}
                <a class="nav-link" href="#" id="userProfile" role="button">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="me-3 d-none d-lg-inline">{{Auth::user()->name}}</div>
                        <div class="profile-img">
                            <img class="img-profile rounded-circle" src="{{ Vite::asset('resources/img/woman-profile-icon.jpg')}}">
                        </div>
                    </div>    
                </a>
        </header>
    
        {{-- logout --}}
        <div class="align-self-end mt-auto">
            <a class="nav-link me-3 me-lg-0" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" title="Logout">
              Logout <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</section>