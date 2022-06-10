@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-6 align-self-center">
           
            <section class="contact-section">
                <div class="container" style="margin-left:50px; margin-top:40px;">
                    <div class="header">
                        <div class="subtitle">Reset Password</div>
                    </div>
                    <div class="contact-form">            
                        {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}

                            <div class="row">
                                <!-- @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif -->
                                <div class="col-lg-10">
                                    <div class="row g-3 mb-4 mt-2">
                                        <div class="col-12">
                                            @include('includes.partials.messages')
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-10">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            {{ html()->email('email')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.email'))
                                            ->attribute('maxlength', 191)
                                            ->required()
                                            ->autofocus() }}
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn-fill cta-btn form-submit-btn">Send Password Reset Link</button>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        
                        {{ html()->form()->close() }}

                    </div>
                </div>
            </section>

        </div><!-- col-6 -->
    </div><!-- row -->
@endsection
