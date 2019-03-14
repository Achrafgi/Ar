@extends('layouts.admin')

@php
    /**
     * @var \App\Entities\Genre $genre
     */
@endphp

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ __('Edit genre :name', ['name' => $genre->name]) }}</h2>

                    {!! Form::open(['url' => route('genres.update', ['genre' => $genre]), 'method' => 'put']) !!}

                    <div class="form-group">
                        {!! Form::text('name', $genre->name, ['class' => 'form-control', 'placeholder' => __('Enter genre name')]) !!}
                        @if ($errors->has('name'))
                            <p class="alert-danger mt-2 p-2">
                                <small>{!! $errors->first('name') !!}</small>
                            </p>
                        @endif
                    </div>

                    {!! Form::submit(__('Update'), ['class' => 'btn btn-success mr-2']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
