@extends("layouts.main")

@section("Title", "Update")

@section("content")
    <!-- Uncomment this section if you want to display success messages
    @if(session('success'))
        <div class="bg-green-500">
            <p class="text-white">{{ session('success') }}</p>
        </div>
    @endif -->

    <form action="">
        @csrf
        @method('PUT')
        <div class="container mx-auto max-w-[1180px]">
            <ul>
                <li>Content: {{ $note->content }}</li>
                <li>Created At: {{ $note->created_at }}</li>
                <li>Updated At: {{ $note->updated_at }}</li>
            </ul>
        </div>
    </form>
@endsection
