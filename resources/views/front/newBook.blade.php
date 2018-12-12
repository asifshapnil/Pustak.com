@extends('front.layouts.main')

@section('custom_css')
	<style type="text/css">
		.wizard > .steps > ul > li {
		    width: 25%;
		}
		.amount{
			border: 1px solid black !important;
			padding: 5px;
		}
		.no-border{
			border: none;
		}
		.box{
			border: 1px solid black !important;
		}
		.padding{
			padding: 10px;
		}
		.hide{
			display: none;
		}
		.actions{
			text-align: center !important;
		}
	</style>
@stop


@section('ecommerce')

@stop

@section('content')


<div class="container" id="new-project">


<div class="mt20">
	<div class="row">

		<div class="col-md-9 offset-md-2">



			<form id="example-form" action="" class="mt20" method="post" enctype="multipart/form-data">

				{{ csrf_field() }}

			    <div class="mt20">
			       			<h3 class="step_title_area">
				        	<span class="steptext">Step</span><span class="stepcount">1</span>
				        	<span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
				    	</h3>

			        <section>


						  <div class="form-group">
						    <label for="">ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆå</label>
						    <input type="text" class="form-control required col-10 ml-md-3" placeholder="" name="title">

						  </div>
			


						  <div class="form-group">
						    <label for="">ç”»åƒ</label>
						    <input type="file" class="col-12 ml-md-2 required" placeholder="" name="featured_image">

						  </div>

							<div class="form-group">
						    <label for="description">ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆæ¦‚è¦</label>
								<textarea name="description" rows="8" cols="80" class="form-control required col-10 ml-md-3"></textarea>
						  </div>
							<div class="form-group">
								<label for="purpose">ç›®çš„</label>
								<input type="text" class="form-control required col-10 ml-md-3" placeholder="" name="purpose">

							</div>
							<div class="form-group">
								<label for="">ç›®æ¨™é‡‘é¡</label>
								<input type="text" class="form-control required col-10 ml-md-3" placeholder="" name="title">

							</div>



						  <div class="row">



						  	<div class="form-group col">
							    <label for="">å¹´</label>
							    <select class="form-control required col-10 ml-md-3 calculateDay" name="fromY" id="fromY">
							    	<option value="0" selected>----</option>
							    	<?php for($i=date('Y');$i<date('Y')+5;$i++){?>
							    		<option value="{{$i}}">{{$i}}</option>
							    	<?php }?>
							    </select>
							</div>

						  	<div class="form-group col">
							    <label for="">æœˆ</label>
							    <select class="form-control required calculateDay" name="fromM" id="fromM">
							    	<option value="0" selected>----</option>
							    	<?php for($i=1;$i<=12;$i++){?>
							    		<option value="{{$i}}">{{ $i}}</option>
							    	<?php }?>
							    </select>
							</div>

						  	<div class="form-group col">
							    <label for="">æ—¥</label>
							    <select class="form-control required calculateDay" name="fromD" id="fromD">
							    	<option value="0" selected>----</option>
							    	<?php for($i=1;$i<=31;$i++){?>
							    		<option value="{{$i}}">{{$i}}</option>
							    	<?php }?>
							    </select>
							</div>

							<div class="col-xs-1 text-center allign">
								~
							</div>

						  	<div class="form-group col">
							    <label for="">å¹´</label>
							    <select class="form-control required calculateDay" name="toY" id="toY">
							    	<option value="0" selected>----</option>
							    	<?php for($i=date('Y');$i<date('Y')+5;$i++){?>
							    		<option value="{{$i}}">{{$i}}</option>
							    	<?php }?>
							    </select>
							</div>

						  	<div class="form-group col">
							    <label for="">æœˆ</label>
							    <select class="form-control required calculateDay" name="toM" id="toM">
							    	<option value="0" selected>----</option>
							    	<?php for($i=1;$i<=12;$i++){?>
							    		<option value="{{$i}}">{{$i}}</option>
							    	<?php }?>
							    </select>
							</div>

						  	<div class="form-group col">
							    <label for="">æ—¥</label>
							    <select class="form-control required calculateDay" name="toD" id="toD">
							    	<option value="0" selected>----</option>
							    	<?php for($i=1;$i<=31;$i++){?>
							    		<option value="{{$i}}">{{$i}}</option>
							    	<?php }?>
							    </select>
							</div>

						  	<div class="form-group col">
							    <label for="">æ—¥é–“</label>
							    <input type="text" class="form-control required" placeholder="" name="total_day" readonly id="totalDay">
							</div>

						  </div>
							<div class="form-group">
								<label for="">æ”¯æ´é‡‘å—å–äººå</label>
								<input type="text" class="form-control required col-10 ml-md-3" name="beneficiary">
							</div>

						  <div class="form-group">
						    <label for="sub_category">ãã®ä»–å†…å®¹</label>
						    <input type="text" class="form-control  col-10 ml-md-3" name="sub_category">
						  </div>
							<div class="form-group">
							 <label for="budget">ç›®çš„é‡‘é¡</label>
							 <input type="number" class="form-control  col-10 ml-md-3" name="budget">
						 </div>

						  <div class="form-group">
						    <label for="budget_usage_breakdown">äºˆç®—ç”¨é€”ã®å†…è¨³</label>
								<textarea name="budget_usage_breakdown" rows="8" cols="80" class="form-control required col-10 ml-md-3"></textarea>
						  </div>







							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

			        </section>

                    <h3 class="step_title_area">
                        <span class="steptext">Step</span><span class="stepcount">1</span>
                        <span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
                    </h3>				        	<span class="steptext">Step</span><span class="stepcount">2</span>
				        	<span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
				    	</h3>

			         <section>

								 <div class="row mt20">
								 	<div class="col-md-12">
										<div class="row">
										<label for="amount[]" class="col-md-12">é‡‘é¡</label>
										<div class="col-md-4 ml-md-3"> <input type="number" class="form-control" name="amount[]">

										</div>	<sub class="p-0 mt-4 mr-3">å††</sub>
										{{-- <div class="col-md-3 p-0">å††</div> --}}

									</div>
								 		{{-- <div class="row">
								 			<label for="crofun_amount[]" class="col-md-12">é‡‘é¡</label>
								 			<div class="col-md-4 ml-md-3"> <input type="text" class="form-control" name="crofun_amount[]">

								 			</div>	<sub class="p-0 mt-4 mr-3">å††</sub>
								 		</div> --}}
								 	</div>
								 	<div class="col-md-12 mt-3">
								 		<div class="row">
								 			<label for="is_crofun_point[]" class="col-md-12">Crofunãƒã‚¤ãƒ³ãƒˆ</label>
								 			<div class="col-md-4 ml-md-3"><input type="text" class="form-control" name="is_crofun_point[]">

								 			</div>	<sub class="p-0 mt-4 mr-3">pt</sub>
								 			{{-- <div class="col-md-3 p-0">pt</div> --}}

								 		</div>
								 	</div>
								 	<div class="col-md-12 mt-3">
								 		<div class="row">
								 			<label for="is_other[]" class="col-md-12">ãƒªã‚¿ãƒ¼ãƒ³å“å</label>
								 			<div class="col-md-4 ml-md-3"><input type="text" class="form-control" name="is_other[]"></div>


								 		</div>
								 	</div>
								 	<div class="col-md-12 mt-3">
								 		<div class="row">
								 			<label for="other_description[]" class="col-md-12">å†…å®¹</label>
								 			<div class="col-md-10 ml-md-3">
								 				<textarea name="other_description[]" rows="8" cols="80" class="form-control"></textarea>
								 			</div>

								 		</div>
								 	</div>

								 	<div class="col-md-12 mt-3">
								 		<div class="row">
								 			<label for="other_file[]" class="col-md-12">å†™çœŸ</label>
								 			<div class="col-md-4 ml-md-3"><input type="file" class="" name="other_file[]"></div>


								 		</div>
								 	</div>
								 	{{-- <div class="col-md-8">

								 <div class="row">

								 	<div class="col">
								 		<input type="checkbox" class="form-check-input" name="is_crofun_point[]">
								 		Crofun ãƒã‚¤ãƒ³ãƒˆ
								 	</div>
								 	<div class="col">
								 		<input type="text" class="form-control" name="crofun_amount[]">
								 	</div>
								 	<div class="col-md-1">
								 		P
								 	</div>

								 </div>

								 <div class="row mt20">
								 <div class="col-md-1">
								 	<input type="checkbox" class="form-check-input" name="is_other[]">
								 </div>
								 <div class="col">
								 	<input type="text" class="form-control" name="other_description[]">
								 	<label class="custom-file mt20">
								 		<input type="file" id="file" class="custom-file-input" name="other_file[]">
								 		<span class="custom-file-control"></span>
								 	</label>
								 </div>
								 </div>
								 	</div> --}}
								 </div>
											<div class="row  mt-3 mb-3">
												<div class="col-md-2 offset-4">
													<a href="#!" class="btn btn-outline-info add_reward">+ ã•ã‚‰ã«è¿½åŠ ã™ã‚‹</a>

												</div>
                                            </div>


			            <div class="reward_container"></div>


			        </section>

                    <h3 class="step_title_area">
                        <span class="steptext">Step</span><span class="stepcount">1</span>
                        <span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
                    </h3>				        	<span class="steptext">Step</span><span class="stepcount">3</span>
				        	<span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
				    	</h3>

			         <section>
								 <div class="form-group">
									<label for="details_title[]">è¦‹å‡ºã—ã‚¿ã‚¤ãƒˆãƒ«</label>
									<input type="text" class="form-control required col-10 ml-md-3" placeholder="" name="details_title[]">

								</div>
					            {{-- <div class="form-group">
								    <label for="">å°é¡Œ</label>
								    <input type="text" class="form-control" placeholder="" name="details_title[]">
								</div> --}}

								<div class="form-group">
								 <label for="details_description[]">å†…å®¹</label>
								 <textarea name="details_description[]" class="form-control required col-10 ml-md-3" rows="8" cols="80"></textarea>

							 </div>
								{{-- <div class="form-group">
								    <label for="">æœ¬æ–‡</label>
								    <textarea class="form-control" name="details_description[]"></textarea>
								</div> --}}
								<div class="form-group">
								 <label for="draft_input[]" class="col-md-12">è¦‹å‡ºã—ã‚¿ã‚¤ãƒˆãƒ«</label>
								 <input type="file" class="required col-10 ml-md-3" placeholder="" name="draft_input[]">

							 </div>



						<div class="details_container"></div>
						<div class="row  mt-3 mb-3">
							<div class="col-md-2 offset-4">
								<a href="#!" class="btn btn-outline-info add_details">+ ã•ã‚‰ã«è¿½åŠ ã™ã‚‹</a>

							</div>
						</div>

						{{-- <div class="text-center mt20">
							<a href="#!" class="btn btn-secondary add_details">+ ã•ã‚‰ã«è¿½åŠ ã™ã‚‹</a>
						</div> --}}

			        </section>

                    <h3 class="step_title_area">
                        <span class="steptext">Step</span><span class="stepcount">1</span>
                        <span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
                    </h3>				        	<span class="steptext">Step</span><span class="stepcount">4</span>
				        	<span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
				    	</h3>

			        <section>
			            <h4 class="text-center mt20">
			            	ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆç”³è«‹ãŒå®Œäº†ã—ã¾ã—ãŸã€‚
			            </h4>
			            <h4 class="text-center mt20">
			            	{{--  <a href="{{route('user-project-list')}}">â†’ ãƒžã‚¤ãƒšãƒ¼ã‚¸ã¸</a>  --}}
			            </h4>
			        </section>
			    </div>
			 </form>


		</div>
	</div>

