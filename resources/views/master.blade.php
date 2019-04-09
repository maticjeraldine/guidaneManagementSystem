<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/www.css') }}" rel="stylesheet">
    <title>@yield('page_title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
                <!-- <small>informatics guidance management system</small> -->
                <small>informatics - GSM</small>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest
                @else

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/violation">Violations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/student">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reports</a>
                    </li>
                </ul>
                @endguest

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a 
                            	class="nav-link" 
                            	href="{{ route('login') }}"
                            >
                        		{{ __('Login') }}
                        	</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                          <!--       <a 
                                	class="nav-link" 
                                	href="{{ route('register') }}"
                                >
                            		{{ __('Register') }}
                            	</a> -->
                            	<div class="btn-group">
									<button 
										type="button" 
										class="btn nav-link" 
										data-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false"
									>
	                            		{{ __('Register') }}
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a 
											class="dropdown-item" 
											href="/register?student"
										>
											Student
										</a>
										<a 
											class="dropdown-item" 
											href="/register?teacher"
										>
											Teacher
										</a>
										<a 
											class="dropdown-item" 
											href="/register?teacher"
										>
											Service Officer
										</a>
									</div>
								</div>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a 
                            	id="navbarDropdown" 
                            	class="nav-link dropdown-toggle" 
                            	href="#" 
                            	role="button" 
                            	data-toggle="dropdown" 
                            	aria-haspopup="true" 
                            	aria-expanded="false" 
                            	v-pre
                            >
                                {{ Auth::user()->email }}
                                <span class="caret"></span>
                            </a>

                            <div 
                            	class="dropdown-menu dropdown-menu-right" 
                            	aria-labelledby="navbarDropdown"
                            >
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('js')
</body>
</html>
