<html>
    <header>
        <title>Laravel Tutorial</title>
    </header>
    <body>
        <h1>{{$heading}}</h1>
        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
                <p>{{$listing['description']}}</p>
            @endforeach
            @else
            <p>No listings available</p>
        @endunless
    </body>
</html>