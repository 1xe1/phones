<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Phone</h2>
                <a href="{{route('phones.index')}}" class="btn btn-primary">Back</a>
            </div>

                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <form action="{{ route('phones.update',$phone->id) }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-center">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$phone->name}}" class="form-control" id="name" placeholder="Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" name="brand" value="{{$phone->brand}}" class="form-control" id="brand" placeholder="Brand">
                                @error('brand')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" name="model" value="{{$phone->model}}" class="form-control" id="model" placeholder="Model">
                                @error('model')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="storage_capacity">Storage Capacity</label>
                                <input type="text" name="storage_capacity" value="{{$phone->storage_capacity}}" class="form-control" id="storage_capacity" placeholder="Storage Capacity">
                                @error('storage_capacity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" name="color" value="{{$phone->color}}" class="form-control" id="color" placeholder="Color">
                                @error('color')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="condition">Condition</label>
                                <select name="condition" value="{{$phone->condition}}" class="form-control" id="condition">
                                    <option value="New">New</option>
                                    <option value="Used">Used</option>
                                    <option value="Refurbished">Refurbished</option>
                                </select>
                                @error('condition')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" value="{{$phone->price}}" class="form-control" id="price" placeholder="Price">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input name="description" value="{{$phone->description}}" class="form-control" id="description" placeholder="Description"></input>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image_url">Image URL</label>
                                <input type="text" name="image_url" value="{{$phone->image_url}}" class="form-control" id="image_url" placeholder="Image URL">
                                @error('image_url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="posted_date">Posted Date</label>
                                <input type="date" name="posted_date" value="{{$phone->posted_date}}" class="form-control" id="posted_date">
                                @error('posted_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="seller_name">Seller Name</label>
                                <input type="text" name="seller_name" value="{{$phone->seller_name}}" class="form-control" id="seller_name" placeholder="Seller Name">
                                @error('seller_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="seller_email">Seller Email</label>
                                <input type="email" name="seller_email" value="{{$phone->seller_email}}" class="form-control" id="seller_email" placeholder="Seller Email">
                                @error('seller_email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="seller_phone">Seller Phone</label>
                                <input type="text" name="seller_phone" value="{{$phone->seller_phone}}" class="form-control" id="seller_phone" placeholder="Seller Phone">
                                @error('seller_phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>

        </div>
    </div>
</body>
</html>
