<dialog
    id="signin-dialog"
    aria-labelledby="signin-title"
    aria-describedby="signin-description"
    class="m-auto max-h-[calc(100dvh-2rem)] w-[calc(100%-2rem)] max-w-[600px] overflow-hidden rounded-3xl border border-[#DFD2C1] bg-[#F7F3EC] p-0 text-[#352820] shadow-2xl backdrop:bg-black/60"
>
    <div class="max-h-[calc(100dvh-2rem)] overflow-y-auto overscroll-contain p-6 sm:p-8">
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-[#315B50]">
                    Hometown Cafe
                </p>

                <h2
                    id="signin-title"
                    class="mt-3 font-serif text-3xl leading-tight"
                >
                    Welcome to Hometown.
                </h2>
            </div>

            <button
                type="button"
                data-close-signin
                aria-label="Close sign in"
                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#DFD2C1] bg-[#FCFAF6] transition-colors hover:bg-[#E8DDCE] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#315B50]"
            >
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    class="h-5 w-5"
                    aria-hidden="true"
                >
                    <path d="m6 6 12 12M18 6 6 18" />
                </svg>
            </button>
        </div>

        <p
            id="signin-description"
            class="mt-3 text-sm leading-6 text-[#66584B]"
        >
            Sign in to explore your next Hometown coffee break.
        </p>

        <div id="signin-entry">
            

            <form id="signin-form" method="dialog" class="mt-5">
                <div>
                    <label
                        for="signin-email"
                        class="block text-sm font-medium"
                    >
                        Email
                    </label>

                    <input
                        id="signin-email"
                        type="email"
                        placeholder="Enter your email"
                        required
                        maxlength="254"
                        autocomplete="off"
                        spellcheck="false"
                        autofocus
                        class="mt-2 h-12 w-full rounded-xl border border-[#CDBEAC] bg-[#FCFAF6] px-4 text-base outline-none focus:border-[#315B50] focus:ring-2 focus:ring-[#315B50]/20"
                    >
                </div>

                <div class="mt-4">
                    <label
                        for="signin-password"
                        class="block text-sm font-medium"
                    >
                        Password
                    </label>

                    <input
                        id="signin-password"
                        type="password"
                        placeholder="Enter your password"
                        required
                        maxlength="100"
                        autocomplete="off"
                        class="mt-2 h-12 w-full rounded-xl border border-[#CDBEAC] bg-[#FCFAF6] px-4 text-base outline-none focus:border-[#315B50] focus:ring-2 focus:ring-[#315B50]/20"
                    >
                </div>

                <p
                    id="signin-error"
                    role="alert"
                    class="mt-4 text-sm leading-6 text-[#9B3028]"
                    hidden
                ></p>

                <x-button type="submit" class="mt-5 w-full">
                    Sign In
                    <span aria-hidden="true">&rarr;</span>
                </x-button>
            </form>
        </div>

        <div id="signin-success" hidden>
            <div class="mt-6 rounded-2xl border border-[#DFD2C1] bg-[#EDE4D8] p-5 sm:p-6">
                <div class="flex items-start gap-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-[#24483F] text-[#F7F3EC]">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <path d="m5 12 4 4L19 6" />
                        </svg>
                    </div>

                    <div>
                        <h3
                            id="signin-success-heading"
                            tabindex="-1"
                            class="font-serif text-2xl leading-tight focus:outline-none"
                        >
                            Welcome to Hometown.
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-[#66584B]">
                            Discover featured drinks and plan your next cafe visit.
                        </p>
                    </div>
                </div>
            </div>

            <x-button
                href="#showcase"
                id="signin-view-showcase"
                class="mt-6 w-full"
            >
                Explore Hometown
                <span aria-hidden="true">&rarr;</span>
            </x-button>

            <button
                type="button"
                data-close-signin
                class="mt-3 min-h-11 w-full rounded-full px-4 py-2 text-sm text-[#66584B] hover:bg-[#E8DDCE]"
            >
                Continue Browsing
            </button>
        </div>
    </div>
</dialog>

@once
    @push('scripts')
        <script>
            (() => {
                const dialog = document.getElementById('signin-dialog');
                const form = document.getElementById('signin-form');
                const entry = document.getElementById('signin-entry');
                const success = document.getElementById('signin-success');
                const email = document.getElementById('signin-email');
                const password = document.getElementById('signin-password');
                const error = document.getElementById('signin-error');
                const previewLink = document.getElementById('signin-view-showcase');
                const successHeading = document.getElementById('signin-success-heading');

                if (!dialog || !form) {
                    return;
                }

                function clearError() {
                    error.hidden = true;
                    error.textContent = '';

                    [email, password].forEach((input) => {
                        input.removeAttribute('aria-invalid');
                        input.removeAttribute('aria-describedby');
                    });
                }

                function resetPreview() {
                    form.reset();
                    entry.hidden = false;
                    success.hidden = true;
                    clearError();
                }

                document.querySelectorAll('[data-open-signin]').forEach((button) => {
                    button.addEventListener('click', () => {
                        const mobileMenu = button.closest('[data-mobile-nav]');

                        if (mobileMenu) {
                            mobileMenu.open = false;
                        }

                        resetPreview();

                        if (!dialog.open) {
                            dialog.showModal();
                        }
                    });
                });

                dialog.querySelectorAll('[data-close-signin]').forEach((button) => {
                    button.addEventListener('click', () => {
                        dialog.close();
                    });
                });

                [email, password].forEach((input) => {
                    input.addEventListener('input', clearError);
                });

                form.addEventListener('submit', (event) => {
                    event.preventDefault();
                    clearError();

                    const emailMatches =
                        email.value.trim().toLowerCase() === 'guest@hometown.test';

                    const passwordMatches =
                        password.value === 'hometown-demo';

                    if (!emailMatches || !passwordMatches) {
                        error.textContent =
                            'The email or password is incorrect.';

                        error.hidden = false;

                        if (!emailMatches) {
                            email.setAttribute('aria-invalid', 'true');
                            email.setAttribute('aria-describedby', 'signin-error');
                        }

                        if (!passwordMatches) {
                            password.setAttribute('aria-invalid', 'true');
                            password.setAttribute('aria-describedby', 'signin-error');
                        }

                        (emailMatches ? password : email).focus();
                        return;
                    }

                    entry.hidden = true;
                    success.hidden = false;
                    successHeading.focus();
                });

                previewLink.addEventListener('click', () => {
                    dialog.close();
                });

                dialog.addEventListener('close', resetPreview);

                document.querySelectorAll('[data-mobile-nav] a[href^="#"]').forEach((link) => {
                    link.addEventListener('click', () => {
                        const mobileMenu = link.closest('[data-mobile-nav]');

                        if (mobileMenu) {
                            mobileMenu.open = false;
                        }
                    });
                });
            })();
        </script>
    @endpush
@endonce