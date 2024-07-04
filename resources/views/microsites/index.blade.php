@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Microsites</h1>
        <a href="{{ route('microsites.create') }}" class="btn btn-primary">Create New Microsite</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Currency</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($microsites as $microsite)
                    <tr>
                        <td>{{ $microsite->name }}</td>
                        <td>{{ $microsite->category }}</td>
                        <td>{{ $microsite->currency }}</td>
                        <td>
                            <a href="{{ route('microsites.edit', $microsite) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('microsites.destroy', $microsite) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection