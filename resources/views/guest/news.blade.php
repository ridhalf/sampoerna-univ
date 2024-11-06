@extends('guest.main')
@section('content')
<div class="container news">
    <div class="news-bg">
      <div class="box-img">
        <img src="assets/img/pages/news/main-news.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">Latest Update</h3>
      </div>
    </div>
    <div class="news-highlight">
      <div class="box-highlight">
        <div class="main-news">
          <img src="{{ asset('storage/'.$last_article->image) }}" alt="" />
          <div class="box-news">
            <h4 class="title">
              {{ $last_article->title }}
            </h4>
            <p class="desc">
              {{ $last_article->short_description }}
            </p>
            <a class="more-news">
              <p class="text-more" style="cursor: pointer" onclick="window.location.href='{{ route('news-detail',$last_article->slug) }}'">Read More</p>
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M6.66675 16.0007H25.3334"
                  stroke="#292F78"
                  stroke-width="2.66667"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M20 21.3333L25.3333 16"
                  stroke="#292F78"
                  stroke-width="2.66667"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M20 10.666L25.3333 15.9993"
                  stroke="#292F78"
                  stroke-width="2.66667"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
        </div>
        <ul class="grid-news">
          @foreach($articles as $article)
          <li class="box-news">
            <img src="{{ asset('storage/'.$article->image) }}" alt="" />
            <div class="box-content">
              <p class="date">{{ \Carbon\Carbon::parse($article->published_at)->format('M d, Y') }}</p>
              <h3 class="title" style="cursor: pointer" onclick="window.location.href='{{ route('news-detail',$article->slug) }}'">
                {{ $article->title }}
              </h3>
              <p class="desc">
                {{ $article->short_description }}
              </p>
            </div>
          </li>
          @endforeach
          
        </ul>
      </div>
    </div>
  </div>
@endsection