</div>

</div>

 <div class="hide reward">
	 <div class="row mt20">
	 	<div class="col-md-12">
	 		<div class="row">
	 			<label for="crofun_amount[]" class="col-md-12">é‡‘é¡</label>
	 			<div class="col-md-4 ml-md-3"> <input type="text" class="form-control" name="crofun_amount[]">

	 			</div>	<sub class="p-0 mt-4 mr-3">å††</sub>
	 			{{-- <div class="col-md-3 p-0">å††</div> --}}

	 		</div>
	 	</div>
	 	<div class="col-md-12 mt-3">
	 		<div class="row">
	 			<label for="is_crofun_point[]" class="col-md-12">Crofunãƒã‚¤ãƒ³ãƒˆ</label>
	 			<div class="col-md-4 ml-md-3"><input type="text" class="form-control" name="is_crofun_point[]">

	 			</div>	<sub class="p-0 mt-4 mr-3">pt</sub>
	 			{{-- <div class="col-md-3 p-0">pt</div> --}}

	 		</div>
	 	</div>
	 	<div class="col-md-12 mt-3">
	 		<div class="row">
	 			<label for="is_other[]" class="col-md-12">ãƒªã‚¿ãƒ¼ãƒ³å“å</label>
	 			<div class="col-md-4 ml-md-3"><input type="text" class="form-control" name="is_other[]"></div>


	 		</div>
	 	</div>
	 	<div class="col-md-12 mt-3">
	 		<div class="row">
	 			<label for="other_description[]" class="col-md-12">å†…å®¹</label>
	 			<div class="col-md-10 ml-md-3">
	 				<textarea name="other_description[]" rows="8" cols="80" class="form-control"></textarea>
	 			</div>

	 		</div>
	 	</div>

	 	<div class="col-md-12 mt-3">
	 		<div class="row">
	 			<label for="amount[]" class="col-md-12">å†™çœŸ</label>
	 			<div class="col-md-4 ml-md-3"><input type="file" class="" name="other_file[]"></div>


	 		</div>
	 	</div>
	 	{{-- <div class="col-md-8">

	 <div class="row">

	 	<div class="col">
	 		<input type="checkbox" class="form-check-input" name="is_crofun_point[]">
	 		Crofun ãƒã‚¤ãƒ³ãƒˆ
	 	</div>
	 	<div class="col">
	 		<input type="text" class="form-control" name="crofun_amount[]">
	 	</div>
	 	<div class="col-md-1">
	 		P
	 	</div>

	 </div>

	 <div class="row mt20">
	 <div class="col-md-1">
	 	<input type="checkbox" class="form-check-input" name="is_other[]">
	 </div>
	 <div class="col">
	 	<input type="text" class="form-control" name="other_description[]">
	 	<label class="custom-file mt20">
	 		<input type="file" id="file" class="custom-file-input" name="other_file[]">
	 		<span class="custom-file-control"></span>
	 	</label>
	 </div>
	 </div>
	 	</div> --}}
	 </div>
