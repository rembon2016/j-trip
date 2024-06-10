
<div bind="f6cb7662-2e8e-b732-31c0-1f9a59d49f91" class="footer">
    <div class="grid-wrapper">
        <div id="w-node-f6cb7662-2e8e-b732-31c0-1f9a59d49f93-59d49f91" class="horizontal-line left"></div>

        <div id="w-node-_0313ac4f-0baf-452b-a290-5f7efbd43f5a-59d49f91" class="footer-wrapper">
            <div class="rl_footer3_left-wrapper">
                <a href="#" class="rl_footer3_logo-link w-nav-brand"><img src="{{ asset('assets/landing-page/images/J-Tripロゴ.svg') }}" loading="lazy" width="100" alt=""></a>
                <div class="rl_footer3_spacing-block-1"></div>
                <div class="rl_footer3_text">Address</div>
                <div class="rl-text-style-small">
                    {{ $setting?->address ?? '-' }}
                </div>
                <div class="rl_footer3_spacing-block-2"></div>
                <div class="rl_footer3_text">Contact</div>
                <a href="tel:+{{ $setting?->phone }}" class="rl-text-style-small">
                    +{{ $setting?->phone }}<br>
                </a>
                <a href="mailto:{{ $setting?->email }}" class="rl-text-style-small">{{ $setting?->email }}<br></a>
            </div>

            <div id="w-node-_2021dbe6-3066-ab2b-d9b3-82f2659c2ebe-59d49f91" class="footer-logo">
                <div id="w-node-d8eb6401-e01b-7668-75ac-322d0c5697d4-59d49f91" class="footer-pages">
                    <div class="footer-destination-text">
                        <div class="footer-theme putih">Follow Us</div>
                    </div>
                    <div class="social-sidebar-icons horizontal">
                        <a href="{{ $setting?->instagram_url }}" target="_blank" class="sidebar-icon footer-social w-inline-block"><img src="{{ asset('assets/landing-page/images/covilla-instagram.svg') }}" loading="lazy" alt=""></a>
                        <a href="{{ $setting?->facebook_url }}" target="_blank" class="sidebar-icon footer-social w-inline-block"><img src="{{ asset('assets/landing-page/images/covilla-facebook-f.svg') }}" loading="lazy" alt=""></a>
                        <a href="{{ $setting?->tiktok_url }}" target="_blank" class="sidebar-icon footer-social w-inline-block"><img src="{{ asset('assets/landing-page/images/icons8-tiktok-50.png') }}" loading="lazy" alt=""></a>
                    </div>
                </div>
            </div>

            <div id="w-node-_8d4df87d-6398-2a7c-b022-fd9ce6e378d0-59d49f91" class="footer-logo" style="align-self: start;">
                <div id="w-node-_8d4df87d-6398-2a7c-b022-fd9ce6e378d1-59d49f91" class="footer-pages">
                    <div class="footer-destination-text">
                        <div class="footer-theme putih">Destinations</div>
                    </div>

                    <div bind="8d4df87d-6398-2a7c-b022-fd9ce6e378d5" class="w-dyn-list">
                        @if ($pinDestinations->count() > 0)
                            <div bind="8d4df87d-6398-2a7c-b022-fd9ce6e378d6" role="list" class="footer-destinations w-dyn-items">
                                @foreach ($pinDestinations as $destination)
                                    <div bind="8d4df87d-6398-2a7c-b022-fd9ce6e378d7" role="listitem" class="w-dyn-item">
                                        <a bind="8d4df87d-6398-2a7c-b022-fd9ce6e378d8" data-w-id="8d4df87d-6398-2a7c-b022-fd9ce6e378d8" href="{{ route('landing-page.destination.detail', $destination->slug) }}" class="footer-link w-inline-block">
                                            <div bind="8d4df87d-6398-2a7c-b022-fd9ce6e378d9" class="link-text">{{ $destination->title }}</div>
                                            <div class="link-cover"></div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div bind="8d4df87d-6398-2a7c-b022-fd9ce6e378db" class="w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div id="w-node-dfd23af6-828d-947c-849f-db9f9e2ea42e-59d49f91" class="credit-text">© 2023 Jtrip</div>
        </div>
    </div>
</div>