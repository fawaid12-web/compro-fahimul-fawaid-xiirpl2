<x-guest-layout>
    {{-- MENAMPILKAN DATA --}}
    {{-- sECTION ATAU PANEL --}}
   <section class="w-full flex flex-col
   justify-start items-center border-4 border-emerald-500 p-8">
        <h1 class="text-3xl font-extrabold text-gray-600 text-center">Profile </h1>

        <p class="text-xl text-center">
            {{ $dataCompany->profile }}
        </p>
   </section>

   {{--EDIT DAN UPDATE--}}
    <section class="w-full flex flex-col
      justify-start items-center border-4 border-emerald-500 p-8">
        <form action="/update/{{ $dataCompany->id }}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="profile"cols="60" rows="10" class="w-3/4">
                {{ $dataCompany->profile }}
            </textarea>

            <button type="submit" class="p-4 bg-blue-500 rounded-lg">
                Simpan
            </button>
            </form>
        </section>



</x-guest-layout>
