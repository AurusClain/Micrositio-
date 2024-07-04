@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Microsite</h1>
        <form action="{{ route('microsites.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" name="currency" id="currency" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="payment_expiry">Payment Expiry (days)</label>
                <input type="number" name="payment_expiry" id="payment_expiry" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="site_type">Site Type</label>
                <select name="site_type" id="site_type" class="form-control" required>
                    <option value="invoice">Invoice</option>
                    <option value="subscription">Subscription</option>
                    <option value="donation">Donation</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
