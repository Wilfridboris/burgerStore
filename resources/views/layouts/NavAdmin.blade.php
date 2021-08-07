
    <header>
        <ul class="admin-bar">
            <li class="item">
               <a href="/">Home  <i class="fas fa-home"></i></a>
                <a @if (Request::is('admin')) class="selected" @endif href="/admin">Orders  <i class="fas fa-book"></i> </a>
                <a @if (Request::is('admin/post*')) class="selected" @endif href="/admin/post">Post  <i class="fas fa-utensils"></i></a>
        
            </li>
            <li class="user"><a href="#" >{{Auth::user()->name}} <i class="fas fa-angle-double-down"></i></a> {{session('status')}}</li>
            @error('image')
                        <p class="alert ">{{ $message }}</p>
            @enderror
            
            
            
       
        </ul>
    </header>
