@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="height: 100%;border-radius: 18px;">
                <div class="card-header" id="bg-verdeclaro">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body" id="bg-verdeoscuro">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}. <a class="anchor btn-planeem waves-effect waves-light" href="{{ route('verification.resend') }}">Reenviar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .alert{
        width: 100% !important;
        position: relative !important;
        left: 0% !important;
        bottom: 9px !important;
        border-radius: 94px !important;
        text-align: center;
    }
</style>
@endsection
