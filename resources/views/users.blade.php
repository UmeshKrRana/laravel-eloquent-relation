<!doctype html>
<html lang="en">

<head>
  <title>Laravel Many to Many Relations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <main class="pt-4">
    <div class="container-fluid px-5 pt-3">
        <h4 class="text-center fw-bold border-bottom pb-3"> Many-to-Many Relationships in Laravel 10 </h4>
        <div class="table-responsive pt-1">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="5%">Id</th>
                        <th width="30%">Name</th>
                        <th>Roles</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }} </td>
                            <td>{{ $user->name }} </td>
                            <td>
                                <ol>
                                    @foreach ($user->roles as $role)
                                        <li>
                                            <dt>{{ $role->name }} </dt>
                                            <dl>- {{$role->description}} </dl>
                                        </li>
                                    @endforeach
                                </ol>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <p class="text-danger">No data found </p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
