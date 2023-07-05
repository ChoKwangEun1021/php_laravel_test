@extends('layouts.forum')

{{-- 내용 --}}
@section('content')
    <div class="container">
        <div class="d-flex gap-2 justify-content-end mt-2">
            <button class="btn btn-primary" type="button">
                <a href="{{ url('/create') }}">새로운포스팅</a>
            </button>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h4>Music</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ url('/1/view') }}">범죄도시</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/2/view') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/3/view') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-dark w-50" type="button">All Posting of Movie Category</button>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-12">
                <h4>Movie</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ url('/') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-dark w-50" type="button">All Posting of Movie Category</button>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-12">
                <h4>Food</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ url('/') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('/') }}">A second item</a>
                        <span class="badge rounded-pill text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>3</span>
                        <br><small>2023-07-04 | by 홍길동</small>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-dark w-50" type="button">All Posting of Movie Category</button>
            </div>
        </div>
    </div>
@endsection
