@extends('layouts.main')
@section("Title", "Create")
@section("content")
    <form method="post" action="{{ route('createnote.index') }}">
        @csrf
        <div class="flex justify-center items-center w-full min-h-screen bg-white px-5 py-5">
            <div class="xl:max-w-xl bg-white drop-shadow-xl border border-black/20 w-full rounded-md flex justify-between items-stretch px-5 xl:px-5 py-5">
                <div class="mx-auto w-full md:p-10 py-5 md:py-0">
                    <h1 class="text-center text-2xl sm:text-3xl font-semibold text-[#4A07DA]">
                        Create Note
                    </h1>
                    <div class="w-full mt-5 sm:mt-8">
                        <div class="mx-auto w-full sm:max-w-md md:max-w-lg flex flex-col gap-5">
                            @error('content')
                            <div class="bg-error rounded-[5px] py-2 px-2"><p class="text-white text-center">{{ $message }}</p></div>
                            @enderror
                            <div>
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your note</label>
                                <textarea id="message" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                            </div>
                            <div class="flex flex-col md:flex-row gap-2 md:gap-4 justify-center items-center">
                                <button type="submit" class="btn btn-active btn-primary btn-block max-w-[200px]">
                                    Create Note
                                </button>
                                <a href="{{ route('main.index') }}" class="btn btn-outline btn-primary btn-block max-w-[200px]">
                                    Back to Note
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection