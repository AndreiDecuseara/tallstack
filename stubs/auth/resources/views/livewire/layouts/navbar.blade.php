<nav class="px-4 py-8 h-14">
  @auth
    <div class="float-right pr-4">
        <a
        href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        class="px-6 py-3 mr-4 text-white bg-green-600 rounded-lg shadow-xl"
        >
        Log out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
    </div>
  @endauth
  @guest
  <div class="float-right pr-4">
    <a class="px-6 py-3 mr-4 text-white bg-green-600 rounded-lg shadow-xl" href="/login">Login</a>
    <a class="px-6 py-3 text-white bg-green-600 rounded-lg shadow-xl" href="/register">Register</a>
  </div>
  @endguest
</nav>
