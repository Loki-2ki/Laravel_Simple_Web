<x-auth-layout>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <x-slot name="title">Login</x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background-radial-gradient {
            background: transparent !important;
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#0c6b2a, #2fbd90);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#b9d74b, #e6f913);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(141, 53%, 17%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        .l-form {
            width: 100%;
            margin: 0;
            background: rgb(255, 255, 255);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            padding: 2rem 3rem;
        }

        @media (max-width: 767.98px) {
            .l-form {
                padding: 1.5rem 1.5rem;
            }
        }

        .form__title {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #198754;
            font-weight: bold;
        }

        .form__div {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form__input {
            width: 100%;
            padding: 0.75rem 0.5rem;
            border: 1px solid #198754;
            border-radius: 8px;
            outline: none;
            background: transparent;
            font-size: 1rem;
            transition: border-color 0.2s;
            color: #000000
        }

        .form__input:focus {
            border-color: #145c32;
        }

        .form__label {
            position: absolute;
            left: 0.75rem;
            top: 0.75rem;
            color: #105234;
            pointer-events: none;
            transition: 0.2s;
            /* background: rgba(255,255,255,0.95); */
            padding: 0 0.25rem;
        }

        .form__input:focus+.form__label,
        .form__input:not(:placeholder-shown)+.form__label {
            top: -0.9rem;
            left: 0.5rem;
            font-size: 0.85rem;
            color: #145c32;
            background: #fff;
        }

        .form__button {
            width: 100%;
            padding: 0.75rem;
            background: #0e613a;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .form__button:hover {
            background: #145c32;
        }

        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #000;

        }

        p.fw-bold.fs-4.mb-3 {
            text-align: center;
            font-size: 50px !important;
            font-weight: bold;
            letter-spacing: 2px;
            color: #10402a;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        span {
            color: #000
        }
    </style>


    <iframe src="{{ route('background') }}" id="bg-iframe"
        style="position:fixed; top:0; left:0; width:100vw; height:100vh; z-index:0; border:none; pointer-events:none; filter: blur(12px) brightness(0.7);"></iframe>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10"></div>
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-lg"></div>
                <div id="radius-shape-2" class="position-absolute shadow-lg"></div>
                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <div class="l-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h1 class="form__title">WELCOME TO IT CLUB!</h1><br>

                                <div class="form__div">
                                    <input type="text" name="name" class="form__input" placeholder=" "
                                        value="{{ old('name') }}" required>
                                    <label class="form__label">Name</label>
                                    <x-input-error :messages="$errors->get('name')" />
                                </div>

                                <div class="form__div">
                                    <input type="email" name="email" class="form__input" placeholder=" "
                                        value="{{ old('email') }}" required>
                                    <label class="form__label">Email</label>
                                    <x-input-error :messages="$errors->get('email')" />
                                </div>

                                <div class="form__div">
                                    <input type="password" name="password" class="form__input" placeholder=" " required>
                                    <label class="form__label">Password</label>
                                    <x-input-error :messages="$errors->get('password')" />
                                </div>

                                <div class="form__div">
                                    <input type="password" name="password_confirmation" class="form__input"
                                        placeholder=" " required>
                                    <label class="form__label">Confirm Password</label>
                                </div>

                                <br>
                                <input type="submit" class="form__button" value="Register">

                                <div class="text-center mt-3">
                                    <span>Already have an account?</span>
                                    <a href="/login" class="link-success text-decoration-underline ms-1">LoginNow!</a>
                                </div>
                            </form> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
