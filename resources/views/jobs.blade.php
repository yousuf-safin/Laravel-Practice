<x-layout>
    <x-slot:heading>
        Jobs Listing Page
    </x-slot:heading>
    <ul>
    @foreach ($jobs as $job)
    
    <li>
    <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
        <b>{{$job['title']}}:</b> Pays{{$job['salary']}} per year.
    </a>
    </li>
    @endforeach
    </ul>

</x-layout> 