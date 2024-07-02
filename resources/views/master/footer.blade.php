<footer>
    <div class="uk-section uk-section-secondary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex uk-margin-small-top" data-uk-grid="">
                <div>
                    <h4 class="uk-heading-bullet">Overview</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('trading.account_type') }}">Account Type</a></li>
                        <li><a href="{{ route('trading.products') }}">Products</a></li>
                        <li><a href="{{ route('trading.download') }}">Download</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">cTrader</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('platform') }}">cTrader</a></li>
                        <li><a href="{{ route('partnership.introduction_broker') }}">Introduction Broker (IB)</a></li>
                        <li><a href="{{ route('partnership.regional_country') }}">Regional and Country Partner</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Company</h4>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('company.about') }}">About Us</a></li>
                        <li><a href="{{ route('company.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('company.aml_policy') }}">AML Policy</a></li>
                    </ul>
                </div>
                <div class="uk-flex-first uk-flex-last@m">
                    <div class="footer-logo">
                        <img class="uk-margin-bottom" src="{{ asset('img/Logo.svg') }}" alt="footer-logo" width="28" height="28" data-uk-img="">
                        <span class="logo-text" style="color: white">Mosanes.</span>
                    </div>
                    <ul class="uk-list uk-link-text uk-margin-remove-top">
                        <li><a href="#"><i class="fas fa-envelope uk-margin-small-right"></i>support@qcgbroker.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top uk-margin-small-bottom" data-uk-grid="">
                <div class="uk-width-5-6@m uk-margin-bottom">
                    <div class="footer-warning in-margin-top-20@s">
                        <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
                        <p class="uk-text-small">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary </p>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <p class="copyright-text">© Mosanes. All rights reserved.</p>
                </div>
            </div>
        </div>        
    </div>
</footer>