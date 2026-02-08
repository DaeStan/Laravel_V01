<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <p>
        <form method="POST" action="/jobs">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-grey/10 pb-12">
                <h2 class="text-base/7 font-semibold text-black">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-500">Please provide details below.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" name="title" placeholder="Shift Leader" required></x-form-input>

                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary" name="salary" placeholder="$10,000" required></x-form-input>

                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="rounded-md bg-white px-3 py-2 text-sm/6 font-semibold text-black">Cancel</button>
                <x-form-button>Save</x-form-button>
            </div>
            
        </form>
    </p>
</x-layout>