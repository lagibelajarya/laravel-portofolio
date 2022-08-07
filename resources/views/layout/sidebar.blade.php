<div class="sidebar">
    <div class="sidebar__logo" onclick="document.location='{{ route('home') }}'">
        <img src={{ asset('./img/man.png') }} alt="" class="sidebar__logo-img">
        <p class="sidebar__logo-text">Portofolio</p>
    </div>
    <div class="sidebar__list">
        <a href={{ route('home') }} class="sidebar__list--link">Home</a>
        <a href={{ route('about') }} class="sidebar__list--link">About</a>
        <a href={{ route('gallery') }} class="sidebar__list--link">Gallery</a>
        <a href={{ route('contact') }} class="sidebar__list--link">Contact</a>
    </div>
    <div class="sidebar__btn">
        <ion-icon id="nav-btn-show" name="menu-outline"></ion-icon>
    </div>
</div>

<div class="navbar">
    <div class="navbar__info">
        <img src={{ asset('./img/man.png') }} alt="" class="navbar__info--img">
        <p class="navbar__info--title">Portofolio</p>
        <div class="navbar__info--btn">
            <ion-icon class="nav-btn-hide" name="close-circle-outline"></ion-icon>
        </div>
    </div>
    <div class="navbar__list">
        <a href={{ route('home') }} class="navbar__list--link">
            <ion-icon name="home-outline"></ion-icon>home
        </a>
        <a href={{ route('about') }} class="navbar__list--link">
            <ion-icon name="person-outline"></ion-icon>About
        </a>
        <a href={{ route('gallery') }} class="navbar__list--link">
            <ion-icon name="images-outline"></ion-icon>Gallery
        </a>
        <a href={{ route('contact') }} class="navbar__list--link">
            <ion-icon name="mail-outline"></ion-icon>Contact
        </a>
    </div>
    <div class="navbar__btn">
        <button class="nav-btn-hide">close</button>
    </div>
</div>
