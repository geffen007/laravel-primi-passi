<main>
    <div class="container">
        <div class="cards">
            <h2>le lunghe</h2>
            <div class="section">
                @foreach ($lunghe as $card)
                    <div class="card">
                        <h3>{{$card['titolo']}}</h3>
                        <img src="{{$card['src-h']}}" alt="{{$card['titolo']}}">
                    </div>
                @endforeach
            </div>
            <h2>le corte</h2>
            <div class="section">
                @foreach ($corte as $card)
                    <div class="card">
                        <h3>{{$card['titolo']}}</h3>
                        <img src="{{$card['src-h']}}" alt="{{$card['titolo']}}">
                    </div>
                @endforeach
            </div>
            <h2>le cortissime</h2>
            <div class="section">
                @foreach ($cortissime as $card)
                    <div class="card">
                        <h3>{{$card['titolo']}}</h3>
                        <img src="{{$card['src-h']}}" alt="{{$card['titolo']}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
