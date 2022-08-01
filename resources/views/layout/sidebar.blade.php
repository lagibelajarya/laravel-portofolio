<div class="sidebar">
    <div class="sidebar__logo">
        <img src={{ asset('./img/man.png') }} alt="" class="sidebar__logo-img">
        <p class="sidebar__logo-text">Portofolio</p>
    </div>
    <div class="sidebar__list">
        <a href="/" class="sidebar__list--link">Home</a>
        <a href="/about" class="sidebar__list--link">About</a>
        <a href="/gallery" class="sidebar__list--link">Gallery</a>
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
            <ion-icon id="nav-btn-hide" name="close-circle-outline"></ion-icon>
        </div>
    </div>
    <div class="navbar__list">
        <a href="/" class="navbar__list--link">
            <ion-icon name="home-outline"></ion-icon>home
        </a>
        <a href="/about" class="navbar__list--link">
            <ion-icon name="person-outline"></ion-icon>About
        </a>
        <a href="/gallery" class="navbar__list--link">
            <ion-icon name="images-outline"></ion-icon>Gallery
        </a>
    </div>
</div>
