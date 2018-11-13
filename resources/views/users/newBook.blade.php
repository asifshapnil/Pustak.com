@extends('users.layouts.main')

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
		.page_title_product_register{
			padding-top: 10px;
			padding-bottom: 10px;
			font-size: 25px;
		}
		/*steps start*/
		.wizard>.steps .number{
			display: none !important;
		}
		.wizard>.steps .steptext{
			font-size: 18px;
			text-transform: uppercase;
		}
		.wizard>.steps .stepcount{
			font-size: 22px;
			font-weight: bold;
		}
		.wizard>.steps .stepinfo{
			font-size: 18px;
			display: block;
		}
		.wizard>.steps a, .wizard>.steps a:hover, .wizard>.steps a:active{
			padding: 15px;
		    padding-top: 5px;
		    padding-bottom: 5px;
		    border-radius: 0px;
		    position: relative;
		}
		.wizard>.steps .current a, .wizard>.steps .current a:hover, .wizard>.steps .current a:active{
			background-color: #039aff;
			padding-left: 42px;
			margin-left: -8px;
		}
		.wizard>.steps .current a:after{
			content: '';
		    background: #039aff;
		    height: 50px;
		    width: 50px;
		    position: absolute;
		    top: 10px;
		    right: -24px;
		    transform: rotate(45deg);
		    z-index: 9;
		}
		.wizard>.steps .disabled a, .wizard>.steps .disabled a:hover, .wizard>.steps .disabled a:active, .wizard>.steps .done a, .wizard>.steps .done a:hover, .wizard>.steps .done a:active{
			margin-left: -8px;
			padding-left: 42px;
			border: 2px solid #039aff;
			background-color: #ffffff;
			padding-top: 3px;
    		padding-bottom: 3px;
    		position: relative;
    		border-right: none;
    		border-left: none;
		}
		.wizard>.steps .done a, .wizard>.steps .done a:hover, .wizard>.steps .done a:active{
			margin-left: -8px;
			border-left: 2px solid #039aff;
			color: #aaaaaa;
		}
		.wizard>.steps .disabled a:after, .wizard>.steps .done a:after{
			content: '';
		    border-top: 2px solid #039aff;
		    border-right: 2px solid #039aff;
		    height: 50px;
		    width: 50px;
		    position: absolute;
		    top: 8.9px;
		    right: -24px;
		    transform: rotate(45deg);
		    z-index: 9;
		    background-color: #ffffff;
		}
		.wizard>.steps ul li:first-child a{
			margin-left: 0px !important;
		}
		.wizard>.steps ul{
			margin-left: 0% !important;
			margin-top: 0px !important;
		}
		.wizard > .steps > ul > li{
			width: 22%;
		}
		/*steps end*/
	</style>
@stop


@section('ecommerce')

@stop

@section('content')
{{-- @include('user.layouts.tab') --}}

