<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Salva Guarda') }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @include('layouts.footer')
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js" type="text/javascript"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script> -->
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/helpers.esm.min.js"></script> --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/helpers.esm.min.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <script>

        var estado=['Pendente','Em Progresso','Abandonado','Concluído'];
        var pendente=0;var progresso=0;var concluido=0; var abandonado=0;
        var classificacao=[];//=[pendente,progresso,concluido,abandonado];

        const dataIndex = data.length;


        for (let i = 0; i < dataIndex; i++) {

            if (data[i].estado.toLowerCase()=='pendente') {
                pendente++;
                console.log("Pendente "+pendente);
            }
            if (data[i].estado.toLowerCase()=='progresso') {
                progresso++;
                console.log("Em Progresso "+progresso);
            }
            if (data[i].estado.toLowerCase()=='concluído') {
                concluido++;
                console.log("Concluído "+concluido);
            }
            if (data[i].estado.toLowerCase()=='abandonado') {
                abandonado++;
                console.log("Abandonado "+abandonado);
            }

        }

        classificacao.push(pendente);
        classificacao.push(progresso);
        classificacao.push(abandonado);
        classificacao.push(concluido);


        var p = document.getElementsByClassName("qtdPendente");
        var chrt = document.getElementById("chartId").getContext("2d");
        var chartId = new Chart(chrt, {
         type: 'bar',
         data: {
            labels: estado,//['Abandonados','Abandonados','Pendente','Pendente'],
            datasets: [{
               label: "Estado dos Projectos",
               data:  classificacao,
               backgroundColor: ['#ccccccaa', '#00aaddaa','#00002faa', '#11ffaaaa' ],
               borderColor: ['#dfcfcf', 'lightgreen', '#003800','#11ddca' ],
            //    backgroundColor: ['yellow', 'blue', 'green','red' , 'red', 'gold'],
            //    borderColor: ['orange', 'lightgreen', 'lightgreen','pink' , 'red', 'black'],
               borderWidth: 2,
            }],
         },
         options: {
            responsive: false,

         },
      });

      var chrt = document.getElementById("chartIdpie").getContext("2d");
        var chartIdpie = new Chart(chrt, {
         type:'pie',
         data: {
            labels: estado,//['Abandonados','Abandonados','Pendente','Pendente'],
            datasets: [{
               label: "Estado dos Projectos",
               data:  classificacao,
               backgroundColor: ['#ccccccaa', '#00aaddaa','#00002faa', '#11ffaaaa' ],
               borderColor: ['#dfcfcf', 'lightgreen', '#003800','#11ddca' ],
               borderWidth: 1,

            }],
         },
         options: {
            responsive: false,

         },
      });
    </script>

    </body>
</html>
