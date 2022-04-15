@extends('admin.index')
@section('content')

<div class="container">
    <div class="create-user">
        <a href="{{ route('user.create') }}" class="button btn btn-success">Create New User</i></a> 
    </div>   
        <table class="table table-bordered">
            <thead class="title-table">
                <tr class="text-center">
                    <th>{{ __('No') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Password') }}</th>
                    <th>{{ __('Date/time') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $k => $item)
            <tr class="text-center">
                    <td>{{ ++$k }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>***</td>
                    <td>{{ $item->created_at }}</td>
                    <td class="form-action">
                            <a class="button btn btn-primary" href="{{ route('user.edit',$item->id) }}">Edit</a>
                            <form action="{{ route('user.delete',$item->id) }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('POST')
                                <button class="button btn btn-danger" onclick="return confirm('Xoá vĩnh viễn {{ $item->email }} ?')" type="submit">Delete</button>
                            </form>
                    </td>
                </tr>
            
            @endforeach
            </tbody>
        </table>  
    </div>

    @endsection