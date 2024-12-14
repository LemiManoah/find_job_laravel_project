<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>


    <div class="space-y-4">
        @foreach ($jobs as $job)
        <a href="" class="block px-4 py-6 border border-gray-200 rounded-lg">
            <div class="text-bold text-blue-500">{{$job->employer->name}}</div>
            <div>
                {{ $job['title']}}: Pays {{ $job['salary'] }} per year
            </div>
        </a>
       
        @endforeach

        <div>
            {{$jobs->links()}}
        </div>
    </div>
   
</x-layout>