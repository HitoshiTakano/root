<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>select</title>
</head>
<body >

<p>test</p>        
@foreach ($db1 as $syain)
            <p>
            {{ $syain->id }}
            {{ $syain->name }}
            {{ $syain->romaji }}
            </p>
        @endforeach
</body>
</html>


