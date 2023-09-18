<!doctype html>
<html lang="en">

<head>
    <title>Laravel HasManyThrough Relation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container-fluid px-5 pt-3">
            <h4 class="text-center fw-bold border-bottom pb-3"> Has Many Through Relationship in Laravel 10 </h4>
            <div class="table-responsive pt-1">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="20%">Name</th>
                            <th>States</th>
                            <th>Cities</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($countries as $country)
                            <tr>
                                <td>{{ $country->id }} </td>
                                <td>{{ $country->name }} </td>
                                <td>
                                    <ol>
                                        @foreach ($country->states as $state)
                                            <li>
                                                <dt>{{ $state->name }} </dt>
                                            </li>
                                        @endforeach
                                    </ol>
                                </td>

                                <td>
                                    <ol>
                                        @foreach ($country->cities as $city)
                                            <li>
                                                <dd> <span>- {{ $city->name }} </span> <strong>({{ $city->state->name }})</strong></dd>
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
