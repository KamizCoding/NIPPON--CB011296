<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <img src="img/companylogo.jpg" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Services</a>
                <a href="/yourvisa" class="nav-item nav-link">Your Visa</a>
                <a href="/cart" class="nav-item nav-link">Cart</a>
                <a href="/payment" class="nav-item nav-link">Payment</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>

                @if (Route::has('login'))

            @auth

            <li class="nav-item">

<x-app-layout>
</x-app-layout>

</li>

@else


<li>
    <a class="btn loginbtn" id="login_css" href="{{ route('login') }}" >Login</a>
</li>
<li>
    <a class="btn btn-dark loginregister" href="{{ route('register') }}">Register</a>
</li>

@endauth
@endif
          </li>
        </ul>

      </div>
    </nav>
<!-- Navbar End -->
