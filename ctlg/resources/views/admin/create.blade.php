@extends('layouts.admin')
@section('content')
<div>
    <div class="flex flex-col items-center min-h-screen p-3 bg-gray-100 sm:justify-start sm:pt-0 ">
        <div class="w-full px-16 py-5 overflow-hidden bg-white rounded-lg">
            <div class="mb-4">
                <h1 class="text-3xl font-bold ">
                    Create Post Produk
                </h1>
            </div>

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ">
                <form method="POST" action="#">
                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="title">
                            Nama Produk
                        </label>
                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="email" placeholder="180" />
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <label class="block text-sm font-bold text-gray-700" for="password">
                            Description
                        </label>
                        <textarea name="description"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            rows="4" placeholder="400"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700" for="title">
                            Harga
                        </label>
                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="email" placeholder="180" />
                    </div>

                    <div class="flex items-center justify-start mt-4 gap-x-2">
                        <button type="submit"
                            class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection