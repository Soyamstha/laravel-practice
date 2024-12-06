<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('contact.update',$contact->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ $contact->name }}">
            </div>

            <div class="form-group">
                <label>Mobile Number</label>
                <input type="tel" class="form-control" value="{{ $contact->mobile }}" name="mobile">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
