<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">ToDoApp</a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link " href="/">Todos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('todos/create') ? 'active' : ''}}">
                <a class="nav-link" href="/todos/create">New todo</a>
            </li>

        </ul>
    </div>
</nav>
