@extends('master.master')
@section('title')
    {{ __($title) }}
@endsection
@section('content')

<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-profit-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-right">
                <ul class="uk-breadcrumb">
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb content end -->

<main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                <div class="uk-width-3-5@m">
                    @if (session('success'))
                        <div class="uk-text-success uk-text-center uk-text-large uk-text-bold" style="padding-bottom:1rem;">{{ __(session('success')) }}</div>  
                    @endif

                    <h4 class="uk-margin-remove-bottom uk-margin-remove-top uk-text-muted uk-text-center">{{ __('Have a questions?') }}</h4>
                    <h1 class="uk-margin-small-top uk-text-center">
                        <span class="in-highlight">{{ __('Let\'s get in touch') }}</span>
                    </h1>
                    <form method="POST" action="{{ route('company.contact.send_email') }}" class="uk-form uk-grid-small uk-margin-medium-top" id="contact_form" data-uk-grid="">
                        @csrf
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-user fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="{{ __('Full name') }}">
                            @error('name')
                                <div class="uk-text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="{{ __('Email address') }}">
                            @error('email')
                                <div class="uk-text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="uk-width-1-1 uk-inline">
                            <span class="uk-form-icon fas fa-pen fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="{{ __('Subject') }}">
                            @error('subject')
                                <div class="uk-text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="{{ __('Message') }}"></textarea>
                            @error('message')
                                <div class="uk-text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="uk-width-1-1">
                            <button 
                                class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded"
                                type="submit"
                                name="submit"
                                id="submitBtn"
                            >
                                {{ __('Send Message') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>

@endsection

@section('js')
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact_form');
    form.addEventListener('submit', function() {
        const submitBtn = document.getElementById('submitBtn');
        submitBtn.disabled = true;
    });
});
@endsection