@extends('admin.main')
@push('style')
<style>
</style>
@endpush

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Article</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <span>
                            <i class="icon-home"></i>
                        </span>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('articles.index') }}">Articles</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <small>Article Detail</small>
                    </li>
                </ul>
            </div>
            <div
                class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-post card-round ">
                        <div class="card-header d-flex justify-content-center mt-2">
                            <h1 class="text-align-center">
                                <span> {{ $article->title }} </span>
                            </h2>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-category text-info mb-1">
                                <a href="#">{{ $article->category }} | @php Carbon\Carbon::setLocale('en') @endphp {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->published_at)->diffForHumans() }}</a>
                            </p>
                        </div>
                        <div class="card-body">
                        <div class="d-flex justify-content-center">
                            
                            <img
                            class="card-img-top mb-2" style="max-width:50rem"
                            src="{{ asset('storage/'.$article->image) }}"
                            alt="Card image cap"
                            />
                            
                        </div>
                        
                        
                        <div class="card-text">
                            {!! $article->description !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
@endpush