<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">ToDo</a>
        </div>
        <div class="collapse navbar-collapse">

        @if($logined)
            <ul class="nav navbar-nav pull-right">
                <li><a href="{{ url('/home') }}">Tasks</a></li>
                <li><a href="{{ url('/') }}">Logout</a></li>
            </ul>
        @endif

        </div><!--/.nav-collapse -->
    </div>
</div>