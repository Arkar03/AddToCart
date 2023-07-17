<style>
    body {
        overflow-x: hidden;
    }

    .nav-hover:hover {
        color: #18bc9c !important;
    }
</style>
<nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
    <div class="container">
        <div>
            <a class="navbar-brand" href="{{ url('/') }}">Home </a>
        </div>
        <div class="" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white nav-hover" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white nav-hover" href="#">Brand</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white nav-hover" href="{{ url('/product/show') }}">Cart
                        @if (session('items'))
                            <span class="badge rounded-pill bg-danger text-white">
                                {{ count(session('items')) }}
                            </span>
                        @endif
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white   " data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        Product
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/products/create') }}">Create Product</a>
                        <a class="dropdown-item" href="#">View All Product</a>
                        <a class="dropdown-item" href="#">Delete Product</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white   " data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-users"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Logout</a>
                        <a class="dropdown-item" href="#">Reigster</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>
