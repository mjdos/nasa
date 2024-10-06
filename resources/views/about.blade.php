@include('layouts.header')








<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('about') }}">CodeCreators</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>

        </ul>
    </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="mb-4" style="width: 50%; height: auto; margin: 0 auto;">
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-lg p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
            <br>
            <!-- Cartões dos responsáveis -->
            <h3 class="text-xl font-bold text-center text-gray-900 dark:text-white mt-6">Meet the Team</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                    <img src="path/to/alice.jpg" alt="Alice Smith" class="w-24 h-24 rounded-full mx-auto mb-4"> <!-- Foto de Alice -->
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Alice Smith</h4>
                    <p class="text-gray-700 dark:text-gray-300">Project Manager</p>
                    <p class="mt-2">Alice leads the team with her exceptional management skills and ensures that everything runs smoothly.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                    <img src="path/to/bob.jpg" alt="Bob Johnson" class="w-24 h-24 rounded-full mx-auto mb-4"> <!-- Foto de Bob -->
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Bob Johnson</h4>
                    <p class="text-gray-700 dark:text-gray-300">Lead Developer</p>
                    <p class="mt-2">Bob is the genius behind the code, turning ideas into reality with his extensive programming expertise.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                    <img src="path/to/charlie.jpg" alt="Charlie Brown" class="w-24 h-24 rounded-full mx-auto mb-4"> <!-- Foto de Charlie -->
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Charlie Brown</h4>
                    <p class="text-gray-700 dark:text-gray-300">UI/UX Designer</p>
                    <p class="mt-2">Charlie creates intuitive designs that enhance user experience, ensuring that our platform is user-friendly.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Script para animação de carregamento -->
<script>
    document.querySelector('form').addEventListener('submit', function() {
        document.querySelector('.spinner').classList.remove('hidden');
    });

</script>


@include('layouts.footer')
