<?php require 'helpers.php'; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      TailPress - Rapidly build your WordPress theme with Tailwind CSS and Laravel Mix
    </title>
    <link href="<?php echo mix('/css/styles.css'); ?>" rel="stylesheet" />
  </head>
  <body class="text-gray-800 antialiased">
    <div id="header">
      <div class="container mx-auto">
        <div class="border-b py-8 flex items-center justify-between">
          <?php svg('logo'); ?>
          <h1 class="hidden">TailPress</h1>
          <a href="https://github.com/jeffreyvr/tailpress" class="bg-primary hover:bg-gray-800 transition-colors duration-200 font-medium text-xl py-4 px-8 rounded-lg text-white">View on Github</a>
        </div>
      </div>
    </div>

    <div id="introduction" class="py-20">
      <div class="container mx-auto">
        <h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">
          Rapidly build your <a href="https://wordpress.org" class="border-b-2 mb-2 border-primary">WordPress</a> theme with
          <a href="https://tailwindcss.com" class="border-b-2 mb-2 border-primary">Tailwind CSS</a>
          and
          <a href="https://laravel-mix.com" class="border-b-2 mb-2 border-primary">Laravel Mix</a>.
        </h2>

        <p class="max-w-screen-lg text-gray-700 text-xl lg:text-3xl leading-relaxed font-light mb-10">
          TailPress is your go-to starting point for developing WordPress themes
          with Tailwind CSS and comes with basic block-editor support out of the box.
        </p>

        <a href="#getting-started" class="bg-secondary hover:bg-gray-800 transition-colors duration-200 font-medium text-xl py-4 px-8 rounded-lg text-white">Get started</a>
        <a href="https://github.com/jeffreyvr/tailpress/archive/refs/heads/master.zip" class="ml-2 bg-gray-800 hover:bg-gray-900 transition-colors duration-200 font-medium text-xl py-4 px-8 rounded-lg text-white">Download</a>
      </div>
    </div>

    <div id="getting-started" class="bg-gray-50">
      <div class="container mx-auto py-16 lg:flex">
        <div class="lg:w-1/2 lg:pr-16 sm:pr-0">
          <h2 class="text-4xl lg:text-7xl tracking-tight font-extrabold mb-8">Getting started.</h2>
          <ul>
            <li class="relative flex mb-8">
              <div class="flex-shrink-0 rounded-full bg-white text-gray-500 text-3xl w-16 h-16 flex items-center justify-center mr-8">1</div>
              <div>Clone the repository <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">git clone https://github.com/jeffreyvr/tailpress.git && cd tailpress</code></div>
            </li>

            <li class="relative flex mb-8">
              <div class="flex-shrink-0 rounded-full bg-white text-gray-500 text-3xl w-16 h-16 flex items-center justify-center mr-8">2</div>
              <div>Remove git from the repository <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">rm -rf .git</code></div>
            </li>

            <li class="relative flex mb-8">
              <div class="flex-shrink-0 rounded-full bg-white text-gray-500 text-3xl w-16 h-16 flex items-center justify-center mr-8">3</div>
              <div>Install the NPM dependencies <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">npm install</code></div>
            </li>

            <li class="flex-shrink-0 relative flex mb-8">
              <div class="rounded-full bg-white text-gray-500 text-3xl w-16 h-16 flex items-center justify-center mr-8">4</div>
              <div>Compile development the NPM dependencies <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">npm run development</code></div>
            </li>

            <li class="flex-shrink-0 relative flex mb-8">
              <div class="rounded-full bg-white text-gray-500 text-3xl w-16 h-16 flex items-center justify-center mr-8">5</div>
              <div>Watch for changes <code class="bg-gray-800 text-white px-8 py-4 rounded block mt-4">npm run watch</code></div>
            </li>
          </ul>
        </div>
        <div class="lg:w-1/2">
          <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
              <div class="aspect-w-16 aspect-h-9">
                <iframe class="sm:rounded-3xl shadow-lg" src="https://www.youtube.com/embed/VYmCUtJtYSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              </div>
            <div class="text-gray-500 text-center mt-12 px-8">In this video you'll go through all the steps to get started.</div>
          </div>
      </div>
    </div>

    <div id="block-editor">
      <div class="container mx-auto py-16">

        <div class="lg:flex">
          <div class="lg:w-2/3">
            <h2 class="text-4xl lg:text-7xl tracking-tight font-extrabold mb-8">Supports the block editor.</h2>
            <div class="text-gray-600 leading-relaxed text-xl lg:pr-16">
              <p class="max-w-4xl text-lg sm:text-2xl font-medium sm:leading-10 space-y-6 mb-6">TailPress comes with basic support for the block editor. CSS-classes for alignment, background and text colors will be generated automatically.</p>
              <p>You can modify this within the tailwind.config.js file. To make the editing experience within the block editor more in line with the front end styling, a editor-style.css is generated. This file is only compiled on production builds.</p>
            </div>
          </div>
          <div class="lg:w-1/3">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
              <div class="absolute inset-0 bg-gradient-to-r from-secondary to-green-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
              <img class="relative z-10 max-w-full shadow-lg sm:rounded-3xl" src="images/screenshot1.png">
            </div>
          </div>
      </div>
    </div>

    <div id="fast-compiling-purge">
      <div class="container mx-auto border-t py-16">

        <div class="lg:flex">
          <div class="lg:w-2/3">
            <h2 class="text-4xl lg:text-7xl tracking-tight font-extrabold mb-8">Super fast compiling.</h2>
            <div class="text-gray-600 leading-relaxed text-xl pr-16">
              <p class="max-w-4xl text-lg sm:text-2xl font-medium sm:leading-10 space-y-6 mb-6">TailPress enables <a href="https://tailwindcss.com/docs/just-in-time-mode" class="text-gray-900">Tailwind's JIT (just-in-time) engine</a> which makes compiling super fast.</p>
              <p>The JIT engine uses PurgeCSS which in turn makes sure only classes that you actually use end up in your compiled CSS.</p>
            </div>
          </div>
          <div class="lg:w-1/3">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
              <div class="absolute inset-0 bg-gradient-to-r from-primary to-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
              <div class="aspect-w-16 aspect-h-9">
                <iframe class="sm:rounded-3xl shadow-lg w-full h-64" src="https://www.youtube.com/embed/3O_3X7InOw8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="text-gray-500 text-center mt-12 px-8">In this video Adam Wathan, creator of Tailwind CSS tells you all about JIT.</div>
          </div>
      </div>
    </div>

    <footer class="bg-gray-50 text-gray-600">
        <div class="container py-16 mx-auto">
          <div class="text-center pb-12">
            <span class="text-red-500">♥</span> Huge thank you to <a href="https://wordpress.org/?ref=tailpress.io" class="text-gray-900">WordPress</a>, <a href="https://tailwindcss.com/?ref=tailpress.io" class="text-gray-900">Tailwind CSS</a> and <a href="https://laravel-mix.com/?ref=tailpress.io" class="text-gray-900">Laravel Mix</a> for making this possible!
          </div>

          <div class="text-center border-t pt-12">
            The TailPress boilerplate theme is created by <a href="https://vanrossum.dev/" class="text-gray-900">Jeffrey van Rossum</a>.
          </div>
        </div>
    </footer>
  </body>
</html>
