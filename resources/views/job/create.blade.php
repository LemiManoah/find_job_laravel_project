<x-layout>
    <x-slot:heading>
        Create a new Job
    </x-slot:heading>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Get started creating</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('jobs.store')}}" method="POST">
                @csrf

              <div>
                <x-form-label for='title'>title</x-form-label>
                  <div class="mt-2">
                     <x-form-input id="title" name="title" type="text"  required placeholder="Software Engineer"></x-form-input>
                  </div>
              </div>
              <x-form-error name="title"></x-form-error>

                <div>
                  <x-form-label for='salary'>salary</x-form-label>
                    <div class="mt-2">
                       <x-form-input id="salary" name="salary" type="number" autocomplete="salary" required placeholder="$100,000"></x-form-input>
                    </div>
                </div>
                <x-form-error name="salary"></x-form-error>

                <div>
                    <x-form-button>
                       Save
                    </x-form-button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
