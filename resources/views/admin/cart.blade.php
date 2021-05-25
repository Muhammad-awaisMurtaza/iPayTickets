@extends('layouts.master')
@section('css')
@endsection
@section('page-header')		
						<div class="page-header">
							<h4 class="page-title">Cart</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cart</li>
							</ol>
						</div>
@endsection
@section('content')
						<div class="row">
							<div class="col-lg-8">
								<div class="card m-b-20">
									<div class="card-header ">
										<div class="card-title">Shopping Cart</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead >
													<tr >
														<th>Product</th>
														<th>price</th>
														<th>Quantity</th>
														<th>Total</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Digital Watch</td>
														<td><span>$345.00</span></td>
														<td class="w-7 "><input type="text" class="form-control text-center h-30" placeholder="1"></td>
														<td><span>$345.00</span></td>
														<td><a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
													</tr>
													<tr>
														<td>Striped chair</td>
														<td><span>$156.00</span></td>
														<td class="w-7"><input type="text" class="form-control text-center h-30" placeholder="2"></td>
														<td><span>$312.00</span></td>
														<td><a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
													</tr>
													<tr>
														<td>Ear rings</td>
														<td><span>$45.00</span></td>
														<td class="w-7"><input type="text" class="form-control text-center h-30" placeholder="3"></td>
														<td><span>$135.00</span></td>

														<td><a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
										<form class="text-left  product-cart m-t-20 mb-0">
											<div class="row">
												<div class="col-6"><input class="productcart form-control" type="text" placeholder="Coupon Code"></div>
												<div class="col-6"><a href="#" class="btn btn-primary btn-md">Apply</a></div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card ">
									<div class="card-header ">
										<div class="card-title">Order Summery</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered mb-0">
												<tbody>
													<tr>
														<td>Cart Subtotal</td>
														<td class="text-right">$792.00</td>
													</tr>
													<tr>
														<td><span>Totals</span></td>
														<td class="text-right text-muted"><span>$792.00</span></td>
													</tr>
													<tr>
														<td><span>Order Total</span></td>
														<td><h2 class="price text-right mb-0">$792.00</h2></td>
													</tr>
												</tbody>
											</table>
										</div>
										<form class="text-center mt-3">
											<input class="btn btn-primary btn-block btn-lg mt-2 m-b-20 " type="submit" value="Proceed To Checkout">
											<input class="btn btn-secondary btn-block btn-lg mt-2" type="submit" value="Continue Shopping">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
@section('js')	
@endsection