@extends('home.layouts.home-layout')
@section('title')
Trang chủ
@endsection
@section('page-title')
Trang chủ
@endsection 
@include('home.partial.slider')
@include('home.partial.banner')
@section('content')
<div >
	<div class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">

				<h3 class="ltext-103 cl5 product_hot">
                    Sản phẩm bán chạy
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52 justify-content-center">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Tất cả sản phẩm
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Áo
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Quần
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Phụ kiện
					</button>
				</div>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" ng-repeat="item in data">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="FE/images/products/@{{ item.default_image.name }}" alt="IMG-PRODUCT">
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									@{{item.name}}
								</a>

								<span class="stext-105 cl3">
									<span class="price">
										160.000
									</span>
									<span class="currency-symbol">₫</span>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="FE/images/icons/icon-heart-01.png"
										alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l"
										src="FE/images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Tải thêm    
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
	<script src="/admin/js/productExtend.js"></script>
	<script src="/admin/js/appController.js"></script>
	<script src="FE/js/utilities.js"></script>
@endsection