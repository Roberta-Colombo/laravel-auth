<section class="sidebar">
    <header>
            <a class="nav-link" href="#" id="userProfile" role="button">
                <div class="d-flex justify-content-end align-items-center">
                    <div class="me-3 d-none d-lg-inline">{{Auth::user()->name}}</div>
                    <div class="profile-img">
                        <img class="img-profile rounded-circle" src="{{ Vite::asset('resources/img/woman-profile-icon.jpg')}}">
                    </div>
                </div>    
            </a>
        </div>
    </header>
</section>