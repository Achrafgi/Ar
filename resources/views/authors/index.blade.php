@extends('layouts.admin')

@php
    /**
     * @var \Illuminate\Pagination\AbstractPaginator $authors
     * @var \App\Contracts\Pagination\StatisticsPaginatorInterface $paginator
     */
@endphp

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ __('Authors') }}</h2>

                    @if ($authors)
                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>{{ __('First name') }}</th>
                                    <th>{{ __('Second name') }}</th>
                                    <th>{{ __('Company name') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($authors as $author)
                                    @php
                                        /**
                                         * @var \App\Entities\Author $author
                                         */
                                    @endphp
                                    <tr>
                                        <td>{{ $author->id }}</td>
                                        <td>{{ $author->first_name }}</td>
                                        <td>{{ $author->second_name }}</td>
                                        <td>{{ $author->company_name }}</td>
                                        <td width="20%" class="text-right">
                                            <a href="{{ route('authors.edit', $author) }}"
                                               class="btn btn-xs btn-primary text-white mr-2"
                                               title="{{ __('Edit') }}">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            @php
                                                $formOptions = [
                                                    'url' => route('authors.destroy', ['author' => $author]),
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
                                of {{ $authors->total() }} entries</p>
                            <nav>
                                {{ $authors->links() }}
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
