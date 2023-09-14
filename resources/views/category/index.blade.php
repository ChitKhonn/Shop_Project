@extends('layouts.app')

@section('title', 'Home Category')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Category</h1>
        <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Action</th>
                <th>#</th>
                <th>Category</th>
                <th>Publish</th>
            </tr>
        </thead>
        <tbody>+
            @if ($category->count() > 0)
                @foreach ($category as $rs)
                    <tr>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('category.show', $rs->id) }}" type="button" class="btn"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="1em" class="detail"
                                        viewBox="0 0 512 512">
                                        <style>
                                            .detail {
                                                fill: #7c8383
                                            }
                                        </style>
                                        <path
                                            d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                    </svg></a>
                                <a href="{{ route('category.edit', $rs->id) }}" type="button" class="btn"><svg
                                        class="edit" xmlns="http://www.w3.org/2000/svg" height="1em"
                                        viewBox="0 0 512 512">
                                        <style>
                                            .edit {
                                                fill: #169263
                                            }
                                        </style>
                                        <path
                                            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg></a>
                                <form action="{{ route('category.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn  p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn  m-0"><svg xmlns="http://www.w3.org/2000/svg" class="delete"
                                            height="1em" viewBox="0 0 448 512">
                                            <style>
                                                .delete {
                                                    fill: #e70d0d
                                                }
                                            </style>
                                            <path
                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg></button>
                                </form>
                            </div>
                        </td>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->category_name }}</td>
                        <td style=" font-size: 30px;" class="white align-middle"><svg
                                xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                                <style>
                                    .white {
                                        fill: #9c9fa1
                                    }
                                </style>
                                <path
                                    d="M384 128c70.7 0 128 57.3 128 128s-57.3 128-128 128H192c-70.7 0-128-57.3-128-128s57.3-128 128-128H384zM576 256c0-106-86-192-192-192H192C86 64 0 150 0 256S86 448 192 448H384c106 0 192-86 192-192zM192 352a96 96 0 1 0 0-192 96 96 0 1 0 0 192z" />
                            </svg></td>
                            
                    </tr>
                @endforeach
               
            @else
                <tr>
                    <td class="text-center" colspan="5">Category not found</td>
                </tr>
            @endif
            
        </tbody>
        
    </table>
    <div class="row d-flex justify-content-end">
        <div>{{ $category->links() }} </div>
    </div>
@endsection

