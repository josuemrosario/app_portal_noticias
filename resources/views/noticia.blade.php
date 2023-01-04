<!-- Aula 401 Implementando a Consulta e a visualização das noticias-->
<!-- NoticiaController@index envia um array chamado noticias -->

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Noticia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($noticias as $noticia )           
            <tr>
                <td>{{$noticia->titulo}}</td>
                <td>{{$noticia->noticia}}</td>
            </tr>
        @endforeach
    </tbody>
</table>