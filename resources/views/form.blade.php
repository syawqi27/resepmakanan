@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah / Edit Resep</div>

                    <div class="card-body">
                        <div class="container">
                            <form method={{ $method }}>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Judul Resep</label>
                                    <input class="form-control" name="name" placeholder="Judul Resep" value={{ $resep ?  $resep->name : ''  }}>
                                </div>
                                <div class="form-group">
                                    <label>Penulis</label>
                                    <input class="form-control" name="writter" placeholder="Penulis" value={{ $resep ?  $resep->name : ''  }}>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
