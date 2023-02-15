@include('partials.header')

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$customer->firstName}}
                </th>
                <td class="px-6 py-4">
                {{$customer->lastName}}
                </td>
                <td class="px-6 py-4">
                {{$customer->email}}
                </td>
                <td class="px-6 py-4">
                {{$customer->contactNumber}}
                </td>
                <td class="px-6 py-4">
                {{$customer->address}}
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
</div>
@include('partials.footer')



