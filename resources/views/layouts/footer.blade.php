<div class="center-sm">
    <div class="container">
        <div class="row">
            <div class="col-3 hidden-sm">
                <h3 class="bold">HELP</h3>
                <li><a href="#" class="link">Login</a></li>
                <li><a href="#" class="link">Register</a></li>

                <h3 class="bold">HELP</h3>
                <li><a href="#" class="link">Terms of Service</a></li>
                <li><a href="#" class="link">Privacy Policy</a></li>
                <li><a href="#" class="link">FAQ</a></li>
                <li><a href="#" class="link">Contact Us</a></li>
                <li><a href="#" class="link">About Us</a></li>

                <h3 class="bold">LANGUAGES</h3>
                <li><a href="#" class="link">Nederlands</a></li>
                <li><a href="#" class="link">Français</a></li>
                <li><a href="#" class="link">English</a></li>
            </div>

            <div class="col-3 hidden-sm">
                <h3 class="bold">STYLE</h3>
                <li><a href="#" class="link">Abstract</a></li>
                <li><a href="#" class="link">African American</a></li>
                <li><a href="#" class="link">Asian Contemporary</a></li>
                <li><a href="#" class="link">Conceptual</a></li>
                <li><a href="#" class="link">Contemporary</a></li>
                <li><a href="#" class="link">Emerging Artists</a></li>
                <li><a href="#" class="link">Figurative</a></li>
                <li><a href="#" class="link">Middle Eastern Contemporary</a></li>
                <li><a href="#" class="link">Minimalism</a></li>
                <li><a href="#" class="link">Modern</a></li>
                <li><a href="#" class="link">Pop</a></li>
                <li><a href="#" class="link">Uran</a></li>
                <li><a href="#" class="link">Vintage Photographs</a></li>

                <h3 class="bold">STYLE</h3>
                <li><a href="#" class="link">Design</a></li>
                <li><a href="#" class="link">Paintings and Works on Paper</a></li>
                <li><a href="#" class="link">Photographs</a></li>
                <li><a href="#" class="link">Prints and Multiples</a></li>
                <li><a href="#" class="link">Sculpture</a></li>
            </div>

            <div class="col-3 hidden-sm">
                <h3 class="bold">PRICE</h3>
                <li><a href="#" class="link">Up to 5,000</a></li>
                <li><a href="#" class="link">5,000-10,000</a></li>
                <li><a href="#" class="link">10,000-25,000</a></li>
                <li><a href="#" class="link">25,000-50,000</a></li>
                <li><a href="#" class="link">50,000-100,000</a></li>
                <li><a href="#" class="link">Above</a></li>

                <h3 class="bold">ERA</h3>
                <li><a href="#" class="link">Pre-War</a></li>
                <li><a href="#" class="link">1940s-1950s</a></li>
                <li><a href="#" class="link">1960s-1980s</a></li>
                <li><a href="#" class="link">1990s-Present</a></li>

                <h3 class="bold">ENDINGS</h3>
                <li><a href="#" class="link">Endin this Week</a></li>
                <li><a href="#" class="link">Newly Listed</a></li>
                <li><a href="#" class="link">Purchase Now</a></li>
                <li><a href="#" class="link">1990s-Present</a></li>
            </div>

            <div class="col-3 col-12-sm contact">
                <h3 class="bold">FIND WHAT YOU NEED.</h3>
                <input type="search" name="search" id="" placeholder="Search"><i class="fal fa-search"></i>

                <h3 class="bold">CONTACT</h3>
                <p>Landoretti ART</p>
                <p>Kerkstraat 41</p>
                <p>8200, Oostende</p>

                <span class="inline"><i class="fal fa-user"></i></i><p>+32 (0)2 987 23 62</p></span>
                <span class="inline"><i class="fal fa-envelope"></i><p>info@landorettiart.com</p></span>
                <i class="fab fa-facebook"></i>
            </div>
        </div>
        <div class="row right">
            <p class="copyright">© 2013 Studio6, Inc. All rights reserved.</p>
        </div>
    </div>
    <div class="nav-footer">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-8">
                    <ul class="nav">
                        <li class="bold"><a href="{{ route('home') }}">HOME</a></li>
                        <li class="bold"><a href="{{ route('auctions.index') }}">ART</a></li>
                        <li class="bold"><a href="search.html">ISEARCH</a></li>
                        <li class="bold"><a href="{{ route('myauctions') }}">MYAUCTIONS</a></li>
                        <li class="bold"><a href="myauctions.html">MYBIDS</a></li>
                        <li class="bold"><a href="{{ url('faq') }}">CONTACT</a></li>
                    </ul>
                </div>
                <div class="fl-right">
                    <ul class="nav language">
                        <li><a href="#">NL</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a class="bold" href="#">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="green-bar">
        <div class="container">
            <img class="logo footer" src="{{ URL::to('/') }}/images/static/logo.png" alt="Landoretti logo">
        </div>
    </div>
</footer>