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

<section class="uk-margin-medium-top uk-margin-medium-bottom">
    <div class="uk-container uk-text-justify">
        <div class="uk-container">
            <div class="uk-margin-medium-buttom">
            <p class="uk-text-middle uk-margin-small-bottom">
                {{ __('Quantum Capital Global (QCG) is committed to the highest standards of the Anti-Money Laundering (AML) compliance and Counter-Terrorism Financing (CTF). To help the government fight the funding of terrorism and money laundering activities, law requires all financial institutions to obtain, verify, and record information that identifies each person opening an account.') }}
            </p>
            <p class="uk-text-middle uk-margin-small-bottom">
                {{ __('Money laundering - the process of converting funds, received from illegal activities (such as fraud, corruption, terrorism, etc.), into other funds or investments that look legitimate to hide or distort the real source of funds.') }}
            </p>
        </div>
    </div>
</div>
</section>

<section class="uk-margin-large-bottom">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-margin-small-top ">
                <h3 class="uk-text-center uk-text-capitalize">
                    {{ __('The process of money laundering can be divided into three sequential stages:') }}
                </h3>
            </div>
            <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-medium uk-grid" data-uk-grid="">
                <div class="uk-first-column">
                    <article class="uk-article"> <img class="uk-margin-small-top uk-margin-remove-bottom" src="https://home.qcgbrokertw.com/images/( company- aml policy ) placement-01.png" alt="">
                        <h5 class="uk-margin-small-top uk-flex uk-flex-center" style="font-size: 20px;">
                            <div class="uk-text-primary">
                                {{ __('Placement') }}
                            </div>
                        </h5>
                        <p class="uk-text-center">
                            {{ __('At this stage, funds are converted into financial instruments, such as checks, bank accounts, and money transfers, or can be used for purchasing high-value goods that can be resold. They can also be physically deposited into banks and non-bank institutions (e.g., currency exchangers). To avoid suspicion by the company, the launderer may as well make several deposits instead of depositing the whole sum at once, this form of placement is called smurfing.') }}
                        </p>
                    </article>
                </div>
                <div>
                    <article class="uk-article"> <img class="uk-margin-small-top uk-margin-remove-bottom" src="https://home.qcgbrokertw.com/images/( company- aml policy ) layering-01.png" alt="">
                        <h5 class="uk-margin-small-top uk-flex uk-flex-center" style="font-size: 20px;">
                            <div class="uk-text-primary">
                                {{ __('Layering') }}
                            </div>
                        </h5>
                        <p class="uk-text-center">
                            {{ __('Funds are transferred or moved to other accounts and other financial instruments. It is performed to disguise the origin and disrupt the indication of the entity that made the multiple financial transactions. Moving funds around and changing in their form makes it complicated to trace the money being laundered.') }}
                        </p>
                    </article>
                </div>
                <div class="">
                    <article class="uk-article"> <img class="uk-margin-small-top uk-margin-remove-bottom" src="https://home.qcgbrokertw.com/images/( company- aml policy ) intergration-01.png" alt="">
                        <h5 class="uk-margin-small-top uk-flex uk-flex-center" style="font-size: 20px;">
                            <div class="uk-text-primary">
                                {{ __('Integration') }}
                            </div>
                        </h5>
                        <p class="uk-text-center">
                            {{ __('Funds get back into circulation as legitimate to purchase goods and services.') }}
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uk-margin-large-bottom">
    <div class="uk-container">
        <div id="uk-text-center">
            <p class="uk-text-justify"> Quantum Capital Global (QCG) adheres to the principles of Anti-Money Laundering and actively
                            prevents any actions that aim or facilitate the process of legalizing of illegally gained funds.
                            AML policy means preventing the use of the company's services by criminals, with the aim of
                            money laundering, terrorist financing or other criminal activity. <br>

                To prevent money laundering, Quantum Capital Global (QCG) neither accepts nor pays cash under
                            any circumstances. The company reserves the right to suspend any client's operation, which can
                            be regarded as illegal or, may be related to money</p>
        </div>
    </div>
</section>

@endsection