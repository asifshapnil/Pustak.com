@extends('users.layouts.main')

@section('custom_css')
		
@stop

@section('content')
	@include('users.layouts.nav')


	<div class="row" style="margin-top:150px;">
		<div class="col-10 offset-md-1">
			<form action="{{ route('store-new-book') }}" class="form" method="post">
				{{ csrf_field() }}

				<div class="form__group">
					<input type="text" class="form__input_other form-control" name="title" placeholder="Book title" id="title" required>
					<label for="title" class="form__label" >Book Title</label>
				</div>
				<div class="form__group">
						<select name="writers_name" class="form__input_other form-control" id="writers_name">
								<option value="1">Novel</option>
								<option value="1">Novel</option>
								<option value="1">Novel</option>
								<option value="1">Novel</option>
								<option value="1">Novel</option>
								<option value="1">Novel</option>
						</select>					
						<label for="writers_name" class="form__label" >Writer's Name</label>
				</div>
				<div class="form__group">
					<select name="category" class="form__input_other form-control" id="category">
						<option value="1">Novel</option>
						<option value="1">Novel</option>
						<option value="1">Novel</option>
						<option value="1">Novel</option>
						<option value="1">Novel</option>
						<option value="1">Novel</option>
					</select>

					<label for="category" class="form__label" >Category</label>
				</div>
				<div class="form__group">
						<select name="publisher" class="form__input_other form-control" id="publisher">
							<option value="1">Novel</option>
							<option value="1">Novel</option>
							<option value="1">Novel</option>
							<option value="1">Novel</option>
							<option value="1">Novel</option>
							<option value="1">Novel</option>
						</select>
	
						<label for="publisher" class="form__label" >Publisher</label>
					</div>
					<div class="form__group">
							<input type="text" class="form__input_other form-control" name="image[]" placeholder="Book Image" id="image" required>
							<label for="image" class="form__label" >Book Image</label>
						</div>	
				
				<div class="form__group">
					<input type="file" class="form__input_other form-control" name="image[]" placeholder="Book Image" id="image" required>
					<label for="image" class="form__label" >Book Image</label>
				</div>
				<div class="form__group">
					<input type="number" class="form__input_other form-control" name="isbn" placeholder="ISBN Number" id="isbn" required>
					<label for="isbn" class="form__label" >ISBN Number</label>
				</div>
				<div class="form__group">
					<input type="text" class="form__input_other form-control" name="description" placeholder="Description " id="description" required>
					<label for="description" class="form__label" >Description</label>
				</div>
				<div class="form__group">
					<input type="text" class="form__input_other form-control" name="condition_to_exchange" placeholder="condition_to_exchange " id="condition_to_exchange" required>
					<label for="condition_to_exchange" class="form__label" >Condition To Exchange</label>
				</div>
				<div class="getImage"></div>

				<button class="mb-5 btn btn-info btn-md add_image" type="button">+ Add more image &rarr;</button>

				<div class="form__group">
					<button class="btn btn--green" type="submit">Add Book &rarr;</button>
				</div>

			</form>

			<div class="form__group  hideImage hide">
				<input type="file" class="form__input_other form-control" name="image[]" placeholder="Book Image" id="image" required>
				<label for="image" class="form__label" >Book Image</label>

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