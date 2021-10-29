<div class="overflow-hidden">
  <div class="absolute z-0 w-screen h-screen" id="particles-js"></div>
  <div class="container h-screen m-auto text-center">
    <h1 class="my-4 text-center text-green-600 text-7xl"><b>Tallstack</b></h1>
    <div class="w-1/2 pt-10 m-auto mt-10 ">
      <div class="flex justify-between">
        <a target="_blank" href="https://laravel.com/docs/8.x" class="z-10 flex items-center px-8 py-3 bg-gray-100 rounded-lg shadow-inner flex-column">
          <img width=25 height=25 src="https://laravel.com/img/logomark.min.svg"></img>
          <p class="ml-1 text-xl text-red-500" >Laravel</p>
        </a>
        <a target="_blank" href="https://tailwindcss.com/docs" class="z-10 flex items-center px-8 py-3 bg-gray-100 rounded-lg shadow-inner">
          <svg aria-hidden="true" viewBox="0 0 32 24" fill="none" class="w-auto h-6">
            <path d="M18.724 1.714c-4.538 0-7.376 2.286-8.51 6.857 1.702-2.285 3.687-3.143 5.957-2.57 
            1.296.325 2.22 1.271 3.245 2.318 1.668 1.706 3.6 3.681 7.819 3.681 4.539 0 7.376-2.286 8.51-6.857-1.701 
            2.286-3.687 3.143-5.957 2.571-1.294-.325-2.22-1.272-3.245-2.32-1.668-1.705-3.6-3.68-7.819-3.68zM10.214 12c-4.539 
            0-7.376 2.286-8.51 6.857 1.701-2.286 3.687-3.143 5.957-2.571 1.294.325 2.22 1.272 3.245 2.32 1.668 1.705 3.6 3.68 7.818 
            3.68 4.54 0 7.377-2.286 8.511-6.857-1.702 2.286-3.688 3.143-5.957 2.571-1.295-.326-2.22-1.272-3.245-2.32-1.669-1.705-3.6-3.68-7.82-3.68z" 
            fill="#06B6D4"></path>
          </svg>
          <p class="ml-1 text-xl text-blue-400" >Tailwind</p>
        </a>
        <a target="_blank" href="https://laravel-livewire.com/docs/2.x/quickstart" class="z-10 flex items-center px-8 py-3 bg-gray-100 rounded-lg shadow-inner">
          <img width=25 height=25 src="https://laravel-livewire.com/favicon.ico"></img>
          <p class="ml-1 text-xl text-indigo-600" >Livewire</p>
        </a> 
        <a target="_blank" href="https://alpinejs.dev/start-here" class="z-10 flex items-center px-8 py-3 bg-gray-100 rounded-lg shadow-inner">
          <img width=25 height=25 src="https://alpinejs.dev/favicon.png"></img>
          <p class="ml-1 text-xl text-gray-700" >AlpineJs</p>
        </a>
      </div>
    </div>
    @push('js')
      <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
      <script>
        particlesJS.load('particles-js', 'assets/particles.json', function() {
          console.log('callback - particles.js config loaded');
        });
      </script>
    @endpush
  </div>
</div>