<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link href="{{ url('css/pagestyle.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">

    {{ $slot }}

  </div>
</body>
</html>
