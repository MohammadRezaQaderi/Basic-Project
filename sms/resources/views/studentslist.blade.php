<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{$student -> firstName}}</td>
            <td>{{$student -> secondName}}</td>
            <td>{{$student -> age}}</td>
            <td>
                <a href="#" class="btn btn-sm btn-info">Show</a>
                <a href="{{url('/edit'.$student->id )}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>      
