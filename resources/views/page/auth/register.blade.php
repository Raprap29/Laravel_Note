@extends('layouts.main')
@section("Title", "Register")
@section("content")
    <div>
        <div class="flex justify-center items-center w-full min-h-screen bg-white px-5 py-5">
            <div class="xl:max-w-7xl bg-white drop-shadow-xl border border-black/20 w-full rounded-md flex justify-between items-stretch px-5 xl:px-5 py-5">
                <div class="sm:w-[60%] lg:w-[50%] bg-cover bg-center items-center justify-center hidden md:flex">
                    <img src="{{ asset('assets/note_image.jpg') }}" alt="login" class="h-[500px]" />
                </div>
                <div class="mx-auto w-full lg:w-1/2 md:p-10 py-5 md:py-0">
                    <h1 class="text-center text-2xl sm:text-3xl font-semibold text-[#4A07DA]">
                        Create Account
                    </h1>
                    <div class="w-full mt-5 sm:mt-8">
                        <div class="mx-auto w-full sm:max-w-md md:max-w-lg flex flex-col gap-5">
                            <div class="flex flex-col sm:flex-row gap-3">
                                <input type="text" name="first_name" placeholder="Enter Your First Name" class="input input-bordered input-primary w-full max-w-xs text-black placeholder:text-black/70" />
                                <input type="text" name="last_name" placeholder="Enter Your Last Name" class="input input-bordered input-primary w-full max-w-xs text-black placeholder:text-black/70" />
                            </div>
                            <input type="text" name="username" placeholder="Enter Your Username" class="input input-bordered input-primary w-full text-black placeholder:text-black/70" />
                            <input type="text" name="email" placeholder="Enter Your Email" class="input input-bordered input-primary w-full text-black placeholder:text-black/70" />
                            <input type="password" name="password" placeholder="Enter Your Password" class="input input-bordered input-primary w-full text-black placeholder:text-black/70" />
                            <div class="flex items-center gap-1.5 justify-start pl-2">
                                <div class="form-control">
                                    <label class="label cursor-pointer">
                                        <input type="checkbox" class="checkbox-xs checkbox-primary" />
                                    </label>
                                </div>
                                <h3 class="flex items-center whitespace-nowrap text-xs text-black">
                                    I agree to the
                                    <span class="text-[#4A07DA]">&nbsp;Terms</span>
                                    &nbsp;and
                                    <span class="text-[#4A07DA]">&nbsp;Privacy Policy</span>.
                                </h3>
                            </div>
                            <div class="flex flex-col md:flex-row gap-2 md:gap-4 justify-center items-center">
                                <button class="btn btn-active btn-primary btn-block max-w-[200px]">
                                    Sign Up
                                </button>
                                <a href="{{ route('login.index') }}" class="btn btn-outline btn-primary btn-block max-w-[200px]">
                                    Sign In
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection