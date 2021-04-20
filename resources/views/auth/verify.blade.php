@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <p>یک لینک تازه به ایمیلتان فرستاده شد.</p>
                        </div>
                    @endif
                    <p> یک ایمیل حاوی لینک تایید به آدرس {{ auth()->user()->email }} ارسال شد. لطفا آن را تایید کنید ممکن است در لیست هرزنامه یا spam باشد. لینک تا 1 ساعت معتبر است.</p>
                    
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
