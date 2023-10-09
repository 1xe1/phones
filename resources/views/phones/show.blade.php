<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selling Phone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="home">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Selling Phone CRUD</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('phones.admin') }}" class="btn btn-primary">Go to Admin Page</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="row">
                @foreach ($phones as $phone)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ $phone->image_url }}" class="card-img-top" alt="{{ $phone->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $phone->name }}</h5>
                            <p class="card-text">Brand: {{ $phone->brand }}</p>
                            <p class="card-text">Model: {{ $phone->model }}</p>
                            <p class="card-text">Price: ${{ $phone->price }}</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {!! $phones->links('pagination::bootstrap-5 ') !!}
        </div>
    </section>
</body>
</html>
