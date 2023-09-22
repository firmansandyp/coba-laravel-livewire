<div class='flex flex-col rounded-lg shadow-md p-5 bg-white gap-5'>
    <button wire:click='increment' class='transition-all ease-in-out duration-200 flex flex-row justify-center items-center text-white py-1 px-5 bg-teal-700 rounded-lg hover:bg-teal-800 hover:ring-4 hover:ring-teal-700/30'>+ add</button>
    <input wire:model='count' type='text' class='transition-all ease-in-out duration-200 bg-gray-100 border-0 focus:ring-4 focus:ring-teal-700/30 hover:ring-4 hover:ring-teal-700/30 py-2 px-5 rounded-lg'>
</div>