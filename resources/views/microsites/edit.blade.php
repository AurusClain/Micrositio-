@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Microsite</h1>
        <form action="{{ route('microsites.update', $microsite) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $microsite->name }}" required>
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ $microsite->category }}" required>
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" name="currency" id="currency" class="form-control" value="{{ $microsite->currency }}" required>
            </div>
            <div class="form-group">
                <label for="payment_expiry">Payment Expiry (days)</label>
                <input type="number" name="payment_expiry" id="payment_expiry" class="form-control" value="{{ $microsite->payment_expiry }}" required>
            </div>
            <div class="form-group">
                <label for="site_type">Site Type</label>
                <select name="site_type" id="site_type" class="form-control" required>
                    <option value="invoice" {{ $microsite->site_type == 'invoice' ? 'selected' : '' }}>Invoice</option>
                    <option value="subscription" {{ $microsite->site_type == 'subscription' ? 'selected' : '' }}>Subscription</option>
                    <option value="donation" {{ $microsite->site_type == 'donation' ? 'selected' : '' }}>Donation</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection