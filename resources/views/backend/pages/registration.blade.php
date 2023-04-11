<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Register - Rubick - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    @include('backend.layouts.style')
    @push('css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @endpush
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Rubick Tailwind HTML Admin Template" class="w-6"
                     src="{{ asset('dist/images/logo.svg') }}">
                <span class="text-white text-lg ml-3"> Rubick </span>
            </a>
            <div class="my-auto">
                <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                     src="{{ asset('dist/images/illustration.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to
                    <br>
                    sign up to your account.
                </div>
                <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your
                    e-commerce accounts in one place
                </div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign Up
                </h2>
                <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks
                    to
                    sign in to your account. Manage all your e-commerce accounts in one place
                </div>
                <div class="intro-x mt-8">
                    <form action="{{ route('registerVal') }}" method="post">
                        @csrf
                        <input type="text" name="name"
                               class="intro-x login__input form-control py-3 px-4 block" placeholder="Full Name">
                        <input type="text" name="email"
                               class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email">
                        <input type="password" id="password" name="password"
                               class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password"
                               required>
                        <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                            <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                        </div>
                        <a href="" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">What is a
                            secure
                            password?</a>
                        <input type="password" id="confirm-password" name="password_confirmation"
                               class="intro-x login__input form-control py-3 px-4 block mt-4"
                               placeholder="Password Confirmation" required onkeyup="checkPassword()">
                        <br>
                        <span id="password-error" style="color:red"></span>
                        <br>
                </div>
                <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                    <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                    <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                    <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button type="submit"
                            class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register
                    </button>
                    </form>
                    <a href="{{ route('login') }}">
                        <button
                            class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign
                            in
                        </button>
                    </a>
                </div>

            </div>
        </div>
        <!-- END: Register Form -->
    </div>
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="login-dark-register.html"
     class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
@include('backend.layouts.scripts')
{{-- Check Password with Confirm Password --}}
<script>
    function checkPassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm-password").value;
        if (password != confirmPassword) {
            document.getElementById("password-error").innerHTML = "Passwords do not match";
        } else {
            document.getElementById("password-error").innerHTML = "<span style='color: green;'>Password Matched</span>";
        }
    }
</script>
{{-- Check Password Strength with bar --}}
<script>
    const passwordInput = document.getElementById('password');
    const strengthIndicators = document.querySelectorAll('.intro-x .col-span-3');

    passwordInput.addEventListener('input', updatePasswordStrength);

    function updatePasswordStrength() {
        const password = passwordInput.value;
        const strength = getPasswordStrength(password);

        // update the password strength indicators based on the strength
        for (let i = 0; i < strengthIndicators.length; i++) {
            if (i < strength) {
                strengthIndicators[i].classList.add('bg-success');
                strengthIndicators[i].classList.remove('bg-slate-100', 'dark:bg-darkmode-800');
            } else {
                strengthIndicators[i].classList.remove('bg-success');
                strengthIndicators[i].classList.add('bg-slate-100', 'dark:bg-darkmode-800');
            }
        }
    }

    function getPasswordStrength(password) {
        let strength = 0;

        // add points for password length and complexity
        if (password.length >= 8) strength++;
        if (password.match(/[a-z]/)) strength++;
        if (password.match(/[A-Z]/)) strength++;
        if (password.match(/[0-9]/)) strength++;
        if (password.match(/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?~]/)) strength++;

        return strength;
    }
</script>


<!-- END: JS Assets-->
</body>

</html>
