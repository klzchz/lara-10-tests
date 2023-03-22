<h1>Listagem de Suportes</h1>


<table>
    <thead>
        <th>Assunto</th>
        <th>status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            @foreach($supports->where('status','p') as $support)
            <td>{{$support->subject}}</td> 
            <td>{{$support->status}}</td>    
            <td>{{$support->body}}</td>       
            <td>></td>
            @endforeach
        </tr>
    </tbody>
</table>
