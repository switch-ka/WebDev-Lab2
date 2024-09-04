@extends('navbar')
@section('content')
<div class="container mt-4">
    @if(isset($username))
        <h1>Welcome, {{ $username }}!</h1>
    @else
    <form action="{{ route('set-username') }}" method="POST">
    @csrf
    <label for="username">Enter your name:</label>
    <input type="text" id="username" name="username" value="{{ old('username') }}"
           class="{{ $errors->has('username') ? 'input-error' : 'input-normal' }}" required>
    <button type="submit">Submit</button>
    <button type="button" onclick="submitAsGuest()">Guest</button>
    @if ($errors->has('username'))
                <div class="error-message">
                    {{ $errors->first('username') }}
                </div>
            @endif
</form>
    @endif
</div>
<script>
    function submitAsGuest() {
        document.getElementById('username').value = 'Guest'; 
        document.querySelector('form').submit(); 
    }
</script>

<style>
    .footer {
    background-color: #333; 
    color: white; 
    text-align: center; 
    padding: 10px 0; 
    position: fixed; 
    width: 100%; 
    bottom: 0; 
    z-index: 1000; 
}

.footer p {
    margin: 0; 
}
    .input-error {
        border: 2px solid red;
        background-color: #ffe6;
    }
    .input-normal {
        border: 1px solid #ced4da;
        background-color: #fff;
    }
    .container {
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding-top: 50px;
    }
form {
    align-items: center;
    margin: 0 auto;
}
.error-message {
        color: red;
        font-size: 12px;
        margin-top: 10px;
    }
    body {
            font-family: Arial, sans-serif;
            color: white;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #000000, #ffffff); 
            background-image: url('/images/carLand.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 100x 0; 
        }
</style>
@endsection
