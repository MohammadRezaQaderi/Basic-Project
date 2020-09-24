<div class="card mb-3">
    <img width="100px" src="https://lh3.googleusercontent.com/proxy/Gdg1kfgVkCELT7RyhncwKeNdK1wL0sB70aFR7opIGNp92Fth7ctQQok-TMINmJhQPxyQHfmT99m_m1OG3byN-bBwh-PqFJQKakrHblJcCivSm436Fwj4IRCovQ" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">List Of students</h5>
      <p class="card-text">You can find Students Information Here.</p>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Age</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student -> firstName}}</td>
                    <td>{{$student -> secondName}}</td>
                    <td>{{$student -> age}}</td>
                    <td>
                        <a href="{{url('/edit/'.$student->id )}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{url('/delete/'.$student->id )}}" class="btn btn-sm btn-warning">Delete</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>      
        
    </div>
  </div>

