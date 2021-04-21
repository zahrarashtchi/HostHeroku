@extends('layout')

@section('content')
<section class="page-container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           یک لینک تازه به ایمیلتان فرستاده شد.
                        </div>
                    @endif
                    <p> یک ایمیل حاوی لینک تایید به آدرس {{ auth()->user()->email  }} ارسال شد. لطفا آن را تایید کنید ممکن است در لیست هرزنامه یا spam باشد. لینک تا 1 ساعت معتبر است.</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link">برای ارسال مجدد کلیک کنید.</button>
                    </form>
        
        </div>
    </div>
</section>
@endsection
