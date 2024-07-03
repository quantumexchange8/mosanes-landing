<div class="uk-flex uk-flex-center uk-padding-small uk-padding-remove-right uk-padding-remove-bottom uk-padding-remove-left">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span class="uk-margin-small-left uk-margin-small-right uk-text-primary">{{ $locale_name }}</span>
        @else
            <a class="uk-margin-small-left uk-margin-small-right uk-text-muted" href="{{ route('language', $available_locale) }}">
                <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div>