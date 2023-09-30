<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Downtube</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <div class="content">
        <div class="navbar">
            <div class="left">
                <a href="index.html"><img class="logo" src="{{asset('images/logo.png')}}" alt=""></a>
            </div>

            <div class="right">
                <a class="pt" href="index.html"><img src="{{asset('images/br.png')}}" alt="PT-BR Version"></a>
                <a href="english.html"><img src="{{asset('images/en.png')}}" alt="English version."></a>
            </div>
        </div>

        <div class="title">
            <h1>DownTube</h1>
            <p class="dica">Bem vindo ao Downtube! Informe a URL do vídeo que deseja baixar: </p>
        </div>
        
        <form method="POST" action="" class="container">
            @csrf
        


            <input type="text" class="url" placeholder="Informe a URL do vídeo para efetuar o download"> <span> 
                <button class="download"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7 10 12 15 17 10"/>
                    <line x1="12" y1="15" x2="12" y2="3"/>
                </svg> Download</button></span>
        </form>

        <hr>
        <div class="scope">
            <p>Baixe seus vídeos favoritos do YouTube™</p>
        </div>
        <div class="logoyt">
            <img class="yt" src="{{asset('images/yt.png')}}" alt="">
        </div>
    </div>

    <footer>&copy Downtube todos os direitos reservados </footer>

</body>

</html>