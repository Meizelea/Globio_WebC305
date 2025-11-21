@include('components.header')
    @if($errors->any())
        <div style="color: red">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    
    @endif

    <form action="{{route('register')}}" method="POST">
        @csrf
        <p>Name</p>
        <input type="text" name="name">

        <p>Email</p>
        <input type="email" name="email">

        <p>Password</p>
        <input type="password" name="password">

        <p>Confirm Password</p>
        <input type="password" name="password_confimation">
        <input type="submit">
    </form>

@include(view 'components.footer')