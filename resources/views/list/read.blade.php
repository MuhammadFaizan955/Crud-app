<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4>To Do List
                <a href="{{ route('task.create') }}" class="btn btn-outline-success btn-sm float-end">Add Task</a>
            </h4>
     </div>
    <table class="container table table-striped table-bordered text-center ">

        <tr>
            <td colspan="6">

            </td>
        </tr>
        <tr>
            <th>id</th>
            <th  width="20px">Title</th>
            <th>Desc</th>
            <th width="20px">Status</th>
            <th width="270px">Action</th>
        </tr>

        @if(isset($student))
        @foreach($student as $fais)
        <tr>
            <td>{{ $fais['id'] }}</td>
            <td>{{ $fais['title'] }}</td>
            <td>{{ $fais['description'] }}</td>
            <td>
                @if ($fais->status == 1)
                    <svg class="text-success-500 h-2 w-2 text-success"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                @else
                    <svg class="text-danger h-2 w-2" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                @endif
            </td>
            <td>
                <a href="{{ route('task.show', $fais->id) }}" class="btn btn-outline-primary btn-sm">View</a>

                <form action="{{ route('task.destroy', $fais->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>

                <a href="{{ route('task.edit', $fais->id) }}" class="btn btn-primary btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
        @endif
    </table>
</body>
</html>
