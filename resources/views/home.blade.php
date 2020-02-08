<!-- TODO Etendre le layout "app" -->
@extends('layouts.app')

<!-- TODO Dans la séction "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->
@section('content')
<div class="container">
    @forelse ($users as $user)
        <li> "{{ $user->name }}" a {{count($user->contacts)}} contacts </li>
    @empty
        <p> Il n'y a pas d'utilisateurs </p>
    @endforelse
</div>
@endsection
