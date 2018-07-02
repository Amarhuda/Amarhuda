@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tugas_webpros') }}">Tugas webpro</a> :
@endsection
@section("contentheader_description", $tugas_webpro->$view_col)
@section("section", "Tugas webpros")
@section("section_url", url(config('laraadmin.adminRoute') . '/tugas_webpros'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tugas webpros Edit : ".$tugas_webpro->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($tugas_webpro, ['route' => [config('laraadmin.adminRoute') . '.tugas_webpros.update', $tugas_webpro->id ], 'method'=>'PUT', 'id' => 'tugas_webpro-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama')
					@la_input($module, 'email')
					@la_input($module, 'pesan')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tugas_webpros') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#tugas_webpro-edit-form").validate({
		
	});
});
</script>
@endpush
