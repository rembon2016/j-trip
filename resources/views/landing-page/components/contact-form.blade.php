
<figure id="contact" class="section no-top-padding contact">
    <div class="grid-wrapper">
        <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41400e-1fc93e1d" class="about-us-intro">
            <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41400f-1fc93e1d" class="subtitle">Fill out the form below</div>
            <div class="contact-form-wrapper">
                <div bind="ccba9afc-7ce3-ac68-817c-f6071c414012" class="form-block w-form">
                    <form action="{{ route("landing-page.customer-feedback.store") }}" id="email-form" name="email-form" data-name="Email Form" method="post" class="form" data-wf-page-id="65af9bd818d9ae9f1fc93e1d" data-wf-element-id="ccba9afc-7ce3-ac68-817c-f6071c414013">
                        @csrf
                        <div class="contact-fields">
                            <div class="contact-field-wrapper">
                                <label for="name" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414016-1fc93e1d" class="field-label">Name</label>
                                <input class="text-field w-input" maxlength="255" name="first_name" data-name="Name" placeholder="First name" type="text" id="name" required>
                                <input class="text-field w-input" maxlength="255" name="last_name" data-name="Name 2" placeholder="Last name" type="text" id="name-2" required>
                            </div>
                            <div class="contact-field-wrapper">
                                <label for="email" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41401b-1fc93e1d" class="field-label">Email</label>
                                <input class="text-field w-node-ccba9afc-7ce3-ac68-817c-f6071c41401d-1fc93e1d w-input" maxlength="255" name="email" data-name="Name 3" placeholder="Your email" type="email" id="name-3" required>
                            </div>
                            <div class="contact-field-wrapper">
                                <label for="Phone-number" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41401f-1fc93e1d" class="field-label">Phone</label>
                                <input class="text-field w-node-ccba9afc-7ce3-ac68-817c-f6071c414021-1fc93e1d w-input" maxlength="25" name="phone" data-name="Phone Number" placeholder="08xx-xxxx-xxxx" type="tel" id="Phone-number" required>
                            </div>
                            <div class="contact-field-wrapper">
                                <label for="field" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414023-1fc93e1d" class="field-label">Jumlah Peserta</label>
                                <select id="field" name="total_participant" data-name="Field" class="text-field w-node-ccba9afc-7ce3-ac68-817c-f6071c414025-1fc93e1d w-select" required>
                                    <option value="">Pilih Jumlah Peserta</option>
                                    @foreach (\App\Models\CustomerFeedback::PARTICIPANTS as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="contact-field-wrapper">
                                <label for="field-2" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414027-1fc93e1d" class="field-label">Pilih Produk</label>
                                <select id="field-2" name="tour_id" data-name="Field 2" class="text-field w-node-ccba9afc-7ce3-ac68-817c-f6071c414029-1fc93e1d w-select" required>
                                    <option value="">Pilih Produk</option>
                                    @foreach ($availableTours as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="contact-field-wrapper">
                                <label for="field-3" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41402b-1fc93e1d" class="field-label">Bulan Keberangkatan</label>
                                <select id="field-3" name="departure_month" data-name="Field 2" class="text-field w-node-ccba9afc-7ce3-ac68-817c-f6071c41402d-1fc93e1d w-select" required>
                                    <option value="">Pilih Bulan Keberangkatan</option>
                                    @foreach (\App\Constants\Month::LIST_OF_MONTHS as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="contact-field-wrapper">
                                <label for="Message" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41402f-1fc93e1d" class="field-label">Message</label>
                                <textarea placeholder="Your message" maxlength="5000" id="Message" name="message" data-name="Message" class="text-field large w-node-ccba9afc-7ce3-ac68-817c-f6071c414031-1fc93e1d w-input" required></textarea>
                            </div>
                        </div>
                        <input type="submit" data-wait="Please wait..." id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414032-1fc93e1d" class="submit-button w-button" value="Kirim Permintaan">
                    </form>

                    <div class="success-message w-form-done">
                        <div class="success-message-content">
                            <h3>Thank you!</h3>
                            <div>Your message has been received.</div>
                        </div>
                    </div>

                    <div class="error-state w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>

                <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41403c-1fc93e1d" class="contact-quick-links">
                    <div class="quick-links">
                        <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41403e-1fc93e1d" class="subtitle-intro-wrapper">
                            <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41403f-1fc93e1d" class="subtitle black">Quick links</div>
                            <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414041-1fc93e1d" class="horizontal-line"></div>
                        </div>
                        <div class="quick-link-list">
                            <a href="{{ route('landing-page.redirect-wa') }}" target="_blank" class="quick-link-item w-inline-block">
                                <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414044-1fc93e1d">Whatsapp Us</div>
                                <img src="{{ asset('assets/landing-page/images/icons8-whatsapp.svg') }}" loading="lazy" width="25" id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414046-1fc93e1d" alt="">
                            </a>
                            <a href="mailto:{{ $setting?->email }}" class="quick-link-item w-inline-block">
                                <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c414048-1fc93e1d">{{ $setting?->email }}</div>
                                <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41404a-1fc93e1d" class="card-arrow-icon dark">
                                    <img src="{{ asset('assets/landing-page/images/arrowhead-right-icon-dark001.svg') }}" loading="lazy" alt="" class="vacation-card-arrow">
                                </div>
                            </a>
                            <a href="tel:+{{ $setting?->phone }}" class="quick-link-item w-inline-block">
                                <div id="w-node-ccba9afc-7ce3-ac68-817c-f6071c41404d-1fc93e1d">+{{ $setting?->phone }}</div>
                                <div class="card-arrow-icon dark">
                                    <img src="{{ asset('assets/landing-page/images/arrowhead-right-icon-dark001.svg') }}" loading="lazy" alt="" class="vacation-card-arrow">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</figure>