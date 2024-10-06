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
<div class="mb-4" style="width: 50%; height: 50%; margin: 0 auto;">
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-lg p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
            <!-- Título do formulário -->
            <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-6">Import Excel File</h2>
            
            <p class="text-gray-700 dark:text-gray-300 mb-4">
                Discover Our Exciting New Project! We are thrilled to present our latest initiative, a groundbreaking platform designed to revolutionize the way you [describe the main purpose of your project]. 
            </p>
    
            <p class="text-gray-700 dark:text-gray-300 mb-4">
                With cutting-edge features and a user-friendly interface, this project will allow you to [list key benefits or innovations]. Whether you are a [target audience], or simply someone looking for a fresh experience, our project offers something for everyone!
            </p>
    
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-6">Key highlights include:</h3>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-4">
                <li>[Feature 1]: Offering a new way to [describe feature].</li>
                <li>[Feature 2]: Bringing unmatched [describe advantage or benefit].</li>
                <li>[Feature 3]: Designed to [solve a specific problem or provide a unique solution].</li>
            </ul>
    
            <p class="text-gray-700 dark:text-gray-300 mb-4">
                Join us as we push the boundaries of [related field], giving you the tools to [improve, innovate, enjoy]. We’re looking for excited users and early testers to explore and provide valuable feedback. Be part of something innovative, and help shape the future with us.
            </p>
            <div class="text-center mt-6"> <!-- Adiciona centralização e margem superior -->
                <a class="btn btn-primary" href="{{ route('index') }}" role="button">Explore</a>
            </div>
            
            <br>
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
