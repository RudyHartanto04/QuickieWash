@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Category', 'titleSub' => ''. ucfirst(Auth::user()->auth). ' : '. Auth::user()->nama])
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
<div class="container-fluid py-4">
    <div class="row">

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8">
            <div class="card shadow border border-2 text-black" style="width: 60rem">
            <div class="card-header d-flex justify-content-between align-items-center bg-white">
                <h5 class="mb-0 fw-bold text-orange">Kategori Laundry</h5>
                <!-- Icon Keranjang -->
                <a href="{{ route('pages.cartlaundry', ['auth' => 'admin']) }}"
                    class="d-flex justify-content-center align-items-center p-2"
                    style="background-color: #f56d37; border-radius: 8px; width: 3rem; height: 3rem; background: rgba(0,0,0,0.0);">
                    {{ svg('ionicon-cart-sharp') }}
                </a>


            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-md-4 mb-4">
                        <div class="card text-center border-0 shadow">
                            <div class="card-body">
                                <img src="{{ asset($category->icon) }}" class="icon-lg" alt="{{ $category->nama }}">
                                <h5 class="mt-3 fw-bold text-orange">{{ucwords($category->nama)}}</h5>
                                <a href="{{ route('pages.inputdetail', ['auth' => 'admin', 'category' => $category->nama]) }}"
                                class="btn btn-primary mt-3 w-100" style="background-color: #f56d37">
                                    Pilih
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

                <!-- Pagination Footer - Only include this once -->
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <p class="mb-0 text-muted">Showing data {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of {{ $categories->total() }} entries</p>
                    <nav>
                        {{ $categories->links('pagination::bootstrap-4') }}<!-- Simple Pagination -->
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
