@extends('template/master')

@section('title', 'topic')

@section('css')
    <link rel="stylesheet" href="/css/topic/index.css" media="all" title="no title">
@endsection

@section('plug')

@endsection

@section('main')
    <div class="container wrap">
        <div class="media__title"><h1>キャンペーン一覧</h1></div>
        @foreach ($campaigns as $campaign)
            <div class="campaignBox">
                <div class="media">
                    <div class="media__image">
                        <img class="image" src="{{ $campaign->campaign_image }}" alt=""/>
                    </div>
                    <div class="media__summary">
                        <h2 class="media__heading">{{ $campaign->campaign_title }}</h2>
                        <p class="media__text">{{ $campaign->campaign_text }}</p>
                    </div>
                </div>
                <a href="/topicdetail?id={{ $campaign->id }}"></a>
            </div>
        @endforeach
    </div>
@endsection

@section('scrip')

@endsection
