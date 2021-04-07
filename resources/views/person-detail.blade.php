<x-app>
    <x-slot name="title">
        Person Details
    </x-slot>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-40 py-5 sm:px-6 h-40">
            <div class="flex-shrink-0 h-30 w-30 float-left">
                <img class="h-32 w-32 rounded-full"
                     src="{{asset('img/david.jpg')}}"
                     alt="">
            </div>

            <div class="ml-36 mt-8">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    David Nahodyl
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    david@bluefeathergroup.com
                </p>
                <p class="mt-1 max-w-2xl text-sm text-blue-500">
                    <a href="{{route('company-detail', 1)}}"> Blue Feather</a>
                </p>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Full name
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        David Nahodyl
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        david@bluefeathergroup.com
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Phone
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        770-765-6258
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Title
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Consultants
                    </dd>
                </div>
            </dl>
        </div>
    </div>


</x-app>