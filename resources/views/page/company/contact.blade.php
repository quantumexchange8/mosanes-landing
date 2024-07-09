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
                <div class="uk-width-1-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.444319216601!2d106.68871057586878!3d10.77724165917694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3a5e50577b%3A0x2d8a3dfb1d7d6a72!2zNjNkIFbDtSBWxINuIFThuqduLCBQaMaw4budbmcgNiwgUXXhuq1uIDMsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2smy!4v1720502754894!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid="">
                        <div>
                            <h5 class="uk-margin-remove-bottom">{{ __('Address') }}</h5>
                            <p class="uk-margin-small-top">63d Võ Văn Tần Phường 6, Quận 3, Thành phố Hồ Chí Minh, 700000 Vietnam</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom">{{ __('Email address') }}</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">support@qcgbroker.com</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom">{{ __('Call') }}</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">+84906712961</p>
                        </div>
                    </div>
                    <hr class="uk-margin-medium">

                    @if (session('success'))
                        <div class="uk-text-success uk-text-center uk-text-large uk-text-bold">{{ __(session('success')) }}</div>  
                    @endif

                    <h4 class="uk-margin-remove-bottom uk-text-muted uk-text-center">{{ __('Have a questions?') }}</h4>
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