<html>
    <head>
        <title>Kepribadian MBTI</title>
    </head>
    <body>
    
    <a href="tambah-kepribadian" class="badge badge-success">create</a><br><br>

        <table border=1px;> 
         <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
         </thead>
         @foreach($kepribadian as $a)
         <tbody>
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->name}}</td>
                <td>
                    <a href="kepribadian/{{$a->id}}" class="badge badge-success">detail</a><br>
                    <a href="kepribadian/{{$a->id}}/edit" class="badge badge-success">edit</a><br>
                    <form action="kepribadian/{{$a->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>
         </tbody>
         @endforeach    
        </table>
    
    </body>
</html>