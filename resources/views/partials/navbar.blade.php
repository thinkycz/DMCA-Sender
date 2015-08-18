<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::action('PagesController@index') }}">DMCA Sender</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li {{ Request::url() == URL::action('PagesController@index') ? 'class=active' : '' }}><a href="{{ URL::action('PagesController@index') }}">Home</a></li>
                @if(Auth::user())
                <li {{ Request::url() == URL::action('NoticesController@index') ? 'class=active' : '' }}><a href="{{ URL::action('NoticesController@index') }}">Notices</a></li>
                <li {{ Request::url() == URL::action('NoticesController@create') ? 'class=active' : '' }}><a href="{{ URL::action('NoticesController@create') }}">Create a notice</a></li>
                @endif
            </ul>


            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ URL::action('Auth\AuthController@getLogin') }}">Login</a></li>
                    <li><a href="{{ URL::action('Auth\AuthController@getRegister') }}">Register</a></li>
                @else
                    <li><a href="">Logged in as {{ Auth::getUser()->name }}</a></li>
                    <li><a href="{{ URL::action('Auth\AuthController@getLogout') }}">Log out</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
