<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
</head>
<body>
    <h1>URL Shortener</h1>
    @if (session('shortened_url'))
        <p>Kısaltılmış URL: <a href="{{ url(session('shortened_url')) }}">{{ url(session('shortened_url')) }}</a></p>
    @endif
    <form action="/shorten" method="POST">
        @csrf
        <input type="text" name="url" placeholder="Uzun URL'yi buraya yapıştırın">
        <button type="submit">Kısalt</button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
