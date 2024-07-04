@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $microsite->name }}</h1>
        <p>Category: {{ $microsite->category }}</p>
        <p>Currency: {{ $microsite->currency }}</p>
        <p>Payment Expiry: {{ $microsite->payment_expiry }} days</p>
        <p>Site Type: {{ $microsite->site_type }}</p>
        @if ($microsite->logo)
            <img src="{{ Storage::url($microsite->logo) }}" alt="Logo" style="max-width: 100px;">
        @endif
    </div>
@endsection