@extends('layouts.admin')

@php
    /**
     * @var \Illuminate\Pagination\AbstractPaginator $genres
     * @var \App\Contracts\Pagination\StatisticsPaginatorInterface $paginator
     */
@endphp

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ __('Genres') }}</h2>

                    @if ($genres)

                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th colspan="2">Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($genres as $genre)
                                    @php
                                        /**
                                         * @var \App\Entities\Genre $genre
                                         */
                                    @endphp
                                    <tr>
                                        <td>{{ $genre->id }}</td>
                                        <td>{{ $genre->name }}</td>
                                        <td width="20%" class="text-right">
                                            <a href="{{ route('genres.edit', $genre) }}"
                                               class="btn btn-xs btn-primary text-white mr-2" title="{{ __('Edit') }}">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            @php
                                                $formOptions = [
                                                    'url' => route('genres.destroy', ['genre' => $genre]),
                                                    'method' => 'delete',
                                                    'class' => 'float-right'
                                                ];
                                            @endphp
                                            {!! Form::open($formOptions) !!}
                                            {!! Form::button('<span class="fa fa-trash"></span>', DataGrid::getBtnDeleteOptions()) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <p class="mb-0">Showing {{ $paginator->getFromNumber() + 1 }}
                                to {{ $paginator->getToNumber() }}
                                of {{$genres->total()}} entries</p>
                            <nav>
                                {{ $genres->links() }}
                            </nav>
                        </div>
                    @else
                        <div class="alert alert-dark">{{ __('Empty..') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
