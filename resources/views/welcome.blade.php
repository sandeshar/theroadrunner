<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <title>The Road Runner Pvt. Ltd</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Roboto font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
        <!-- Tailwind Elements styles-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <!-- Tailwind CSS config -->
        <script src="https://cdn.tailwindcss.com/3.3.0"></script>
        <script>
        tailwind.config = {
        darkMode: "class",
        theme: {
        fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],
        },
        },
        corePlugins: {
        preflight: false,
        },
        };
        </script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="relative flex w-full flex-nowrap items-center justify-between bg-black py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 lg:flex-wrap lg:justify-start lg:py-4"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div class="mx-2">
                    <a class="text-xl text-neutral-100" href="{{ route('gallery.index') }}">
                        <img src="logo.png" alt="" class="h-14">
                    </a>
                </div>
                <!-- Hamburger button for mobile view -->
                <button
                class="block border-0 bg-transparent px-2 text-neutral-300 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContent10"
                aria-controls="navbarSupportedContent10" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                        </svg>
                    </span>
                    </button>
                    <!-- Collapsible navbar container -->
                    <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
                        id="navbarSupportedContent10" data-te-collapse-item>
                        <!-- Left links -->
                        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 md:flex-row md:ml-auto md:mr-0"
                            data-te-navbar-nav-ref>
                            <!-- Home link -->
                            <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                                <a class="text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200"
                                aria-current="page" href="#home" data-te-nav-link-ref>Home</a>
                            </li>
                            <!-- Services link -->
                            <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref>
                                <a class="p-0 text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200"
                                href="#services" data-te-nav-link-ref>Services</a>
                            </li>
                            <!--About link -->
                            <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref>
                                <a class="p-0 text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200"
                                href="#about" data-te-nav-link-ref>About</a>
                            </li>
                            <!-- GAllery link -->
                            <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref>
                                <a class="p-0 text-neutral-300 transition duration-200 hover:text-neutral-200 hover:ease-in-out focus:text-neutral-200 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90 [&.active]:text-neutral-200"
                                href="#gallery" data-te-nav-link-ref>Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header -->
            <header class="bg-[url('header.jpg')] bg-center bg-cover sm:bg-fixed" id="home">
                <div class="text-white py-40 px-5 text-center bg-black space-y-5 bg-opacity-75">
                    <h1 class="font-bold mx-auto text-3xl sm:text-4xl lg:text-5xl">BIKE REPAIR<br>AND MAINTENANCE SERVICE
                    </h1>
                    <hr class="w-20 border-2 border-red-400 mx-auto">
                    <div class="text-center">
                        <p class="sont-semibold text-base bg-red-500 rounded p-2 w-fit mx-auto">All kind of Motorbike Spare Parts, Accessories & Repair Service</p>
                    </div>
                    
                </div>
            </header>
            <!-- Below Header -->
            <div class="sm:flex sm:justify-around py-10 px-20 bg-slate-200 space-y-8 sm:space-y-0">
                <div class="flex space-x-4 sm:space-x-5 items-center">
                    <img src="time.png" alt="Time">
                    <span class="text-slate-700 text-base sm:text-sm">
                        <p>Sun : Opened</p>
                        <p>Sat : Closed</p>
                    </span>
                </div>
                <div class="flex space-x-4 sm:space-x-5 items-center">
                    <img src="map.png" alt="Time">
                    <span class="text-slate-700 text-base sm:text-sm">
                        <p>Kathmandu Metro-32</p>
                        <p>Koteshwor</p>
                    </span>
                </div>
                <div class="flex justify space-x-4 sm:space-x-5 items-center">
                    <img src="call.png" alt="Time">
                    <span class="text-slate-700 text-base sm:text-sm">
                        <p>9860437398</p>
                        <p>9849659324</p>
                    </span>
                </div>
            </div>
            <!-- Advantages of our Service -->
            <div class="py-20 px-5 sm:px-20">
                <p
                    class="text-uppercase text-center text-xl md:text-2xl lg:text-3xl tracking-widest uppercase font-mono font-bold text-gray-600 ">
                    Advantages of
                our Service</p>
                <hr class="border-red-400 mx-auto w-20 border-2 my-4">
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 mt-10 sm:mt-16 gap-y-5 gap-x-2">
                    <div class="text-center p-5">
                        <img src="setting.png" class="mx-auto">
                        <h5 class="text-base my-4 sm:my-8 sm:mb-4 tracking-wider">QUALITATIVE BIKE PARTS</h5>
                        <p class="text-sm text-gray-500 tracking-wide">All the BIKE parts and details we have in stock were
                            purchased from the
                        most trustworthy dealers and manufacturers.</p>
                    </div>
                    <div class="text-center p-5">
                        <img src="chat.png" class="mx-auto">
                        <h5 class="text-base my-4 sm:my-8 sm:mb-4 tracking-wider">SEASONED TEAM</h5>
                        <p class="text-sm text-gray-500 tracking-wide">When it comes to repairing or doing checkups on your
                            BIKE’s mechanics,
                        all our team combined has almost a century of practical experience.</p>
                    </div>
                    <div class="text-center p-5">
                        <img src="service24.png" class="mx-auto">
                        <h5 class="text-base my-4 sm:my-8 sm:mb-4 tracking-wider">CUSTOMER SERVICE</h5>
                        <p class="text-sm text-gray-500 tracking-wide">We value the service we provide and our loyal returning
                            customers can
                        always expect some appreciation from us.</p>
                    </div>
                    <div class="text-center p-5">
                        <img src="prices.png" class="mx-auto">
                        <h5 class="text-base my-4 sm:my-8 sm:mb-4 tracking-wider">AFFORDABLE PRICES</h5>
                        <p class="text-sm text-gray-500 tracking-wide">We aim to make our service as reasonably priced as
                            possible. That’s why
                        we cut all unessential business expenses…</p>
                    </div>
                </div>
            </div>
            <!-- Discount -->
            <div class="bg-[url('repairing.jpg')] bg-center bg-cover sm:bg-fixed">
                <div class="py-40 px-5 sm:px-20 bg-black bg-opacity-75 text-center text-white">
                    <p class="text-uppercase text-center text-xl sm:text-2xl md:text-3xl tracking-widest uppercase font-bold">
                    GET YOUR DISCOUNT ON ANY SERVICE TODAY!</p>
                    <hr class="border-red-400 mx-auto w-20 border-2 my-5">
                    <p class="sont-semibold text-base mx-auto pb-4 sm:w-2/3 font-thin">A newcomer ? Welcome to our BIKE
                    SERVICING ! Every problems on dirt bike as well as motorbike solutions here.</p>
                    <a href=""
                    class="px-6 py-2 sm:px-14 lg:px-18 lg:py-3 bg-red-500 font-semibold rounded-lg hover:bg-gray-600 duration-300">Contact</a>
                </div>
            </div>
            <!-- Services -->
            <div class="py-20 px-5 sm:px-20" id="services">
                <p class="text-uppercase text-center text-2xl md:text-3xl tracking-widest uppercase font-mono font-bold text-gray-600 ">
                    Our Services
                </p>
                <hr class="border-red-400 mx-auto w-20 border-2 my-4">
                <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-[url('sandblasting.jpg')] bg-center bg-cover">
                        <div class="pt-96">
                            <div class="text-center text-white text-xl bg-black bg-opacity-50 py-2 tracking-wide font-semibold">
                            Sand Blasting</div>
                        </div>
                    </div>
                    <div class="bg-[url('oveningprocess.jpg')] bg-center bg-cover">
                        <div class="pt-96">
                            <div class="text-center text-white text-xl bg-black bg-opacity-50 py-2 tracking-wide font-semibold">
                            Ovening Process</div>
                        </div>
                    </div>
                    <div class="bg-[url('vapourblasting.jpg')] bg-center bg-cover">
                        <div class="pt-96">
                            <div class="text-center text-white text-xl bg-black bg-opacity-50 py-2 tracking-wide font-semibold">
                            Vapour Blasting</div>
                        </div>
                    </div>
                    <div class="bg-[url('powdercoating.jpg')] bg-center bg-cover">
                        <div class="pt-96">
                            <div class="text-center text-white text-xl bg-black bg-opacity-50 py-2 tracking-wider font-semibold">
                            Powder Coating</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Numbers -->
            <div class="py-20 px-5 sm:px-16 md:px-20 lg:px-48 bg-slate-200">
                <p class="text-uppercase text-center text-2xl md:text-3xl tracking-widest uppercase font-mono font-bold text-gray-600 ">
                    Rating
                </p>
                <hr class="border-red-400 mx-auto w-20 border-2 my-4">
                <div class="mt-16 sm:flex justify-between space-y-16 sm:space-y-0 ">
                    <div class="flex flex-col justify-center items-center space-y-4">
                        <div class="flex items-center justify-center h-28 w-28 rounded-full border-4 border-red-400">
                            <span class="text-black font-extralight tracking-widest text-2xl">
                                2.5K+
                            </span>
                        </div>
                        <p class="text-xl text-center">Services</p>
                    </div>
                    <div class="flex flex-col justify-center items-center space-y-4">
                        <div class="flex items-center justify-center h-28 w-28 rounded-full border-4 border-red-400">
                            <span class="text-black font-extralight tracking-widest text-2xl">
                                100%
                            </span>
                        </div>
                        <p class="text-xl text-center">Satisfied Customers</p>
                    </div>
                    <div class="flex flex-col justify-center items-center space-y-4">
                        <div class="flex items-center justify-center h-28 w-28 rounded-full border-4 border-red-400">
                            <span class="text-black font-extralight tracking-widest text-2xl">
                                100%
                            </span>
                        </div>
                        <p class="text-xl text-center"> Overall Rating</p>
                    </div>
                </div>
            </div>
            <!-- Who we are? -->
            <div class="container my-24 mx-auto md:px-6" id="about">
                <!-- Section: Design Block -->
                <section class="mb-32">
                    <!-- Jumbotron -->
                    <div class="container mx-auto text-center lg:text-left xl:px-32">
                        <div class="flex grid items-center lg:grid-cols-2">
                            <div class="mb-12 lg:mb-0">
                                <div
                                    class="relative z-[1] block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] md:px-12 lg:-mr-14">
                                    <h2 class="mb-8 text-3xl font-bold">Who we are?</h2>
                                    <p class="mb-8 pb-2 text-neutral-500 lg:pb-0">
                                        We are the promising side of motorbike repair and servicing center.
                                    </p>
                                    <div class="mx-auto mb-8 flex flex-col md:flex-row md:justify-around lg:justify-between">
                                        <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="mr-2 h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Best team
                                            </p>
                                            <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" class="mr-2 h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    Best quality
                                                </p>
                                                <p class="mx-auto mb-2 flex items-center md:mx-0 lg:mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" class="mr-2 h-5 w-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        Best experience
                                                    </p>
                                                </div>
                                                <p class="mb-0 text-neutral-500 text-justify">
                                                    Beside servicing and repair sector we also deal about every motorbike spare parts, accessories, riding gears and many more.<br>
                                                    We have best machines and equipment to sign your beloved <span class="font-semibold">Motorbike/Dirtbike</span>.<br> We have best team to coordinate to solve your <span class="font-semibold">Motorbike/Dirtbike</span> problems.
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="https://www.techmotorcycles.co.uk/wp-content/uploads/2019/02/servicing-small.jpg"
                                            class="w-full rounded-lg shadow-lg" alt="image" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Jumbotron -->
                            </section>
                            <!-- Section: Design Block -->
                        </div>
                        <!-- Gallery -->
                        <div class="bg-slate-200 py-16" id="gallery">
                            <p class="text-uppercase text-center text-2xl md:text-3xl tracking-widest uppercase font-mono font-bold text-gray-600 ">
                                Gallery
                            </p>
                            <hr class="border-red-400 mx-auto w-20 border-2 my-4">
                            <div class="flex flex-col justify-center items-center">
                                <div class="container mx-auto py-2 lg:px-32 lg:pt-12">
                                    <div class="-m-1 flex flex-wrap md:-m-2">
                                        @foreach ($latestImages as $image)
                                        <div class="flex w-1/2 sm:w-1/3 flex-wrap hover:scale-[1.015] hover:duration-150">
                                            <div class="w-full p-1 md:p-2">
                                                <img
                                                alt="gallery"
                                                class="block h-full w-full rounded-lg object-contain object-center max-h-72 max-w-48"
                                                src="{{ asset('storage/' . $image->path) }}" />
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="rounded-lg flex w-1/2 sm:w-1/3 flex-wrap hover:scale-[1.015] hover:duration-150 bg-[url('more.jpg')] bg-contain backdrop-blur-sm mt-2 mb-2">
                                            <div class="rounded-lg w-full h-full p-1 md:p-2 bg-black bg-opacity-50 flex items-center justify-center backdrop-blur-sm">
                                                <a class="text-xl md:text-3xl font-medium text-white" href="{{route('gallery')}}">View More...</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact -->
                        <div class="mx-3 my-24 sm:mx-auto md:px-6">
                            <!-- Section: Design Block -->
                            <section class="mb-32">
                                <div
                                    class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                                    <div class="flex flex-wrap items-center">
                                        <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                                            <div class="h-[500px] w-full">
                                                <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d809.9998131155096!2d85.3306526003598!3d27.678845183003133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1690368656488!5m2!1sen!2snp"
                                                class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                                                frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                                            <div class="flex flex-wrap px-3 pt-12 pb-12 md:pb-0 lg:pt-0">
                                                <div
                                                    class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                                    <div class="flex items-start">
                                                        <div class="shrink-0">
                                                            <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="ml-6 grow">
                                                                <p class="mb-2 font-bold">
                                                                    Technical support
                                                                </p>
                                                                <p class="text-neutral-500 text-sm sm:text-base">
                                                                    contacttheroadrunner@gmail.com
                                                                </p>
                                                                <p class="text-neutral-500">
                                                                    +977 9860437398
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                                        <div class="flex items-start">
                                                            <div class="shrink-0">
                                                                <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="ml-6 grow">
                                                                    <p class="mb-2 font-bold">
                                                                        Sales questions
                                                                    </p>
                                                                    <p class="text-neutral-500 text-sm sm:text-base">
                                                                        contacttheroadrunner@gmail.com
                                                                    </p>
                                                                    <p class="text-neutral-500">
                                                                        +977 9849659324
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:mb-0 xl:w-6/12 xl:px-12">
                                                            <div class="align-start flex">
                                                                <div class="shrink-0">
                                                                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                            stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ml-6 grow">
                                                                        <p class="mb-2 font-bold">Press</p>
                                                                        <p class="text-neutral-500 text-sm sm:text-base">
                                                                            bagbazersunrise2021@gmail.com
                                                                        </p>
                                                                        <p class="text-neutral-500">
                                                                            +977 9869027988
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                                                <div class="align-start flex">
                                                                    <div class="shrink-0">
                                                                        <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                                                stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                                    d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ml-6 grow">
                                                                            <p class="mb-2 font-bold">Bug report</p>
                                                                            <p class="text-neutral-500 text-sm sm:text-base">
                                                                                sunriseprint07@gmail.com
                                                                            </p>
                                                                            <p class="text-neutral-500">
                                                                                +01 5340119
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- Section: Design Block -->
                                        </div>
                                        <!-- Footer -->
                                        <footer class="bg-neutral-900 text-center text-white">
                                            <div class="px-6 pt-6">
                                                <!-- Social media icons container -->
                                                <div class="mb-6 flex justify-center">
                                                    <a href="#!" type="button"
                                                        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                                        data-te-ripple-init data-te-ripple-color="light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                                            </svg>
                                                        </a>
                                                        <a href="#!" type="button"
                                                            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                                            data-te-ripple-init data-te-ripple-color="light">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                                                </svg>
                                                            </a>
                                                            <a href="#!" type="button"
                                                                class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                                                data-te-ripple-init data-te-ripple-color="light">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                                                                        fill-rule="evenodd" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                                <a href="#!" type="button"
                                                                    class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                                                    data-te-ripple-init data-te-ripple-color="light">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#!" type="button"
                                                                        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                                                        data-te-ripple-init data-te-ripple-color="light">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                                                                            viewBox="0 0 24 24">
                                                                            <path
                                                                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                                                            </svg>
                                                                        </a>
                                                                        <a href="#!" type="button"
                                                                            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                                                            data-te-ripple-init data-te-ripple-color="light">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Copyright information -->
                                                                        <div class="mb-6 text-sm sm:text-lg">
                                                                            <p>
                                                                                We don't want to push our ideas on to our customers, we simply want to make what they want.
                                                                            </p>
                                                                        </div>
                                                                        <!-- Copyright section -->
                                                                        <div class="p-4 text-center text-sm sm:text-lg" style="background-color: rgba(0, 0, 0, 0.2)">
                                                                            © 2023 Copyright:
                                                                            <a class="text-white" href="https://tailwind-elements.com/">The Road Runner Pvt. Ltd.</a><br>Designed by: Sunrise
                                                                            Graphics Design
                                                                        </div>
                                                                    </footer>
                                                                    <!-- Tailwind Elements JavaScript -->
                                                                    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
                                                                </body>
                                                            </html>