@extends('layouts.default')

@section('title', $page->title()->escape())

@section('content')
<h1><?= $page->title()->escape() ?></h1>
@endsection
