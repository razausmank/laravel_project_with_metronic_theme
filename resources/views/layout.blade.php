
<!--begin::Main-->

@include("partials/_header-mobile")
<div class="d-flex flex-column flex-root">

	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">

		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

			@include("partials/_header")

			<!--begin::Content-->
			<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

				@include("partials/_subheader")

				@include("partials/_content")
			</div>

			<!--end::Content-->

			@include("partials/_footer/compact")
		</div>

		<!--end::Wrapper-->
	</div>

	<!--end::Page-->
</div>

<!--end::Main-->
