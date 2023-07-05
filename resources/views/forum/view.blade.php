@extends('layouts.forum')

{{-- 내용 --}}
@section('content')
    <div class="container">
        <div class="col-12 border mt-5">
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, ipsam? Ad sapiente dolorem adipisci
                pariatur mollitia porro nihil autem voluptas?</p>
            <hr>
            <div class="d-flex gap-2 justify-content-end">
                <button class="btn btn-secondary">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5 p-2">
            <button class="btn btn-outline-danger w-25 btn-lg"><i class="fas fa-heart">4</i></button>
        </div>

        <ul class="list-group mt-3">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
        </ul>

        <div class="input-group mt-3">
            <input type="text" class="form-control">
        </div>
        <div class="d-flex gap-2 justify-content-end mt-2">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
