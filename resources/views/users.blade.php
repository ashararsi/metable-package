@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="flex flex-wrap -mx-3 mb-5">
            <div class="w-full max-w-full px-3 mb-6  mx-auto">
                <div
                    class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                    <div
                        class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                        <div  class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                            <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                                <span class="mr-3 font-semibold text-dark">  Tenants with Users</span>
                                <span class="mt-1 font-medium text-secondary-dark text-lg/normal">A list of all the users in your account including their name, title, email and role.</span>
                            </h3>
                            <div class="relative flex flex-wrap items-center my-2">
                                <a href="javascript:void(0)"
                                   class="inline-block   font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-150 ease-in-out   btn-info shadow-none border-0 py-2 px-5  ">
                                    Add </a>
                            </div>
                        </div>

                        <div class="flex-auto block py-8 pt-6 px-9">
                            <div class="overflow-x-auto">
                                <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                    <thead class="align-bottom">
                                    <tr class="font-bold    ">
                                        <th class="pb-3   text-start   border-bottom">Tenant Id</th>
                                        <th class="pb-3     text-start   border-bottom">User Name</th>
                                        <th class="pb-3    text-start   border-bottom"> User Email</th>
                                        <th class="pb-3    text-start   border-bottom">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tenants as $tenant)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200     text-start   bg-white text-lg">
                                                <b>{!!   $tenant->id    !!}</b>
                                            </td>
                                            <td class=" border-b border-gray-200  text-start text-black bg-white text-lg">
                                                <b>{!! $tenant->users->name !!}</b>
                                            </td>
                                            <td class=" border-b border-gray-200 bg-white text-black text-lg">
                                                <p class="text-dark whitespace-no-wrap text-start">
                                                    <b>{!! $tenant->users->email !!}</b></p>
                                            </td>

                                            <td class=" border-b border-gray-200 bg-white text-black text-lg">
                                                <a href="#" class="   link-underline link-primary">Edit</a></td>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

@endsection
@section('css')
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">

@endsection
@section('js')
@endsection
