@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.breadcrumb')
    <div class="box columns">
        <div class="column">
            <h3 class="title is-3">Ajouter une tâche</h3>
            @if(session()->has('task'))
            <div class="is-success">
                ok
            </div>
            @endif
            <form action="{{route('post.task')}}" method="POST">
                {{csrf_field()}}

                <div class="field">
                    <div class="control">
                        <input class="input @if ($errors->has('task')) is-danger @endif" type="text" placeholder="Votre tâche" name="task" value="{{old('task')}}" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-link">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column">
            <h3 class="title is-3">Mes tâches</h3>
            @if (count($tasks) > 0)
            @foreach($tasks as $task)
            <div class="level">
                <div>
                    <p>{{ $task->name }}</p>
                    <p>{{ $task->created_at }}</p>
                </div>
                <form action="{{ route('delete') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button name="id" value="{{$task->id}}" type="submit" class="delete"></button>
                </form>
            </div>
            @endforeach
            <nav class="pagination" role="navigation" aria-label="pagination">
                {{ $tasks->links() }}
            </nav>
            @else
            <article class="message is-dark">
                <div class="message-body">
                    Votre liste est vide !
                </div>
            </article>
            @endif
        </div>
    </div>
</div>
@endsection
