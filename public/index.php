<?php require '../src/helpers.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TailPress - Rapidly build your WordPress theme with Tailwind CSS</title>
    <meta name="description" content="TailPress is your go-to starting point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out of the box.">
    <link href="<?php echo mix('/css/styles.css'); ?>" rel="stylesheet" />
  </head>
  <body class="text-gray-800 antialiased overflow-x-hidden w-full">
    <div class="bg-cover bg-center" style="background-image:url(images/gradient.jpg);">
      <div id="header">
        <div class="container mx-auto">
          <div class="py-8 flex items-center justify-between">
            <?php svg('logo-100'); ?>
            <h1 class="hidden">TailPress</h1>
            <a href="https://github.com/jeffreyvr/tailpress" class="bg-primary hover:bg-[#0e92cd] transition-colors duration-200 font-medium text-lg py-1 px-3 lg:text-xl lg:py-4 lg:px-8 rounded-lg text-white">View on GitHub</a>
          </div>
        </div>
      </div>

      <div id="introduction" class="py-16 lg:py-20">
        <div class="container mx-auto">
          <h2 class="text-center mx-auto max-w-screen-lg text-3xl lg:text-6xl tracking-tight font-extrabold mt-4 mb-2 lg:!leading-tight">
            Rapidly build your WordPress theme with Tailwind CSS.
          </h2>

          <p class="text-center mx-auto max-w-screen-md text-gray-700 text-xl lg:!leading-relaxed mb-10">
            TailPress is your go-to starting point for developing WordPress themes
            with Tailwind CSS and comes with block-editor support out of the box.
          </p>

          <div class="text-center flex justify-center gap-4">
            <a href="#getting-started" class="bg-secondary hover:bg-[#129a8b] transition-colors duration-200 font-medium text-lg py-2 px-4 lg:text-xl lg:py-4 lg:px-8 rounded-lg text-white">Get started</a>
            <a href="https://github.com/jeffreyvr/tailpress/archive/refs/heads/master.zip" class="bg-gray-800 hover:bg-gray-900 transition-colors duration-200 font-medium text-lg py-2 px-4 lg:text-xl lg:py-4 lg:px-8 rounded-lg text-white">Download</a>
          </div>
        </div>
      </div>
      <div class="w-full h-[100px] bg-gradient-to-b from-transparent to-white"></div>
    </div>

    <div id="getting-started">
      <div class="container mx-auto px-0 py-16 lg:flex">
        <div class="lg:w-1/2 px-8 lg:px-16">
          <h2 class="text-2xl lg:text-5xl tracking-tight font-extrabold mb-8">Getting started.</h2>
          <ul>
            <li class="relative flex mb-8 w-full">
              <div class="flex-shrink-0 rounded-full bg-gray-50 text-gray-500 flex items-center justify-center mr-4 h-12 w-12 text-lg lg:text-3xl lg:w-16 lg:h-16">1</div>
              <div class="max-w-[80%]">Get the installer <code class="break-words bg-gray-800 text-white px-8 py-4 rounded block mt-4">composer global require jeffreyvanrossum/tailpress-installer</code></div>
            </li>

            <li class="relative flex mb-8">
              <div class="flex-shrink-0 rounded-full bg-gray-50 text-gray-500 flex items-center justify-center mr-4 h-12 w-12 text-lg lg:text-3xl lg:w-16 lg:h-16">2</div>
              <div class="max-w-[80%]">Now simply run
                <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">tailpress new example-theme</code>
                <div class="mt-4">To set your theme name and initialize a Git repository, use this instead</div>
                <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">tailpress new example-theme --name="Theme Name" --git</code>

                <div class="mt-4 text-sm text-gray-600 underline"><a href="https://github.com/jeffreyvr/tailpress/#readme">More installation options.</a></div>
              </div>
            </li>

            <li class="flex-shrink-0 relative flex mb-8">
              <div class="flex-shrink-0 rounded-full bg-gray-50 text-gray-500 flex items-center justify-center mr-4 h-12 w-12 text-lg lg:text-3xl lg:w-16 lg:h-16">3</div>
              <div class="max-w-[80%]">Now go to the theme directory and watch for changes <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">npm run watch</code></div>
            </li>
          </ul>
        </div>
        <div class="lg:w-1/2">
          <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
              <div class="aspect-w-16 aspect-h-9">
                <iframe class="sm:rounded-3xl shadow-lg" src="https://www.youtube.com/embed/Yzdvy6XuTEk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              </div>
            <div class="text-gray-500 text-center mt-12 px-8">In this video you'll get to see how you can use the installer.</div>
          </div>
      </div>
    </div>

    <div class="mx-auto container flex flex-wrap gap-8 justify-center">
      <div class="bg-gray-50 px-4 py-3 rounded-full flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        Delightfully minimal
      </div>
      <div class="bg-gray-50 px-4 py-3 rounded-full flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        Support for the WordPress block editor
      </div>
      <div class="bg-gray-50 px-4 py-3 rounded-full flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        Use Esbuild or Laravel Mix for compiling
      </div>
      <div class="bg-gray-50 px-4 py-3 rounded-full flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        Shares colors and font sizes between Tailwind and theme.json
      </div>
      <div class="bg-gray-50 px-4 py-3 rounded-full flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        Use the handy TailPress installer
      </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-12 mx-auto container my-20">
        <div>
          <h3 class="font-bold text-xl mb-2 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            Screencasts
          </h3>
          <p class="mb-4">On YouTube, you'll find a couple of (hopefully) helpful screencasts.</p>
          <a href="https://www.youtube.com/playlist?list=PL6GBdOp044SHIOSCZejodwr1HcYsC43wG" class="bg-primary px-4 py-3 rounded-md inline-block text-white font-medium text-sm">Watch screencasts</a>
        </div>
        <div>
          <h3 class="font-bold text-xl mb-2 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Community
          </h3>
          <p class="mb-4">Do you have any questions or need help with something? Feel free to ask on the  GitHub discussion board.</p>
          <a href="https://github.com/jeffreyvr/tailpress/discussions" class="bg-primary px-4 py-3 rounded-md inline-block text-white font-medium text-sm">Join the board</a>
        </div>
        <div>
          <h3 class="font-bold text-xl mb-2 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
            Suggestions
          </h3>
          <p class="mb-4">If you have any ideas or suggestions for TailPress, please share them on GitHub.</p>
          <a href="https://github.com/jeffreyvr/tailpress/discussions" class="bg-primary px-4 py-3 rounded-md inline-block text-white font-medium text-sm">Share your idea</a>
        </div>
    </div>

    <footer class="bg-gray-50 text-gray-600">
        <div class="container py-16 mx-auto">
          <div class="text-center pb-12">
            <span class="text-red-500">♥</span> Huge thank you to <a href="https://wordpress.org/?ref=tailpress.io" class="text-gray-900">WordPress</a>, <a href="https://tailwindcss.com/?ref=tailpress.io" class="text-gray-900">Tailwind CSS</a>, <a href="https://laravel-mix.com/?ref=tailpress.io" class="text-gray-900">Laravel Mix</a> and <a href="http://esbuild.github.io/?ref=tailpress.io" class="text-gray-900">esbuild</a> for making this possible!
          </div>

          <div class="text-center border-t pt-12">
            The TailPress boilerplate theme is created by <a href="https://vanrossum.dev/" class="text-gray-900">Jeffrey van Rossum</a>.
          </div>
        </div>
    </footer>
  </body>
</html>
