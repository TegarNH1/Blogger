@extends('layouts.dashboard')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h3 class="mb-0 text-dark fw-bold">Dashboard</h3>
        <a href="{{ route('dashboard.create') }}" class="btn btn-primary">Tambah Artikel</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Artikel</th>
                            <th>Tanggal Post</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $key => $item)
                            <tr class="align-middle">
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ route('dashboard.edit', $item->id) }}"
                                            class="btn py-1 btn-warning fw-normal">Edit</a>
                                        <form action="{{ route('dashboard.destroy', $item->id) }}" method="post">
                                            @csrf @method('DELETE')

                                            <button class="btn py-1 btn-light fw-normal" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
