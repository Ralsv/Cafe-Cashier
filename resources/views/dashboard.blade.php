<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .button1 {
            position: relative;
            display: inline-block;
            margin: 5px;
            padding: 6px 100px;
            text-align: center;
            font-size: 20px;
            letter-spacing: 1px;
            text-decoration: none;
            color: white;
            background: #884A39;
            cursor: pointer;
            transition: ease-out 0.5s;
            border: 2px solid #884A39;
            border-radius: 8px;
            box-shadow: inset 0 0 0 0 #884A39;
            }

            .button1:hover {
            color: white;
            box-shadow: inset 0 -100px 0 0 #67301f;
            }

            .button1:active {
            transform: scale(0.9);
            }

            .card {
                background-color: #F9E0BB;
            }
    </style>
<x-guest-layout>  

    <div class="py-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h1>Welcome To Cashier App</h1>
                    
                    <br>
                    <a href="{{ route('home') }}"><button class="button1">Start</button></a>
                </div>
            </div>
        </div>
    </div>
</div>   
</x-guest-layout>