@if ($listing)
    <h3>{{ $listing['id'] }} - {{ $listing['content'] }}</h3>
@else
    <div>listing not found :(</div>
@endif