</div>





<div class="hide details">
<div class="card mt20">
	<div class="card-block">
        <div class="form-group">
		    <label for="">å°é¡Œ</label>
		    <input type="text" class="form-control" placeholder="" name="details_title[]">
		</div>


		<div class="form-group">
		    <label for="">æœ¬æ–‡</label>
		    <textarea class="form-control" name="details_description[]"></textarea>
		</div>
	</div>
</div>
</div>

{{--  @include('user.layouts.add-project')  --}}
{{ $finish = 1 }}
@stop

@section('custom_js')

	<!-- <script src="//cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script> -->
	<script src="{{Request::root()}}/ckeditor/ckeditor.js"></script>

	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

	<script type="text/javascript">


		var form = $("#example-form");

		form.validate({
		    errorPlacement: function errorPlacement(error, element) { element.before(error); },
		});

		form.children("div").steps({
		    headerTag: "h3",
		    bodyTag: "section",
		    transitionEffect: "slideLeft",
		    // startIndex: 1,
		    startIndex: {{$finish?3:0}},
		    showFinishButtonAlways: false,


		    /* Labels */
		    labels: {
		        cancel: "Cancel?",
		        current: "current step:",
		        pagination: "Pagination",
		        finish: "å®Œäº†!!",
		        next: "æ¬¡ã¸ >",
		        previous: "< å‰ã¸",
		        loading: "Loading ..."
		    },

		  	onInit: function(event, currentIndex, newIndex){
		  		if(currentIndex == 3){
		        	$('.actions > ul > li:nth-child(1)').attr('style', 'display:none;');
		        	$('.actions > ul > li:nth-child(2)').attr('style', 'display:none;');
		        	$('.actions > ul > li:nth-child(3)').attr('style', 'display:none;');
		        }
		        $('.steps .current').prevAll().removeClass('done').addClass('disabled');
		  	},
		    onStepChanging: function (event, currentIndex, newIndex)
		    {
		        form.validate().settings.ignore = ":disabled,:hidden";
        		return form.valid();
        		// return true;
		    },
		    onStepChanged: function (event, currentIndex, newIndex)
		    {
		        if(currentIndex == 2){
		        	$('.actions > ul > li:last-child').attr('style', '');
		        	$('.actions > ul > li:nth-child(2)').attr('style', 'display:none;');
		        }
		    },
		    onFinishing: function (event, currentIndex)
		    {
		        form.validate().settings.ignore = ":disabled,:hidden";
        		return form.valid();
        		// return true;
		    },
		    onFinished: function (event, currentIndex)
		    {
		        form.submit();
		    }
		});

		var calculateDay = function(){
			var date1 = new Date($('#fromM').val()+"/"+$('#fromD').val()+"/"+$('#fromY').val());
			var date2 = new Date($('#toM').val()+"/"+$('#toD').val()+"/"+$('#toY').val());
			timeDiff = date2.getTime() - date1.getTime();
			if(timeDiff < 0){
				alert('invalid date');
				return false;
			}
			var timeDiff = Math.abs(timeDiff);
			var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
			if(diffDays > 70){
				alert('maximum day is 70.You have selected '+diffDays+' days');
				this.selectedIndex = $(this).data('lastSelectedIndex');
				e.preventDefault();
				return false;
			}
			$('#totalDay').val(diffDays);
		}


		calculateDay();


		$('select').each(function() {
		  $(this).data('lastSelectedIndex', this.selectedIndex);
		});

		$(".calculateDay").on("click", function() {
	       $(this).data('lastSelectedIndex', this.selectedIndex);
	    });

		$('.calculateDay').on('change', calculateDay);


		var basic = [
		  ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'About']
		];





		$('.add_details').on('click', function(){
			var content = $('.details').html();
			$('.details_container').before(content);
			// CKEDITOR.replace( 'ckeditor' );
			// CKEDITOR.replaceClass = 'ckeditor';

		})
		$('.add_reward').on('click', function(){
			var content = $('.reward').html();
			$('.reward_container').before(content);
		})



		// console.log('new project');
		$(function(){
			CKEDITOR.replace( 'editor', {
			    toolbar: basic
			} );
			// CKEDITOR.replaceClass = 'ckeditor';
			CKEDITOR.replace( 'description' ,{
				// filebrowserBrowseUrl : 'ckeditor1/plugins/imageuploader/imgbrowser.php',
				// filebrowserUploadUrl : '/browser1/upload/type/all',
			    filebrowserImageBrowseUrl : '{{Request::root()}}/ckeditor/plugins/imageuploader/imgbrowser.php',
				// filebrowserImageUploadUrl : '/browser3/upload/type/image',
			    // filebrowserWindowWidth  : 800,
			    // filebrowserWindowHeight : 500,
				extraPlugins: 'imageuploader'
				// extraPlugins: 'dropler'
			});
		})

	</script>

@stop
