<div>
    <h1>
        Person
    </h1>

    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="age" placeholder="Age">
        <button type="submit">Submit</button>
    </form>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
