<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($todos as $key => $todo)
        <tr>
            <th scope="row">{{$key +1}}</th>
            <td>{{$todo->title}}</td>
            <td>{{$todo->description}}</td>
            <td>{{$todo->is_completed ? 'Completed' : 'Not Completed'}}</td>
            <td>
                <a href="#" class="btn btn-warning p-2 rounded shadow-sm w-auto text-decoration-none">Edit</a>
                <a href="#" class="btn btn-danger p-2 rounded shadow-sm w-auto text-decoration-none">Delete</a>
            </td>
          </tr>

        @endforeach


    </tbody>
  </table>
