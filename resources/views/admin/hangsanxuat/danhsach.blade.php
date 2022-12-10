@extends('layouts.admin')

@section('content')
	<div class="card">
		<div class="card-header">Hãng sản xuất</div>
		<div class="card-body table-responsive">
			<p>
				<a href="{{ route('admin.hangsanxuat.them') }}" class="btn btn-info"><i class="fal fa-plus"></i> Thêm mới</a>
			</p>
			<table class="table table-bordered table-hover table-sm mb-0">
				<thead>
					<tr>
						<th width="5%">#</th>
						<th width="10%">Hình ảnh</th>
						<th width="45%">Tên hãng</th>
						<th width="30%">Tên hãng không dấu</th>
						<th width="5%">Sửa</th>
						<th width="5%">Xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($hangsanxuat as $value)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td class="text-center"><img src="{{ env('APP_URL') . '/storage/app/' . $value->hinhanh }}" width="100" class="img-thumbnail" /></td>
							<td>{{ $value->tenhang }}</td>
							<td>{{ $value->tenhang_slug }}</td>
							<td class="text-center"><a href="{{ route('admin.hangsanxuat.sua', ['id' => $value->id]) }}"><i class="fal fa-edit"></i></a></td>
							<td class="text-center"><a href="{{ route('admin.hangsanxuat.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa hãng sản xuất {{ $value->tenhang }} không?')"><i class="fal fa-trash-alt text-danger"></i></a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection