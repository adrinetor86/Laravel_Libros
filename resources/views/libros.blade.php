
<h1>LIBROS KLK</h1>


<table border="1px">


    <thead>
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Ano</th>
            <th>Paginas</th>
        </tr>
    </thead>

    @foreach($libros as $libro)

        <tr>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->genero}}</td>
            <td>{{$libro->ano}}</td>
            <td>{{$libro->numPaginas}}</td>
        </tr>

    @endforeach

</table>
