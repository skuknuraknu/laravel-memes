<head>
    <title>Meme-Ku | Auth</title>
</head>
@include("auth.css")

<h2>LOGIN KE APLIKASI MEME</h2>
@if ($errors)
    <h5 class="bg-danger px-4 py-1 text-white rounded mb-2 {{ $errors->all() ? 'visible' : 'invisible' }}">{{ $errors->first() }}</h5>
@endif
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="{{ route('signup.process') }}" method="post">
            @csrf
            <h1>Buat Akun</h1>
            <input value="{{ old('username') }}" type="text" name="username" placeholder="Nama anda..." />
            <input value="{{ old('email') }}"  type="email" name="email" placeholder="Email anda..." />
            <input type="password" name="password" placeholder="Password anda..." />
            <button type="submit">DAFTAR</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="{{ route('signin.process') }}" method="post">
            @csrf   
            <h1>LOGIN</h1>
           <input value="{{ old('email') }}" type="email" name="email" placeholder="Email" />
            <input type="password"  name="password" placeholder="Password" />
            <button>LOGIN</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Selamat datang kembali!</h1>
                <button class="ghost" id="signIn">LOGIN</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Selamat Datang!</h1>
                <button class="ghost" id="signUp">DAFTAR</button>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>
       <a href="#">Kelompok 6 - SOLID SOLID SOLID !</a>
    </p>
</footer>
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
</script>