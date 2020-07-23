@if(Auth::user()->in_favorites($micropost->id))
        {{-- unfavoriteボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
@else
        {{-- favoriteボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-outline-success btn-sm"]) !!}
        {!! Form::close() !!}
@endif
