<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
         @foreach ($jobs as $job)
            <div class="space-y-4 text-lg">
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-[#2b4155] text-sm">
                        {{$job->employer->name}}
                    </div>
                    <div>
                        <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} per year.
                    </div> 
                    <div class="flex item-center gap-1 font-bold text-[#446888] text-sm">
                        <img src="https://www.svgrepo.com/show/486434/location-filled.svg" class="size-5"/>
                        {{$job->location->name}}
                    </div>                         
                </a>
            </div>
        @endforeach

        <div class="mt-5">
            {{ $jobs->links() }}
        </div>
</ul>

</x-layout>