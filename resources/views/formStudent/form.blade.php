@include('layouts.navbar')
    <form method="POST" action="{{ route('student.handleForm') }}">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Submit</button>
    </form>
    @include('footer')

