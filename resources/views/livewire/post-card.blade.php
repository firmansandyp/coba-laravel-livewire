<div class='flex flex-col justify-start items-start gap-5 p-8 bg-white rounded-lg'>
    <div class='flex flex-col'>
        <span class='text-xl font-semibold'>{{ $post->title }}</span>
        <span class='text-sm text-gray-500'>Written by: {{ $post->user->name }}</span>
    </div>
    <textarea wire:model='contentInput' class='transition-all ease-in-out duration-200 w-full h-32 rounded-lg bg-gray-100 border-0 hover:ring-4 hover:ring-teal-700/30 focus:ring-4 focus:ring-teal-700/30'>{{ $post->content }}</textarea>
    <button wire:click='update' class='self-end transition-all ease-in-out duration-200 bg-teal-700 hover:bg-teal-800 hover:ring-4 hover:ring-teal-700/30 rounded-lg py-2 px-5 text-white'>Update</button>
</div>
