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
        <div class="row mb-3">
            <div class="col-lg-12 text-right">
                <a href="{{route('phones.create')}}" class="btn btn-success btn-sm">Add Phone</a>
            </div>
            
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>รหัส</th>
                            <th>ชื่อ</th>
                            <th>ยี่ห้อ</th>
                            <th>รุ่น</th>
                            <th>Memory</th>
                            <th>สี</th>
                            <th>สถานะ</th>
                            <th>ราคา</th>
                            <th>อธิบายเพิ่มเติม</th>
                            <th>ลิงค์รูป</th>
                            <th>วันที่โพสต์</th>
                            <th>ชื่อผู้ขาย</th>
                            <th>อีเมลผู้ขาย</th>
                            <th>เบอร์ผู้ขาย</th>
                            <th width="180px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($phones as $phone)
                        <tr>
                            <td>{{ $phone->id }}</td>
                            <td>{{ $phone->name }}</td>
                            <td>{{ $phone->brand }}</td>
                            <td>{{ $phone->model }}</td>
                            <td>{{ $phone->storage_capacity }}</td>
                            <td>{{ $phone->color }}</td>
                            <td>{{ $phone->condition }}</td>
                            <td>{{ $phone->price }}</td>
                            <td>{{ $phone->description }}</td>
                            <td>{{ $phone->image_url }}</td>
                            <td>{{ $phone->posted_date }}</td>
                            <td>{{ $phone->seller_name }}</td>
                            <td>{{ $phone->seller_email }}</td>
                            <td>{{ $phone->seller_phone }}</td>
                            <td>
                                <form action="{{ route('phones.destroy',$phone->id)}}" method="POST">
                                <a href="{{route('phones.edit', $phone->id)}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $phones->links('pagination::bootstrap-5 ') !!}
            </div>
        </div>
    </div>
    </section>
</body>
</html>
