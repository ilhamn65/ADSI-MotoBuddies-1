<div>

    <div class="flex justify-start items-end gap-2 mb-2 ">
        <div class="">

            <label class=" text-sm font-bold" for="tipe">Service yang Diinginkan</label>

            <div class="bg-gray-200 px-5 py-2 mt-2">



                @foreach ($chosenServices as $index => $chosenService)
                    <div class="flex justify-evenly gap-3 my-1">

                        <select class="w-60" name="bookedServices[{{ $index }}][service]"
                            wire:model="chosenServices.{{ $index }}.id">
                            @if (!$services->count())
                                <option value="">--- Service Unavailable ---</option>
                            @endif
                            @foreach ($services as $service)
                                <option value="{{ $service }}">{{ $service->nama }}
                                    Rp.{{ $service->harga }}
                                </option>
                            @endforeach
                        </select>
                        <button href="#" class="text-center px-2 py-1 rounded shadow-lg font-bold bg-white  text-red-500"
                            wire:click.prevent="removeService({{ $index }})">
                            X
                        </button>
                    </div>
                @endforeach

            </div>
        </div>


    </div>
    <div class="flex justify-end">
        <button
            class="text-center  px-4 py-2 w-full text-sm rounded shadow-md hover:bg-gray-300 bg-gray-200 text-gray-700"
            wire:click.prevent="addService">
            Tambah Service +
        </button>
    </div>

</div>
