<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="navbar bg-base-100 sticky top-0 z-50">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" for="my-drawer-2" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
    </div>
    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
  </div>
  <div class="navbar-end">
    <a class="btn">Get started</a>
  </div>
</div>


<div class="drawer drawer-mobile fixed pt-16 top-0">
  <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">
    @yield('container')
  </div>
  <div class="drawer-side shadow-xl">
    <label for="my-drawer-2" class="drawer-overlay"></label>
    <ul class="menu p-4 w-80 bg-base-100 text-base-content space-y-1">
      <!-- Sidebar content here -->
      <li><a href="/ruangan">Ruangan</a></li>
      <li><a href="/">Sidebar Item 2</a></li>
    </ul>

  </div>
</div>

</body>
</html>
