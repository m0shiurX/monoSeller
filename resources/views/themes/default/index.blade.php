@extends('themes.default.layout')
@section('title', $salesPage->title)

{{-- user provided header script --}}
@section('header_script')
{!! $salesPage->header_script !!}
@endsection


@section('content')
<div class="container pb-20">
    <div class="flex justify-center">
      <img class="rounded-lg h-36 w-36" src="{{ asset('assets/quick-seller.png') }}" alt="">
    </div>
    <div class="prose text-center pb-16 mx-auto">
      <h4> </h4>
      <h1 class="mb-4 text-green-800"> স্মার্ট সেলারদের জন্য স্মার্ট সমাধান </h1>
      <h2 class="mt-1"> টেম্প্লেট নির্বাচন করুন </h2>
      <p>
        {{ json_encode($salesPage->template_content)}}
      </p>
    </div>
    <div class="max-w-2xl mx-auto grid grid-cols-2 gap-12 mt-5">
      <div class="card glass hover:border-spacing-6 hover:border-4 hover:border-red-800 hover:shadow-lg">
        <figure><a href="#"><img src="{{ asset('assets/video.jpg') }}" alt="car!" /></a></figure>
        <div class="card-body">
          <!-- <h2 class="card-title">Template with Video Content</h2> -->
          <div class="card-actions justify-center">
            <a href="#" class="btn btn-wide btn-warning">View Demo</a>
          </div>
        </div>
      </div>

      <div class="card glass hover:border-spacing-6 hover:border-4 hover:border-red-800 hover:shadow-lg">
        <figure><a href="#"><img src="{{ asset('assets/image.jpg') }}" alt="car!" /></a></figure>
        <div class="card-body">
          <!-- <h2 class="card-title">Template with Image Content</h2> -->
          <div class="card-actions justify-center">
            <a href="#" class="btn btn-wide text-white btn-warning">View Demo</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="footer footer-center p-10 bg-green-200 text-accent-content">
    <aside>
      <img class="h-32" src="{{ asset('assets/quick-seller.png') }}" alt="">
      <p> <a href="#" rel="noopener noreferrer">Privacy Policy</a> | <a href="#"
          rel="noopener noreferrer">Terms of Service</a></p>
      <p>Copyright © 2024 - All right reserved</p>
    </aside>
  </footer>
  <!-- CONTENT SECTION END -->
  <script type="module" src="{{ asset('assets/main.js') }}"></script>
@endsection

{{-- user provided footer script --}}
@section('footer_script')
{!! $salesPage->footer_script !!}
@endsection
