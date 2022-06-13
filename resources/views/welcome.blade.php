<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <title>Mika Meijer | Home</title>
</head>
<body class="bg-stoman">

<nav class="w-full fixed top-0 bg-stoman backdrop-filter backdrop-blur-lg bg-opacity-30 shadow-md">
    <div class="container mx-auto px-2 py-5 flex justify-between text-white flex-row items-center">
        <a class="font-bold text-xl" href="/">Mika Meijer</a>
        <ul class="hidden md:flex space-x-5">
            <li>
                <a href="/">Projects</a>
            </li>ssss
            <li>
                <a href="/">About Me</a>
            </li>
            <li>
                <a href="/">Contact</a>
            </li>
        </ul>
        <button class="bg-cta p-2 h-fit w-fit rounded-md"><a href="">Hire Me</a></button>
    </div>
</nav>


<div class="container mx-auto mt-48">
    <section class="flex flex-col sm:justify-between items-center sm:flex-row mt-8 sm:mt-10 mb-5 sm:mb-8">
        <div class="w-full md:w-1/3 text-white text-left"><h1
                class="font-general-semibold text-3xl md:text-3xl xl:text-4xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase">
                Hi, I am Mika </h1>
            <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400">
                A Full-Stack Developer &amp; Design Enthusiast </p>
            <div class="flex justify-center sm:block"><a download="Mika_Meijer_CV" href="dl/Mika_Meijer_CV.pdf"
                                                         class="flex justify-center items-center w-36 sm:w-48 mt-12 mb-6 sm:mb-0 text-lg border border-indigo-200 dark:border-ternary-dark py-2.5 sm:py-3 shadow-lg rounded-lg bg-indigo-50 focus:ring-1 focus:ring-indigo-900 hover:bg-indigo-500 text-gray-500 hover:text-white duration-500"
                                                         aria-label="Download Resume">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-arrow-down-circle ml-0 sm:ml-1 mr-2 sm:mr-3 w-5 sm:w-6 duration-100">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="8 12 12 16 16 12"></polyline>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                    </svg>
                    <span class="text-sm sm:text-lg font-general-medium duration-100">Download CV</span></a></div>
        </div>
        <div class="w-full md:w-2/3 text-right float-right"><img class="md:w-2/3 float-right md:h-1/3" src="img/dev.svg" alt="Developer"></div>
    </section>
    <section class="pt-10 mt-16 mb-72 sm:pt-14">
        <div class="text-center text-white"><p
                class="font-general-semibold text-2xl mt-72 sm:text-5xl font-semibold mb-2 text-ternary-dark dark:text-ternary-light">
                Projects Portfolio</p></div>
        <div class="mt-10 sm:mt-10 text-white"><h3
                class="font-general-regular text-center text-secondary-dark dark:text-ternary-light text-md sm:text-xl font-normal mb-4">
                Get a quick look through some of my projects. </h3>
            <div class="flex justify-between border-b border-primary-light dark:border-secondary-dark pb-3 gap-2">
                <div class="flex justify-between gap-2">
                </div>
                </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-6 sm:gap-10">
            @foreach($projects as $project)
            <a href="{{$project->link}}" target="_blank" class="rounded-xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark" aria-label="Single Project">


                <div class="text-center py-6 flex flex-col bg-projects rounded-xl text-white mx-3 shadow-xl"><p
                        class="font-general-semibold text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-2">
                    {{$project->title}}</p><span
                        class="font-general-medium text-lg text-ternary-dark dark:text-ternary-light">{{$project->type}}</span>
                    <span
                        class="font-general-medium text-lg text-ternary-dark dark:text-ternary-light">{{$project->language}}</span>
                </div>
            </a>
            @endforeach

        </div>
    </section>
    <div class=" sm:mt-20 flex justify-center"><a href="/projects"
                                                       class="font-general-medium flex items-center px-6 py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-lg sm:text-xl duration-300"
                                                       aria-label="More Projects">
            <button>More Projects</button>
        </a></div>


    <section class="pt-10 mt-16 mb-72 sm:pt-14">
        <div class="text-center text-white"><p
                class="font-general-semibold text-2xl mt-72 sm:text-5xl font-semibold mb-2 text-ternary-dark dark:text-ternary-light">
                Github Projects</p></div>
        <div class="mt-10 sm:mt-10 text-white"><h3
                class="font-general-regular text-center text-secondary-dark dark:text-ternary-light text-md sm:text-xl font-normal mb-4">
                Take a look at my public Github projects. </h3>
            <div class="flex justify-between border-b border-primary-light dark:border-secondary-dark pb-3 gap-2">
                <div class="flex justify-between gap-2">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-6 sm:gap-10">
            @foreach($data as $github)
                @if($github->name === 'Personal-Website')

                @else
                <a href="{{$github->html_url}}" target="_blank" class="rounded-xl shadow-lg hover:shadow-xl cursor-pointer mb-10 sm:mb-0 bg-secondary-light dark:bg-ternary-dark" aria-label="Single Project">
                    <div class="text-center py-6 flex flex-col bg-projects rounded-xl text-white mx-3 shadow-xl"><p
                            class="font-general-semibold text-xl text-ternary-dark dark:text-ternary-light font-semibold mb-2">
                        {{$github->name}}</p>
                        @if($github->language === null)
                            <span
                                class="font-general-medium text-lg text-ternary-dark dark:text-ternary-light">Markdown</span>
                            @else
                        <span
                            class="font-general-medium text-lg text-ternary-dark dark:text-ternary-light">{{$github->language}}</span>
                        @endif
                        <span
                            class="font-general-medium text-lg text-ternary-dark dark:text-ternary-light"></span>

                    </div>
                </a>
                @endif
            @endforeach

        </div>
    </section>
</div>
</body>
</html>
