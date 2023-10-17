<!DOCTYPE html>
<html lang="es">
    <x-header_login></x-header_login>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <br><br><br>
          <section class="sign-in">
            <div class="containerb">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('assets/img/signin-image.jpg') }}" alt="sing up image"></figure>
                        <a href="/register" class="signup-image-link"><br><strong> Crear una cuenta</strong></a>
                    </div>
                        <div class="signin-form">
                            <h2 class="form-title">Iniciar sesión</h2>
                            <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" value="{{ __('Email') }}"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input id="email" type="email" name="email" placeholder="Password" :value="old('email')" required autofocus autocomplete="username" />
                                </div>
                                <div class="form-group">
                                    <label for="password" value="{{ __('Password') }}" class="form-label"><i class="zmdi zmdi-lock"></i> </label>
                                    <input id="password" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>{{ __('Remember me') }}</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember" id="remember-me" class="agree-term" />
                                    <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                                </div>
                                <x-validation-errors />
                                @if (session('status'))
                                    <div style="color:#CE1212">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="form-group form-button">
                                    <button type="submit" class="form-submit btn btn-primary">{{ __('Iniciar sesión') }}</button>
                                </div>
                                <div class="form-group">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

    <!-- Template Main JS File -->
    <link href="{{ asset('assets/js/main2.js') }}">
   

</html>
