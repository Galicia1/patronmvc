<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Noticias</h1>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- 
                <?php var_dump($noticias)?> 
                o
                @ php
                    var_dump($noticias)?
                @ endphp
                -->
                @foreach($noticias as $noticia)
                    <tr>
                        <th>{{$noticia->titulo}}</th>
                        <th><button>Ver mas</button></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>