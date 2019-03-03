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
                    <div class="table-responsive">
                        @if ($genres)
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
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
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>

                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <p class="mb-0">Showing {{ $paginator->getFromNumber() + 1 }} to {{ $paginator->getToNumber() }}
                            of {{$genres->total()}} entries</p>
                        <nav>
                            {{ $genres->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
