<nav class="h-14 px-4 py-8">
  @auth
    
  @endauth
  @guest
  <div class="float-right pr-4">
    <a class="px-6 py-3 bg-green-600 text-white rounded-lg mr-4 shadow-xl" href="/login">Login</a>
    <a class="px-6 py-3 bg-green-600 text-white rounded-lg shadow-xl" href="/register">Register</a>
  </div>
  @endguest
</nav>