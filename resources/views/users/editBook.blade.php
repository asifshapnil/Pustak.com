@extends('users.layouts.main')

@section('custom_css')
		<style type="text/css">
		
		</style>
@stop

@section('content')
	@include('users.layouts.nav')


	<div class="row" style="margin-top:150px;">
		<div class="col-10 offset-md-1">
			@if (session('success'))
				<h1 class="p-4 text-white text-center form__input_other" style="background-color:#6B1717; font-size:30px;">{{ session('success') }}</h1>
			@endif
				
			<h1 class="add_title">Add Your Book</h1>

			<form action="{{ route('store-user-edit-book') }}" class="form" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $details->id }}">
				<div class="form__group">
						<select name="title" class="form__input_other form-control" id="Book_title">
								<option value="1">Book Title</option>
								<option value="2">Book Title</option>
								<option value="3">Book Title</option>
								<option value="4">Book Title</option>
								<option value="5">Book Title</option>
								<option value="6">Book Title</option>
						</select>
					<label for="title" class="form__label" >Book Title</label>
				</div>

				
				<div class="form__group">
					<input type="file" class="form__input_other form-control" name="image[]" placeholder="Book Image" id="image">
					<label for="image" class="form__label" >Book Image</label>
				</div>
				<div class="getImage"></div>
				<button class="mb-5 btn btn-secondary text-white btn-sm add_image" type="button" style="border-radius:0px !important;"> <span class="fa fa-plus"></span> Add more image &rarr;</button>


				<div class="form__group">
						<select name="publisher" class="form__input_other form-control" id="publisher">
							<option value="1" >publisher1</option>
							<option value="1">publisher2</option>
							<option value="1">publisher3</option>
							<option value="1" selected>publisher4</option>
							<option value="1">publisher5</option>
							<option value="1">publisher6</option>
						</select>
	
						<label for="publisher" class="form__label" >Publisher</label>
					</div>
					<div class="form__group">
						@php
							$c_year =  date("Y");
						@endphp
							<select name="publishing_year" class="form__input_other form-control" id="publishing_year">
								@for ($i=$c_year; $i>$c_year-101; $i--)
									<option value="{{ $i }}" {{ $details->publishing_year == $i ? 'selected':'' }}>{{ $i }}</option>
								@endfor		
							</select>
							<label for="publishing_year" class="form__label" >Publishing Year</label>
						</div>	
				<div class="form__group">
					<input type="number" class="form__input_other form-control" name="isbn" placeholder="ISBN Number" id="isbn" value="{{ $details->isbn_num }}">
					<label for="isbn" class="form__label" >ISBN Number</label>
				</div>
				<div class="form__group">
					<textarea class="form__input_other form-control" name="description" placeholder="Description " id="description" cols="30" rows="4">{{ $details->description }}</textarea>
					<label for="description" class="form__label" >Description</label>
				</div>
				<div class="form__group">
					<textarea class="form__input_other form-control" name="condition_to_exchange" placeholder="Condition To Exchange " id="condition_to_exchange" cols="30" rows="4">{{ $details->condition }}</textarea>
					<label for="condition_to_exchange" class="form__label" >Condition To Exchange</label>
				</div>
				<div class="form__group">
						<textarea class="form__input_other form-control" name="summery" placeholder="Summery " id="summery" cols="30" rows="4">{{ $details->summery }}</textarea>
						<label for="summery" class="form__label" >Short Story</label>
					</div>
					<div class="form__group">
							<textarea class="form__input_other form-control" name="why_from_me" placeholder="Why You recommend this book and from you ?? " id="why_from_me" cols="30" rows="4">{{ $details->why_from_me }}</textarea>
							<label for="why_from_me" class="form__label" >Why You recommend this book and from you ??</label>
						</div>


				<div class="form__group">
					<button class="btn btn--green" type="submit">Save &rarr;</button>
				</div>

			</form>
			<div class="hideImage hide" style="display:none;">
				<div class="form__group  ">
					<input type="file" class="form__input_other form-control" name="image[]" placeholder="Book Image" id="image">
					<label for="image" class="form__label" >Book Image</label>
	
				</div>

			</div>

		</div>
	</div>


@endsection

@section('custom_js')
	<script type="text/javascript">
	$(document).ready(function(){


		$(document).on('click', '.add_image', function(){
			var content = $('.hideImage').html();
			$('.getImage').before(content);
		});

	});
	</script>
@endsection