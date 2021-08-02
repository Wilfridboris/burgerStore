
    <header>
        <ul class="admin-bar">
            <li class="item">
                <a @if (Request::is('admin')) class="selected" @endif href="/admin">Orders</a>
                <a @if (Request::is('admin/post*')) class="selected" @endif href="/admin/post">Post</a>
                <a href="#">Blog</a>
                <a href="#">Print</a>
            </li>
            <li class="user"><a href="#">{{Auth::user()->name}}</a></li>
       
        </ul>
    </header>
