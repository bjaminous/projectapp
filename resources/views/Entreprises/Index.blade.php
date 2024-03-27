@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ENTREPRISES </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('entreprises.create') }}" title="Create an entreprise"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Location</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($project as $projects)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $projects->name }}</td>
                <td>{{ $projects->location }}</td>
                <td>{{ date_format($projects->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('entreprises.destroy', $projects->id) }}" method="POST">

                        <a href="{{ route('chooses.show', $projects->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('entreprises.edit', $projects->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $project->links() !!}

@endsection
