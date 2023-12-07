@extends('layouts.mainlayout')

@section('content')



<div class="mb-4">
    <div class="w-[1440px] h-[350px] py-[150px] bg-black bg-opacity-50 flex-col justify-center items-center inline-flex">
        <div class="text-center text-white text-5xl font-bold font-['Poppins']">Contact Us</div>
        <div class="text-center text-white text-2xl font-normal font-['Poppins']">Welcome to angelica catering, where<br/>every bite tells a story</div>
    </div>
</div>

<div class="grid grid-cols-3 gap-4">
    <div class="px-4 lg:px-160">
        <div class="w-[360px] h-[100px] bg-green-400 rounded-[5px] shadow flex flex-col items-center justify-center mx-auto">
            <p class="text-center">Call Us</p>
            <p class="text-center">+62899999999</p>
        </div>
    </div>
    <div class="px-4 lg:px-160">
        <div class="w-[360px] h-[100px] bg-green-400 rounded-[5px] shadow flex flex-col items-center justify-center mx-auto">
            <p class="text-center">Call Us</p>
            <p class="text-center">+62899999999</p>
        </div>
    </div>
    <div class="px-4 lg:px-160">
        <div class="w-[360px] h-[100px] bg-green-400 rounded-[5px] shadow flex flex-col items-center justify-center mx-auto">
            <p class="text-center">Call Us</p>
            <p class="text-center">+62899999999</p>
        </div>
    </div>
</div>


<div class="grid grid-cols-2 p-4">
    <div class="flex items-center justify-center">
        <img class="w-[550px] h-[450px] rounded-[5px] shadow border border-gray-500 border-opacity-25" src="https://via.placeholder.com/550x450" />
    </div>
    <div class="flex items-center justify-center">
        <div class="w-[550px] h-[450px] bg-gray-500 rounded-[10px] shadow"></div>
    </div>
</div>




@endsection