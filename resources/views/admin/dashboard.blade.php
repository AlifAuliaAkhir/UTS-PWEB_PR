@extends('admin.layouts.app')

@section('content')
<div class="max-w-[720px] mx-auto">

    <div class="w-full flex justify-between items-center mb-3 mt-12 pl-3">
        <div>
            <h3 class="text-lg font-semibold text-slate-800">Crud Contact</h3>
            <p class="text-slate-500">Data Contact.</p>
        </div>
        <div class="mx-3">
            <div class="w-full max-w-sm min-w-[200px] relative">
            <div class="relative">
                <input
                class="bg-white w-full pr-11 h-10 pl-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                placeholder="Search for contact..."
                />
                <button
                class="absolute h-8 w-8 right-1 top-1 my-auto px-2 flex items-center bg-white rounded "
                type="button"
                >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8 text-slate-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                </button>
            </div>
            </div>
        </div>
    </div>
    
    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
    <table class="w-full text-left table-auto min-w-max">
        <thead>
        <tr class="border-b border-slate-300 bg-slate-50">
            <th class="p-4 text-sm font-normal leading-none text-slate-500">No</th>
            <th class="p-4 text-sm font-normal leading-none text-slate-500">Name</th>
            <th class="p-4 text-sm font-normal leading-none text-slate-500">Email</th>
            <th class="p-4 text-sm font-normal leading-none text-slate-500">Phone</th>
            <th class="p-4 text-sm font-normal leading-none text-slate-500">Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- Data dummy untuk tabel kontak -->
        <tr class="hover:bg-slate-50">
            <td class="p-4 border-b border-slate-200 py-5">1</td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="block font-semibold text-sm text-slate-800">farel</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="text-sm text-slate-500">farel@example.com</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="text-sm text-slate-500">+628123456789</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <button type="button" class="text-slate-500 hover:text-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </td>
        </tr>

        <tr class="hover:bg-slate-50">
            <td class="p-4 border-b border-slate-200 py-5">2</td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="block font-semibold text-sm text-slate-800">alif</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="text-sm text-slate-500">alif@example.com</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="text-sm text-slate-500">+628987654321</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <button type="button" class="text-slate-500 hover:text-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </td>
        </tr>

        <tr class="hover:bg-slate-50">
            <td class="p-4 border-b border-slate-200 py-5">3</td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="block font-semibold text-sm text-slate-800">hanif</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="text-sm text-slate-500">hanifj@example.com</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <p class="text-sm text-slate-500">+628567123456</p>
            </td>
            <td class="p-4 border-b border-slate-200 py-5">
            <button type="button" class="text-slate-500 hover:text-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </td>
        </tr>

        </tbody>
    </table>
    </div>

</div>
@endsection