<div class="container" id="new-project">
	@if (session('error_message'))
		<div class="mt-5">
			<div class="row justify-content-center">
				<div class="col-md-11">
					 <h4 class="bg-info text-white p-4">{{ session('error_message') }}</h4>
				</div>
			</div>
		</div>

	@endif
	<div class="mt20">
		<div class="row justify-content-center">
			<div class="col-md-11 ">
				<h1 class="text-center page_title_product_register">å•†å“ã‚’ç™»éŒ²ã™ã‚‹</h1>
				<form id="example-form" action="" class="mt20" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
				    <div class="mt20">
						<h3 class="step_title_area">
				        	<span class="steptext">Step</span><span class="stepcount">1</span>
				        	<span class="stepinfo">ç•°æœ¬æƒ…å ±å…¥åŠ›</span>
				    	</h3>

				        <section class="mt-3">
                  jgfhjgjbkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
							{{-- <div class="col-md-12 p-0 mb-4"> --}}
								<div class="row ">
									<h5 class="col-md-12  font-weight-bold ">å•†å“æƒ…å ±ç¢ºèª</h5>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-12">
										<table class="table">
											<tr class="bg-dark">
												<th class="text-center">å•†å“å</th> <th class="text-center" colspan="2">æ•°é‡</th>  <th class="text-center">å¿…è¦ãƒã‚¤ãƒ³ãƒˆ</th>
											</tr>


												<tr>
													<td style="" class="">
														{{-- <div class="d-flex flex-row">
															<img src="{{$product->image ?  asset('uploads/projects/'.$product->image) : asset('uploads/projects/1615154785167836.jpeg')}}" alt="" class="img-fluid" >
															<span class="px-2">
																{{ $product->title }} <br>
																Mï¼ãƒã‚¤ãƒ“ãƒ¼ <br> {{ $p->point }} ãƒã‚¤ãƒ³ãƒˆ
															</span> --}}
														</div>
													</td>
													<td class="text-center" >
														<div class="d-flex flex-row pt-5 justify-content-center">
															{{-- <button class="px-3 py-1 align-self-end border text-center bg-light decrease_btn" data-rowid="{{ $p->rowId }} " data-price="{{ $p->price }}">-</button> --}}
															{{-- <form class="cart-item" action="{{route('front-cart-update')}}" method="get"> --}}
																{{-- <input type="hidden" name="row_id" value="{{$p->rowId}}"> --}}
																{{-- <input type="text" class="px-3 py-1 qty border align-self-start text-center cart_qty_{{ $p->rowId }}" name="quantity" value="{{ $p->qty }}" style="width:50px;"> --}}
															{{-- </form> --}}
															{{-- <button class="px-3 py-1 align-self-end border text-center bg-light increase_btn" data-rowid="{{ $p->rowId }}" data-price="{{ $p->price }}">+</button> --}}
														</div>
													</td>
													<td style="width:100px;" text-align="center" class="text-center">
														<div class="pt-5">
															{{-- <h4 class="setPrice_{{ $p->rowId }} price" style="letter-spacing:1px;"> {{ $p->qty*$p->price }} </h4> --}}
														</div>
													</td>
												</tr>
											{{-- @endforeach --}}
											<tr class="">
												<td class=" text-center">åˆè¨ˆæ•° </td>
												{{-- <td colspan="" class="text-center"><h5 class="totalQty">{{Cart::count()}}</h5></td> --}}
												<td class="text-center">åˆè¨ˆãƒã‚¤ãƒ³ãƒˆ</td>
												{{-- <td class="text-center"> <h5 class="text-danger totalPrice">{{Cart::subtotal()}} P</h5></td> --}}


											</tr>
										</table>
									</div>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-5 ">
										{{-- <a href="{{route('front-checkout')}}" class=" offset-md-2 text-center btn btn-md btn-primary">ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆã®èµ·æ¡ˆè€…ã¸ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ã‚’é€ã‚‹</a> --}}
									</div>
								</div>
							</div>
						</section>

						<h3 class="step_title_area">
				        	<span class="steptext">Step</span><span class="stepcount">2</span>
				        	<span class="stepinfo">ãƒªã‚¿ãƒ¼ãƒ³æƒ…å ±å…¥åŠ›</span>
				    	</h3>

				        <section>
							<div class="col-md-12 p-0 mb-4">
								<div class="row">
									 <div class="col-md-10 ml-md-3">
										 <div class="form-check">
											  <label class="form-check-label check-first  pt-3">
											    <input type="radio" class="form-check-input checkDefault" name="optradio" value="1" checked>
													{{-- ï¿¥{{ $user->point }} ã‚³ãƒ¼ã‚¹ <br> {{ $user->first_name }} {{ $user->last_name }}  ({{ $user->first_name }} {{ $user->last_name }}) <br> --}}
														 ã€’270-2241 <br>
														 {{-- {{ $user->shipping_address }}, {{ $user->shipping_postal_code }}, {{ $user->shipping_city }}    <br> --}}
														 {{-- é›»è©±ç•ªå·:{{ $user->profile->phone_no }} --}}
											  </label>
											</div>

										 </div>
									 </div>
							</div>
							<div class="col-md-12 ">
								<div class="row bg-light-yellow">
									 <div class="col-12">
										 <div class="form-check pt-3 pb-3">
											<label class="form-check-label check-first  pt-3">
												<input type="radio" class="form-check-input checkDefault" name="optradio" value="2">
											æ–°ã—ã„é€ä»˜å…ˆ
											</label>
										</div>
									 </div>
									 <div class="col-12 customAddress">
										 <div class="row inner_inner  pl-5 ml-2 pb-4">
											 <div class="col-md-9">
												 <div class="row border">
													 <div class="col-md-3 col-3 bg-dark">
														 <p class="pt-3 ">æ°å</p>
													 </div>
													 <div class="col-md-9 col-9 bg-white">
														 <div class="row pt-2">
															 <div class="col-md-3 col-3 p-0 ml-5">
																 <input type="text" class="form-control" id="" placeholder="å" value="" name="first_name" required>
															 </div>
															 <div class="col-md-3 col-3 p-0 m-0">
																 <input type="text" class="form-control mx-1" id="" placeholder="å§“" value="" name="last_name" required>
															 </div>
														 </div>
													 </div>
												 </div>

												 <div class="row border">
													 <div class="col-md-3 col-3 bg-dark">
														 <p class="pt-3 ">ãƒ•ãƒªã‚¬ãƒŠ</p>
													 </div>
													 <div class="col-md-9 col-9 bg-white">
														 <div class="row pt-2">
															 <div class="col-md-3 col-3 p-0 ml-5">
																 <input type="text" class="form-control" id="" placeholder="å" value="" name="first_name_1">
															 </div>
															 <div class="col-md-3 col-3 p-0 m-0">
																 <input type="text" class="form-control mx-1" id="" placeholder="å§“" value="" name="last_name_1">
															 </div>
														 </div>
													 </div>
												 </div>
												 <div class="row border">
													 <div class="col-md-3 col-3 bg-dark">
														 <p class="pt-3 ">ä½æ‰€</p>
													 </div>
													 <div class="col-md-9 col-9 bg-white">
														 <div class="row pt-2">
															 <div class="col-md-6 col-6 p-0 ml-5">
																 <input type="text" class="form-control" id="" placeholder="éƒµä¾¿ç•ªå·" name="postal_code" value="">
																 @if ($errors->has('postal_code'))
																	 <span class="help-block text-danger">
																		 <strong>{{ $errors->first('postal_code') }}</strong>
																	 </span>
																 @endif
															 </div>
														 </div>
														 <div class="row pt-2">
															 <div class="col-md-4 col-4 p-0 ml-5">
																 <select class="form-control" name="prefectures">
																	 <option value="1">123</option>
																	 <option value="2">123</option>
																	 <option value="3">123</option>

																 </select>
															 </div>
														 </div>
														 <div class="row pt-2">
															 <div class="col-md-6 col-6 p-0 ml-5">
																 <input type="text" class="form-control" id="" placeholder="ãã‚Œä»¥é™ã®ä½æ‰€" name="municipility" value="">
																 @if ($errors->has('address'))
																	 <span class="help-block text-danger">
																		 <strong>{{ $errors->first('address') }}</strong>
																	 </span>
																 @endif
															 </div>
														 </div>
														 <div class="row pt-2">
															 <div class="col-md-6 col-6 p-0 ml-5">
																 <input type="text" class="form-control " id="" placeholder="ãƒžãƒ³ã‚·ãƒ§ãƒ³åãƒ»éƒ¨å±‹ç•ªå·" name="address" value="">
																 @if ($errors->has('room_no'))
																	 <span class="help-block text-danger">
																		 <strong>{{ $errors->first('room_no') }}</strong>
																	 </span>
																 @endif
															 </div>
														 </div>
														 <div class="row pt-2 pb-2">
															 <div class="col-md-6 col-6 p-0 ml-5">
																 <input type="text" class="form-control " id="" placeholder="ãƒžãƒ³ã‚·ãƒ§ãƒ³åãƒ»éƒ¨å±‹ç•ªå·" name="room_no" value="">
																 @if ($errors->has('room_no'))
																	 <span class="help-block text-danger">
																		 <strong>{{ $errors->first('room_no') }}</strong>
																	 </span>
																 @endif
															 </div>
														 </div>
													 </div>
												 </div>
												 <div class="row border">
													 <div class="col-md-3 col-3 bg-dark">
														 <p class="pt-3 ">é›»è©±ç•ªå·</p>
													 </div>
													 <div class="col-md-9 col-9 bg-white">
														 <div class="row pt-2">
															 <div class="col-md-6 col-6 p-0 ml-5">
																 <input type="text" class="form-control " id="" placeholder="å" value="" name="phone_num">
															 </div>
														 </div>
													 </div>
												 </div>
											 </div>
										 </div>
									 </div>
								</div>
							</div>
				        </section>

						<h3 class="step_title_area">
				        	<span class="steptext">Step</span><span class="stepcount">3</span>
				        	<span class="stepinfo">è‰æ¡ˆå…¥åŠ›</span>
				    	</h3>

				        <section>
							<div class="col-md-12 p-0 mb-4">
								 <div class="row justify-content-center">
									 <div class="col-md-12 ">
										 <h5 class=" font-weight-bold ">ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆã®æ”¯æ´ãŒå®Œäº†ã—ã¾ã—ãŸã€‚</h5>
									 </div>
								 </div>
								 <div class="row justify-content-center">
									 <div class="col-md-12 offset-md-1">
										 <div class="form-check pt-3 pb-3">
											 <input type="radio" class="form-check-input " id="" name="optradio" >
											 <label class="form-check-label font-weight-bold">æ–°ã—ã„é€ä»˜å…ˆ</label>
										 </div>
									 </div>
								 </div>
								 <div class="row justify-content-center">
									 <div class="col-md-12 offset-md-2">
										 <table>
											 <tr>
												 {{-- <th class="px-3 pb-2">ãƒã‚¤ãƒ³ãƒˆæ®‹é«˜</th> <th class="userPoint"  data-point = "{{ Auth::user()->point }}"> {{ Auth::user()->point }} ãƒã‚¤ãƒ³ãƒˆ</th> --}}
											 </tr>
											 <tr>
												 {{-- <th class="px-3 py-2">æ”¯æ‰•ãƒã‚¤ãƒ³ãƒˆ</th> <th class="paymentPoint"> {{Cart::subtotal()}} ãƒã‚¤ãƒ³ãƒˆ</th> --}}
											 </tr>
											 @php

											 @endphp
											 <tr>
												 <th class="px-3 py-2">è³¼å…¥å¾Œãƒã‚¤ãƒ³ãƒˆ</th> <th class="restPoint">  ãƒã‚¤ãƒ³ãƒˆ</th>
											 </tr>
										 </table>
									 </div>
								 </div>
							</div>
				        </section>

						<h3 class="step_title_area">
	 				        <span class="steptext">Step</span><span class="stepcount">4</span>
	 				        <span class="stepinfo">è‰æ¡ˆå…¥åŠ›</span>
	 				    </h3>

				 		<section>
							<div class="col-md-12 p-0 mb-4">
								 <div class="row justify-content-center">
									 <div class="col-md-12 ">
										 <h5 class=" font-weight-bold ">ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆã®æ”¯æ´ãŒå®Œäº†ã—ã¾ã—ãŸã€‚</h5>
									 </div>
								 </div>
								 <div class="row justify-content-center">
									 <div class="col-md-12 offset-md-1">
										 <div class="form-check pt-3 pb-3">
											  <label class="form-check-label">
											    <input type="radio" class="form-check-input" name="optradio">æ–°ã—ã„é€ä»˜å…ˆ
											  </label>
											</div>

									 </div>
								 </div>
								 <div class="row justify-content-center">
									 <div class="col-md-12 offset-md-2">
										 <table>
				 								<tr>
				 									{{-- <th class="px-3 pb-2">ãƒã‚¤ãƒ³ãƒˆæ®‹é«˜</th> <th class="userPoint"  data-point = "{{ Auth::user()->point }}"> {{ Auth::user()->point }} ãƒã‚¤ãƒ³ãƒˆ</th> --}}
				 								</tr>
				 								<tr>
				 									{{-- <th class="px-3 py-2">æ”¯æ‰•ãƒã‚¤ãƒ³ãƒˆ</th> <th class="paymentPoint"> {{Cart::subtotal()}} ãƒã‚¤ãƒ³ãƒˆ</th> --}}
				 								</tr>
				 								@php

				 								@endphp
				 								<tr>
				 									<th class="px-3 py-2">è³¼å…¥å¾Œãƒã‚¤ãƒ³ãƒˆ</th> <th class="restPoint">  ãƒã‚¤ãƒ³ãƒˆ</th>
				 								</tr>
			 							</table>
									 </div>
								 </div>
								 <div class="row justify-content-center mt-4">
									 <div class="col-md-12 ">
										 <h5 class=" font-weight-bold ">ä¸è¶³ãƒã‚¤ãƒ³ãƒˆåˆ†æ”¯æ‰•ã„</h5>
									 </div>
								 </div>
								 <div class="row justify-content-center mt-1">
									 <div class="col-md-12 offset-md-1">
										 <h6 class="">ä¸è¶³ãƒã‚¤ãƒ³ãƒˆåˆ†ã‚’ã‚¯ãƒ¬ã‚¸ãƒƒãƒˆã‚«ãƒ¼ãƒ‰ã§æ”¯æ‰•ã„ã§ãã¾ã™ã€‚</h6>
									 </div>
								 </div>
								 <div class="row justify-content-center mt-4">
									 <div class="col-md-12 offset-md-2">
										 <h6 class="font-weight-bold">ã‚«ãƒ¼ãƒ‰æƒ…å ±å…¥åŠ›</h6>
									 </div>
								 </div>
								 <div class="row  mt-1 ml-md-3">
									 <div class="col-md-7 offset-md-1">
										 <label for="">(ä¾‹ TARO SUZUKI)</label>
										 <input type="text" name="name" class="form-control required" value="">
										 <label for="">(ä¾‹ TARO SUZUKI)</label>
										 <input type="text" name="number" class="form-control required" value="">
										 <div class="row mt-2 pt-md-2">
											 <div class="col-3">
												 <label for="">label</label>
												 <select name="exp_month" class="form-control required">
													 <?php for($i=1;$i<13;$i++){?>
														 <option value="{{$i}}">{{$i}}</option>
													 <?php }?>
												 </select>
											 </div>
											 <div class="col-1">
												 <label for="" class="text-white">hidden</label>
												 <p>/</p>
											 </div>

											 <div class="col-3 ">
												 <label for="" class="text-white">hidden</label>
												 <select name="exp_year" class="form-control required">
									 				<?php for($i=date('Y');$i<date('Y')+10;$i++){?>
									 					<option value="{{$i}}">{{$i}}</option>
									 				<?php }?>
									 			</select>
											 </div>

											 <div class="col-3 ml-5">
												 <label for="">label</label>
												 <input type="text" class="form-control required" name="cvv" value="">
											 </div>
										 </div>
									 </div>
								 </div>
							</div>
	 			        </section>

						<h3 class="step_title_area">
				        	<span class="steptext">Step</span><span class="stepcount">5</span>
				        	<span class="stepinfo">å®Œäº†</span>
				    	</h3>

				        <section>
							<div class="col-md-12 p-0 mb-4 ">
								<h4>ãƒªã‚¿ãƒ¼ãƒ³ã‚’ãŠé¸ã³ãã ã•ã„</h4>
							</div>
							<div class="col-md-12 p-0 mb-4 ml-md-5">
								<h4 class="ml-md-3">å•†å“æƒ…å ±</h4>
							</div>

							<div class="col-md-12 p-0 mb-4">
								<div class="row ">
									<h5 class="col-md-12  font-weight-bold ">å•†å“æƒ…å ±ç¢ºèª</h5>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-12">
										<table class="table">
											<tr class="bg-dark">
												<th class="text-center">å•†å“å</th> <th class="text-center" colspan="2">æ•°é‡</th>  <th class="text-center">å¿…è¦ãƒã‚¤ãƒ³ãƒˆ</th>
											</tr>

											{{-- @foreach(Cart::content() as $p)
												@php
												$product = App\Models\Product::find($p->id)
												@endphp --}}
												<tr>
													<td style="" class="">
														<div class="d-flex flex-row">
															{{-- <img src="{{$product->image ?  asset('uploads/projects/'.$product->image) : asset('uploads/projects/1615154785167836.jpeg')}}" alt="" class="img-fluid" > --}}
															<span class="px-2">
																{{-- {{ $product->title }} <br> --}}
																{{-- Mï¼ãƒã‚¤ãƒ“ãƒ¼ <br> {{ $p->point }} ãƒã‚¤ãƒ³ãƒˆ --}}
															</span>
														</div>
													</td>
													<td class="text-center" >
														{{-- <div class="d-flex flex-row pt-5 justify-content-center"> --}}
															{{-- <button class="px-3 py-1 align-self-end border text-center bg-light decrease_btn" data-rowid="{{ $p->rowId }} " data-price="{{ $p->price }}">-</button> --}}
															{{-- <form class="cart-item" action="{{route('front-cart-update')}}" method="get"> --}}
																{{-- <input type="hidden" name="row_id" value="{{$p->rowId}}"> --}}
																{{-- <input type="text" class="px-3 py-1 qty border align-self-start text-center cart_qty_{{ $p->rowId }}" name="quantity" value="{{ $p->qty }}" style="width:50px;"> --}}
															{{-- </form> --}}
															{{-- <button class="px-3 py-1 align-self-end border text-center bg-light increase_btn" data-rowid="{{ $p->rowId }}" data-price="{{ $p->price }}">+</button> --}}
														</div>
													</td>
													<td style="width:100px;" text-align="center" class="text-center">
														{{-- <div class="pt-5"> --}}
															{{-- <h4 class="setPrice_{{ $p->rowId }} price" style="letter-spacing:1px;"> {{ $p->qty*$p->price }} </h4> --}}
														</div>
													</td>
												</tr>
											{{-- @endforeach --}}
											<tr class="">
												<td class=" text-center">åˆè¨ˆæ•° </td>
												{{-- <td colspan="" class="text-center"><h5 class="totalQty">{{Cart::count()}}</h5></td> --}}
												<td class="text-center">åˆè¨ˆãƒã‚¤ãƒ³ãƒˆ</td>
												{{-- <td class="text-center"> <h5 class="text-danger totalPrice">{{Cart::subtotal()}} P</h5></td> --}}


											</tr>
										</table>
									</div>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-5 ">
										{{-- <a href="{{route('front-checkout')}}" class=" offset-md-2 text-center btn btn-md btn-primary">ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆã®èµ·æ¡ˆè€…ã¸ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ã‚’é€ã‚‹</a> --}}
									</div>
								</div>
							</div>
							<div class="col-md-12 pt-3">
								<div class="row">
									<div class="col-10  border offset-md-1 p-2">
										<div class="row inner_inner">
											<div class="col-md-12 ">
												<table>
	 				 								<tr>
	 				 									{{-- <th class="px-3 pb-2">ãƒã‚¤ãƒ³ãƒˆæ®‹é«˜</th> <th class="userPoint"  data-point = "{{ Auth::user()->point }}"> {{ Auth::user()->point }} ãƒã‚¤ãƒ³ãƒˆ</th> --}}
	 				 								</tr>
	 				 								<tr>
	 				 									{{-- <th class="px-3 py-2">æ”¯æ‰•ãƒã‚¤ãƒ³ãƒˆ</th> <th class="paymentPoint"> {{Cart::subtotal()}} ãƒã‚¤ãƒ³ãƒˆ</th> --}}
	 				 								</tr>
	 				 								@php

	 				 								@endphp
	 				 								<tr>
	 				 									<th class="px-3 py-2">è³¼å…¥å¾Œãƒã‚¤ãƒ³ãƒˆ</th> <th class="restPoint">  ãƒã‚¤ãƒ³ãƒˆ</th>
	 				 								</tr>
	 			 							</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 pt-3">
								<div class="row">
									<div class="col-10  border offset-md-1 p-2">
										<div class="row inner_inner  pl-0 ml-2 pb-4">
											<div class="col-md-12">
												<div class="row ">
													<div class="col-md-12 defaultAddress">
														{{-- <span> {{ $user->first_name }} {{ $user->last_name }}  ({{ $user->first_name }} {{ $user->last_name }}) <br> --}}
															ã€’270-2241 <br>
															{{-- {{ $user->shipping_address }} {{ $user->shipping_city }} {{ $user->shipping_state }}<br> --}}
															{{-- é›»è©±ç•ªå·: {{ $user->profile->phone_no }} --}}
														</span>
													</div>
												</div>
											</div>
											<div class="col-md-12 setAddress">
												<div class="row ">
													<div class="col-md-12">
														<span> <span class="set_first_name"></span> <span class="set_last_name"></span> æ¥æœªå­  (ãƒŠãƒŸã‚­ ã‚¯ãƒŸã‚³) <br>
															ã€’270-2241 <br>
															<span class="set_address"></span> <span class="set_postal_code"></span> <br>
															é›»è©±ç•ªå·: <span class="set_phone_no"></span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12  pt-3">
								<div class="row">
									<div class="col-10  border offset-md-1">
										<div class="row">
										<div class="row inner_inner  pl-0 ml-2 pb-4">
											<div class="col-md-12 ">
												<div class="row ">
													<div class="col-md-12 p-2">
														<span>ã‚«ãƒ¼ãƒ‰åç¾©</span> <br>
														{{-- <h6 class="defaultAddress">{{ $user->first_name }} {{ $user->last_name }}</h6> --}}
														<h6 class="setAddress"> <span class="set_first_name"></span class="set_last_name"> <span> </span></h6> <br>
														<span>ã‚«ãƒ¼ãƒ‰ç•ªå·</span> <br>
														<h6 class="set_card_number">XXXX-XXXX-XXXX-1212</h6> <br>
														<span class="col-2">æœ‰åŠ¹æœŸé™ <br>
															<h6> <span class="set_exp_month"></span> / <span class="set_exp_year"></span> </h6></span>
															<span class="col-3">ã‚»ã‚­ãƒ¥ãƒªãƒ†ã‚£ã‚³ãƒ¼ãƒ‰ <br>
																<h6>XX8</h6></span>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
									<div class="col-md-12 mt-5">
										<div class="row justify-content-center">
											<div class="col-8">
												<div class="text-center form-check">
													<span><input type="checkbox" class="form-check-input" id="exampleCheck1" value="1">
														<label class="form-check-label" for="exampleCheck1"><a href="#">åˆ©ç”¨è¦ç´„</a>ã«åŒæ„ </span> <br>
																ã“ã®ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆã¯ãƒãƒ£ãƒ¬ãƒ³ã‚¸å½¢å¼ã§ã™ã€‚<br>
																ç›®æ¨™é‡‘é¡ã«é”ã—ã¦ã„ãªãã¦ã‚‚ã€ãƒ—ãƒ­ã‚¸ã‚§ã‚¯ãƒˆã¯æœŸé–“ãŒæ¥ã‚Œã°æˆç«‹ã¨ãªã‚Šã¾ã™ã€‚<br>
																æ”¯æ´å¾Œã®ã‚­ãƒ£ãƒ³</label>
												</div>
											</div>
										</div>
									</div>
						</section>

						<h3 class="step_title_area">
							<span class="steptext">Step</span><span class="stepcount">6</span>
							<span class="stepinfo">å®Œäº†</span>
						</h3>

						<section>
							<div class="col-md-12 p-0 mb-4 mt-5">
								<div class="row justify-content-center">
									<div class="col-md-5 offset-md-1">
										<h5 class="text-yellow font-weight-bold text-center">å•†å“ã®è³¼å…¥ãŒå®Œäº†ã—ã¾ã—ãŸã€‚</h5>
									</div>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-5 offset-md-1">
										<h6 class=" font-weight-bold text-center">
											å•†å“ã®ã”è³¼å…¥ã‚ã‚ŠãŒã¨ã†ã”ã–ã„ã¾ã—ãŸã€‚<br>
											ãŠæ‰‹å…ƒã«å±Šãã¾ã§ã‚‚ã†ã—ã°ã‚‰ããŠå¾…ã¡ãã ã•ã„ã€‚

										</h6>
									</div>
								</div>
							</div>
						</section>

				    </div>
				</form>
			</div>
		</div>
	</div>
