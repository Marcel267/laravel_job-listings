<h1>listings</h1>

@foreach ($listings as $listing)
    <a href="/listing/{{ $listing['id'] }}"><h3>{{ $listing['id'] }} - {{ $listing['content'] }}</h3></a>
@endforeach