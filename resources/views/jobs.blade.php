<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>


    <ul>
        @foreach ($jobs as $job)
        <a href="jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
            <li>
                {{ $job['title']}}: Pays {{ $job['salary'] }} per year
            </li>
        </a>
       
    @endforeach
    </ul>
   
</x-layout>