</div>


{{-- @include('user.layouts.add-project') --}}
@stop

@section('custom_js')

	<!-- <script src="//cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script> -->
	<script src="{{Request::root()}}/ckeditor/ckeditor.js"></script>

	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	<script type="text/javascript">
	// document.getElementById('#uncheck').checked = false;

	</script>

	<script type="text/javascript">
		$(document).ready(function(){

			// console.log(n);
			$(document).on('click', '.decrease_btn', function(){
				var row_id = $(this).attr("data-rowid");
				var price = $(this).attr("data-price");

				var qty = parseInt($('.cart_qty_'+row_id).val());
			  var newQty = qty - 1;
				$('.cart_qty_'+row_id).val(newQty);
				var newPrice = newQty * price;
				// console.log(newQty * price);
				$('.setPrice_'+row_id).html(newPrice);
				var inputs = $(".qty");
				var	totalQty = 0;


				for(var i = 0; i < inputs.length; i++){
						// alert($(inputs[i]).val());
						totalQty += parseInt($(inputs[i]).val());
				}
				// console.log(totalQty);
				$('.totalQty').html(totalQty);

				var price = $(".price");
				var	totalPrice = 0;

				for(var i = 0; i < price.length; i++){
						// alert($(inputs[i]).val());
						totalPrice += parseInt($(price[i]).html());
				}
				// console.log(totalQty);
				$('.totalPrice').html(totalPrice + ' ' + 'P' );



			});

			$(document).on('click', '.increase_btn', function(){
				var row_id = $(this).attr("data-rowid");
				var price = $(this).attr("data-price");

				var qty = parseInt($('.cart_qty_'+row_id).val());
				var newQty = qty + 1;

				$('.cart_qty_'+row_id).val(newQty);
				var newPrice = newQty * price;
				$('.setPrice_'+row_id).html(newPrice);

				var inputs = $(".qty");
				var	totalQty = 0;

				for(var i = 0; i < inputs.length; i++){
				    // alert($(inputs[i]).val());
						totalQty += parseInt($(inputs[i]).val());
				}
				// console.log(totalQty);
				$('.totalQty').html(totalQty);

				var price = $(".price");
				var	totalPrice = 0;

				for(var i = 0; i < price.length; i++){
						// alert($(inputs[i]).val());
						totalPrice += parseInt($(price[i]).html());
				}
				// console.log(totalQty);
				$('.totalPrice').html(totalPrice + ' ' + 'P');
				// $('.paymentPoint').html(totalPrice);




			});



		});

	</script>

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
		    startIndex: {{$finish?5:0}},
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
		  		if(currentIndex == 5){
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

					if (currentIndex == 4) {
						// alert('hello');
						// if ($('#exampleCheck1').is(":checked")) {
						// 	$('#exampleCheck1').removeClass('required');
						//
						// }else{
						// 	$('#exampleCheck1').addClass('required');
						// }

					}
					if (currentIndex == 2) {
						var userPoint = parseInt($('.userPoint').html());
						var totalPrice = parseInt($('.totalPrice').html());
						$('.paymentPoint').html(totalPrice + ' ' + 'ãƒã‚¤ãƒ³ãƒˆ');
						var rest = userPoint - totalPrice ;
						$('.restPoint').html(rest + ' ' + 'ãƒã‚¤ãƒ³ãƒˆ');




						// alert(totalPrice);
					}
		    	if(currentIndex == 4){
		    		$('.set_first_name').html($('input[name="first_name"]').val());
						$('.set_last_name').html($('input[name="last_name"]').val());
						$('.set_address').html($('input[name="address"]').val());
						$('.set_postal_code').html($('input[name="postal_code"]').val());
						$('.set_phone_no').html($('input[name="phone_num"]').val());
						$('.set_card_number').html($('input[name="number"]').val());
						$('.set_exp_month').html($('select[name="exp_month"]').val());
						$('.set_exp_year').html($('select[name="exp_year"]').val());




		    	}

		        if(currentIndex == 4){
		        	$('.actions > ul > li:last-child').attr('style', '');
		        	$('.actions > ul > li:nth-child(2)').attr('style', 'display:none;');
		        }
		    },
		    onFinishing: function (event, currentIndex)
		    {
						if(!$('#exampleCheck1').is(':checked')){
							//$('#exampleCheck1').addClass('required');
							alert('åˆ©ç”¨è¦ç´„ã«åŒæ„  is need to be checked.');
							return false;
						}else{
							$('#exampleCheck1').removeClass('required');
						}
						form.validate().settings.ignore = ":disabled,:hidden";
	        	return form.valid();
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
		});

	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			var checkVal = $('.checkDefault').val();
			if (checkVal == 1) {
				$(".customAddress :input").attr("disabled", true);

			}

			$('.checkDefault').on('change', function(e){
				var value = $(this).val();
				if(value == 1){
					$(".customAddress :input").attr("disabled", true);
					$('.setAddress').addClass('hide')
				}else{
					$(".customAddress :input").attr("disabled", false);
					$(".customAddress :input").addClass("required");

					$('.setAddress').removeClass('hide');
					$('.defaultAddress').addClass('hide')


				}
			});
		})
	</script>

@stop
