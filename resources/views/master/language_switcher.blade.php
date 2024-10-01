{{--<div class="uk-inline uk-margin-medium-top">--}}
{{--    <button class="uk-button uk-button-default" type="button">Hover</button>--}}
{{--    <div class="uk-card uk-card-body uk-card-default uk-width-large" uk-drop>--}}
{{--        <div class="uk-drop-grid uk-child-width-1-2" uk-grid>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="uk-navbar-dropdown">--}}
{{--        <ul class="uk-nav uk-navbar-dropdown-nav">--}}
{{--            <li class="{{ request()->routeIs('trading.account_type') ? 'uk-active' : '' }}">--}}
{{--                <a href="{{ route('trading.account_type') }}">{{ __('Account Type') }}</a>--}}
{{--            </li>--}}
{{--            <li class="{{ request()->routeIs('trading.products') ? 'uk-active' : '' }}">--}}
{{--                <a href="{{ route('trading.products') }}">{{ __('Products') }}</a>--}}
{{--            </li>--}}
{{--            <li class="{{ request()->routeIs('trading.download') ? 'uk-active' : '' }}">--}}
{{--                <a href="{{ route('trading.download') }}">{{ __('Download') }}</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@foreach($available_locales as $locale_name => $available_locale)--}}
{{--    @if($available_locale === $current_locale)--}}
{{--        <span class="uk-margin-small-left uk-margin-small-right uk-text-primary">{{ $locale_name }}</span>--}}
{{--    @else--}}
{{--        <a class="uk-margin-small-left uk-margin-small-right uk-text-muted" href="{{ route('language', $available_locale) }}">--}}
{{--            <span>{{ $locale_name }}</span>--}}
{{--        </a>--}}
{{--    @endif--}}
{{--@endforeach--}}
<nav uk-dropnav>
    <ul class="uk-subnav uk-margin-medium-top uk-margin-remove-bottom">
        <li>
            <a href>{{ array_search($current_locale, $available_locales) }}<span uk-drop-parent-icon></span></a>
            <div class="uk-dropdown uk-background-default uk-box-shadow-small">
                <ul class="uk-nav uk-dropdown-nav">
                    @foreach($available_locales as $locale_name => $available_locale)
                        <li>
                            <a class="uk-margin-small-left uk-margin-small-right uk-text-muted" href="{{ route('language', $available_locale) }}">
                                <span class="{{ $current_locale == $available_locale ? 'uk-text-primary' : '' }}">{{ $locale_name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </li>
    </ul>
</nav>
