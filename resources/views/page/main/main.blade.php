@extends("layouts.main")

@section("Title", "Tickets")

@section("content")
   <div class="container mx-auto max-width-[300px]">
        <div class="flex justify-center align-center mt-3 w-full">
                @if(session('success'))
                    <div class="bg-success rounded-[5px] shadow-xl px-4 py-2">
                        <p class="text-white">{{ session('success') }}</p>
                    </div>
                @endif
                @if(session('deleted'))
                    <div class="bg-error rounded-[5px] shadow-xl px-4 py-2">
                        <p class="text-white">{{ session('deleted') }}</p>
                    </div>
                @endif
        </div>
   </div>
    <div class="container mx-auto max-width-[1180px]">
        <div class="mt-5 mb-5 flex justify-end"><a href="{{ route('create.index') }}" class="btn hover:bg-[rgba(0,0,255,.75)] rounded-[10px] bg-[blue] text-white px-[15px] py-[10px]">Create Note</a></div>
        <div class="flex w-full justify-center">
            <div class="grid grid-cols-3 w-full justify-center gap-5">
                @foreach($notes as $note)
                    <div class="card w-full bg-base-100 shadow-xl">
                        <div class="card-body">
                            <div class="bg-primary shadow-xl rounded-[5px]"><p class="text-white px-3 py-3 text-center">{{ $note->created_at }}</p></div>
                            <div class="mt-4">{{ $note->content }}</div>
                            <div class="flex justify-content-center w-full block gap-x-[10px] mt-4">
                                <a href="{{ route('updatenote.index', $note) }}" class="bg-primary rounded-[5px] text-white px-2 py-2 text-center font-weight-bold w-full">Edit</a>
                                <form action="{{ route('destroynote.index', $note) }}" class="w-full" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-error rounded-[5px] text-white px-2 py-2 text-center font-weight-bold w-full">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="flex justify-center align-center w-full">
        <div class="join mt-5">
            <input class="join-item btn btn-square" type="radio" name="options" aria-label="1" checked />
            <input class="join-item btn btn-square" type="radio" name="options" aria-label="2" />
            <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
            <input class="join-item btn btn-square" type="radio" name="options" aria-label="4" />
        </div>
    </div>
@endsection