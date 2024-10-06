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
            <br>
            <!-- Título do formulário -->
            <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-6">Import Excel File</h2>
            <br>
            <br>
            <br>

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Exibir mensagem de sucesso -->
                @if(Session::has('success'))
                <div class="alert alert-success mb-4 text-center" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif

                <!-- Exibir mensagem de erro -->
                @if(Session::has('error'))
                <div class="alert alert-danger mb-4 text-center" role="alert">
                    {{ Session::get('error') }}
                </div>
                @endif

                <!-- Campo de arquivo Excel -->
                <div class="mb-6" style="width: 50%; height: 50%; margin: 0 auto">
                    <label for="arquivo_excel" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Select the Excel file</label>
                    <input type="file" name="arquivo_excel" id="arquivo_excel" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" required>
                </div>
                <br>
                <!-- Botão de envio com animação de carregamento -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary relative" style="color: white; background-color: #007bff;">
                        <span class="spinner hidden animate-spin inline-block w-4 h-4 border-2 border-t-2 border-white border-t-transparent rounded-full mr-2"></span>
                        Import Excel
                    </button>
                </div>
            </form>
            <br>
            <br>
            <br>
            <br>
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
