<header>
    <div class="container">
        <a href="/ru/" class="logo"><img src="/assets/images/logo.png"></a>
        <div class="langs" style="">
            <a href="#" class="langs__btn">
                <span class="plus">+</span>
                <span class="minus">-</span>
            </a>
            <ul>
                <li @if(app()->isLocale('en')) class="active"@endif><a href="/en/">Eng</a></li>
                <li @if(app()->isLocale('kk')) class="active"@endif><a href="/kz/">Каз</a></li>
                <li @if(app()->isLocale('ru')) class="active"@endif><a href="#">Рус</a></li>
            </ul>
        </div>
        <ul class="socials">
            <li><a href="https://www.instagram.com/abart.kz/" target="_blank"><img src="/assets/images/instagram.svg"></a></li>
            <li class="vk"><a href="https://vk.com/id508250357" target="_blank"><img src="/assets/images/vk.svg"></a></li>

        </ul>
        <form class="search" method="POST" action="/ru/search/"><!-- header search -->
            <input type="search" placeholder="Введите слово..." required="required" name="what">
            <a href="#" class="close"></a>
        </form><!-- header search -->
        <a href="#" class="search--btn"></a>
        <a href="#" class="nav--btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <div class="container-fluid">
        <div class="container">
            <nav class="nav">
                <ul>
                    <li><a href="/ru/about/">О проекте</a></li>
                    <li class="submenu"><a href="/ru/catalog/">+Каталог</a>
                        <ul style="">
                            <li><a href="/ru/catalog/438-zhivopis/">Живопись</a></li>
                            <li><a href="/ru/catalog/439-dekorativno_prikladnoje_iskusstvo/">Декоративно прикладное
                                    искусство</a></li>
                            <li><a href="/ru/catalog/440-skulptura/">Скульптура</a></li>
                            <li><a href="/ru/catalog/441-raznoje/">Разное</a></li>
                        </ul>
                    </li>
                    <li><a href="/ru/news/">Новости</a></li>
                    <li><a href="/ru/contacts/">Контакты</a></li>
                    <li><a href="/ru/work/">Выставить работу</a></li>
                    <li><a href="/ru/rev/">Отзывы</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
