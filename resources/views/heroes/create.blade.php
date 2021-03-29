@extends('layouts.app')

@section('content')
    <div class="py-5 px-10 flex flex-col flex-wrap">
        <div class="mt-8 p-4">
            <div class="grid justify-items-center">
                <h1 class="text-4xl font-black mb-4">Fill the information about hero</h1>
            </div>
            <form method="POST" action="{{ route('heroes.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col flex-wrap">
                    <div class="flex flex-row justify-between flex-wrap">
                        <div class="flex flex-col">
                            <label for="name">Name:</label>
                            <input name="name" placeholder="Hero name" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                        </div>
                        <div class="flex flex-col">
                            <label for="name">Full name:</label>
                            <input name="full_name" placeholder="Hero full name" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                        </div>
                        <div class="flex flex-col">
                            <label for="gender">Gender:</label>
                            <svg class="w-2 h-auto absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <select name="gender" class="border border-gray-300 text-gray-600 h-auto w-auto rounded pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                <option value="null">Select hero gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mr-10 flex flex-col">
                            <label for="name">Race:</label>
                            <input name="race" placeholder="Hero race" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                        </div>
                    </div>
                    <h3 class="text-2xl font-black my-4">Biography:</h3>
                    <div class="flex flex-col flex-wrap">
                        <div class="flex flex-row justify-between flex-wrap">
                            <div class="flex flex-col">
                                <label for="name">Place of birth:</label>
                                <input name="place_of_birth" placeholder="Place of birth" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="name">Alignment:</label>
                                <input name="alignment" placeholder="Hero alignment" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="name">First appearance:</label>
                                <input name="first_appearance" placeholder="First appearance of hero" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="name">Publisher:</label>
                                <input name="publisher" placeholder="Hero publisher" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="alter_egos">Alter ego:</label>
                                <input name="alter_egos" placeholder="Hero alter ego" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black my-4">Power statistics:</h3>
                        <div class="flex flex-wrap space-x-8">
                            <div class="flex flex-col">
                                <label for="intelligence">Intelligence:</label>
                                <input type="number" name="intelligence" placeholder="%" min="0" max="100" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="intelligence">Strength:</label>
                                <input type="number" name="strength" placeholder="%" min="0" max="100" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="intelligence">Speed:</label>
                                <input type="number" name="speed" placeholder="%" min="0" max="100" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="intelligence">Durability:</label>
                                <input type="number" name="durability" placeholder="%" min="0" max="100" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="intelligence">Power:</label>
                                <input type="number" name="power" placeholder="%" min="0" max="100" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="intelligence">Combat:</label>
                                <input type="number" name="combat" placeholder="%" min="0" max="100" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black my-4">Appearance:</h3>
                        <div class="flex flex-row justify-start flex-wrap">
                            <div class="mr-5">
                                <label for="intelligence">Height:</label>
                                <div class="flex flex-row space-x-2">
                                    <input type="number" name="height[cm]" placeholder="cm" min="1" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                                    <input type="number" name="height[ft]" placeholder="feet" min="1" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                                </div>
                            </div>
                            <div class="">
                                <label for="intelligence">Weight:</label>
                                <div class="flex flex-row space-x-2">
                                    <input type="number" name="weight[kg]" placeholder="kg" min="1" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                                    <input type="number" name="weight[lb]" placeholder="lb" min="1" class="shadow w-20 appearance-none border rounded py-2 px-3 text-grey-darker">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-start flex-wrap mt-2">
                            <div class="flex flex-col mr-5">
                                <label for="name">Eye color:</label>
                                <input name="eye_color" placeholder="Hero eye color" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="name">Hair color:</label>
                                <input name="hair_color" placeholder="Hero hair color" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                        </div>
                        <h3 class="text-2xl font-black my-4">Other:</h3>
                        <div class="flex flex-row justify-between flex-wrap">
                            <div class="flex flex-col">
                                <label for="alias">Alias:</label>
                                <input name="alias" placeholder="Also known" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="name">Occupation:</label>
                                <input name="occupation" placeholder="Hero occupation" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="base">Base:</label>
                                <input name="base" placeholder="Hero based in" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="name">Group:</label>
                                <input name="group_affiliation" placeholder="Hero's group" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                            <div class="flex flex-col">
                                <label for="name">Relatives:</label>
                                <input name="relatives" placeholder="Hero's relatives" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
                            </div>
                        </div>
                    </div>
                    <p class="my-2">Add hero photo:</p>
                    <input class="" name="image" type="file">
                </div>
                <button type="submit"
                    class="border border-green-500 w-24 bg-green-500 text-white rounded-md py-2 mt-3 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline"
                >
                    Create
                </button>
            </form>
        </div>
    </div>
@endsection
