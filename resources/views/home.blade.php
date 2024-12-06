<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
<body>
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $contact1)
                <tr>
                    <th scope="row">{{ $contact1->id }}</th>
                    <td>{{ $contact1->name }}</td>
                    <td>{{ $contact1->mobile }}</td>
                    <td>
                        <a href="{{ route('contact.edit', $contact1->id) }}">Edit</a>
                        <a href="{{ route('contact.delete', $contact1->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<form action="{{ route('contact.add') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Name: </label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label>Mobile Number: </label>
        <input type="tel" class="form-control" name="mobile" placeholder="Enter mobile no.">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
