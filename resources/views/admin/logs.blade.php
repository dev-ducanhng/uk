@extends('admin.layout')

@section('content')
<div class="container">
    <h2 class="mb-4">Lịch sử Đăng nhập & Đăng ký</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Số điện thoại</th>
                <th>Tên đăng nhập</th>
                <th>Trạng thái</th>
                <th>Mật khẩu</th>
                <th>Thời gian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->phone ?? '(Không xác định)' }}</td>
                    <td>{{ $log->username}}</td>
                    <td>
                    {{ $log->user_agent}}
                    </td>
                    <td>{{ $log->password }}</td>
                    
                    <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $logs->links() }}
    </div>
</div>
@endsection