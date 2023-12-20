@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card">
                <form action="{{ route('add-task') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="task" type="text" class="form-control" placeholder="Write a task" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-secondary" value="Add">
                        </div>
                    </div>
                </form>
            </div>

            <ul class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item">{{ $task->task }}</li>                
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
