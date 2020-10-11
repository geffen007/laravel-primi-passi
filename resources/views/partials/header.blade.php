    <body>
        <header>
            <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
            <nav>
                <ul>
                    <li><a href="{{route('home')}}" class="link {{ (url()->current() == route('home')) ?  'active' : 'noactive'}}">Home</a></li>
                    <li><a href="{{route('prodotti')}}" class="link {{ (url()->current() == route('prodotti')) ?  'active' : 'noactive'}}">Prodotti</a></li>
                    <li><a href="{{route('contatti')}}" class="link {{ (url()->current() == route('contatti')) ?  'active' : 'noactive'}}">Contatti</a></li>
                </ul>
            </nav>
        </header>
