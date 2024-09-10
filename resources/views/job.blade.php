<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text=lg">{{$job['title']}}</h2>
    <p>
        This jon pays {{$job['salary']}} in a  year.
    </p>
</x-layout>