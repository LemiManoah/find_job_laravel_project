<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create an account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">

              <div>
                <x-form-label for='name'>Name</x-form-label>
                  <div class="mt-2">
                     <x-form-input id="name" name="name" type="text"  required placeholder="lemi"></x-form-input>
                  </div>
              </div>
              <x-form-error name="name"></x-form-error>

                <div>
                  <x-form-label for='email'>Email</x-form-label>
                    <div class="mt-2">
                       <x-form-input id="email" name="email" type="email" autocomplete="email" required placeholder="lemi@gmail.com"></x-form-input>
                    </div>
                </div>
                <x-form-error name="email"></x-form-error>

                <div>
                  <x-form-label for='password'>Password</x-form-label>
                    <div class="mt-2">
                       <x-form-input id="password" name="password" type="password" autocomplete="email" required placeholder="********"></x-form-input>
                    </div>
                </div>
                <x-form-error name="password"></x-form-error>

                <div>
                    <x-form-button>
                       Register
                    </x-form-button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
