@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-8 align-self-center">
            
            <section class="contact-section">
                <div class="container" style="margin-left:150px; margin-top:40px;">
                    <div class="header">
                        <div class="subtitle">Log In</div>
                    </div>
                    <div class="contact-form">            
                        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}

                            <div class="row">
                                <!-- @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif -->
                                <div class="col-lg-8">
                                    <div class="row g-3 mb-4">
                                        <div class="col-12">
                                            @include('includes.partials.messages')
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            {{ html()->email('email')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.email'))
                                            ->attribute('maxlength', 191)
                                            ->required() }}
                                        </div>
                                        <div class="col-12">
                                            {{ html()->password('password')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.password'))
                                            ->required() }}
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="submit" class="btn-fill cta-btn form-submit-btn">Log In</button>
                                            </div>
                                            <div class="col-6 text-right">
                                                <a href="{{ route('frontend.auth.password.reset') }}" style="margin-top: 2rem; text-decoration: none; color: #fff; font-size: 0.9rem; font-weight: 300; border-radius: 50px; padding-top: 0.75rem; display: inline-block;">Forgot Your Password?</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>      
                            </div>
                        
                        {{ html()->form()->close() }}

                    </div>
                </div>
            </section>

        </div><!-- col-md-8 -->
    </div><!-- row -->
@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
