<div>
    <textarea 
        wire:model="body"
        name="body" 
        id="message" 
        rows="4"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
        placeholder="Leave a comment..."></textarea>
    <div class="text-right mt-4">
        <button 
            wire:click="createPost"
            type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Submit
        </button>
    </div>
</div>
