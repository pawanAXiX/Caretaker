<div>
    <form wire:submit.prevent="save" class="max-w-sm mx-auto text-4xl">
        <label for="email" class="block text-center mb-2 text-capitalize font-weight-bolder  text-gray-900 dark:text-white">Pre-Register Now</label>
        <div class="form-group flex ">
        <input type="email" id="email" wire:model="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Email">
        <input type="hidden" id="ip" wire:model="ip"/><input type="hidden" id="country" wire:model="country"/>
            <button class=" border-solid border-1  btn text-red-500 ml-5 btn-red cursor-pointer">Run</button>
        </div>
        @error('email') <span class="text-red-500">Email is already used</span> @enderror
        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll never share your details. Read our <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>
    </form>
    @error('email')
    <dialog id="my_modal_2" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Hello!</h3>
            <p class="py-4">Press ESC key or click outside to close</p>
        </div>

    </dialog>
    @enderror
</div>

@script
<script>
    window.onload = async function() {
        const email_input =document.getElementById("email")
        const ip = document.getElementById("ip");
        const country = document.getElementById("country");
            try {
                const response = await fetch('http://ip-api.com/json/');
                const data = await response.json();
                const userIP = data.query;
                const userCountry = data.country;
                ip.value = userIP;
                country.value = userCountry;
                let event = new Event('input', { bubbles: true });
                ip.dispatchEvent(event)
                country.dispatchEvent(event)
            }
            catch (error)
            {
                    console.error('Error fetching IP info:', error);
            }
    }
</script>
@endscript
