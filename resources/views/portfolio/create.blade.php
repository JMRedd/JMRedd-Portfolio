<x-guest-layout>

    <!-- Include CKEditor script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-500 px-4 py-2 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mx-auto mt-20">
        <div class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data" id="portfolioForm">
                @csrf

                <div class="mb-4">
                    <h1 class="text-zinc-400 text-5xl">Portfolio Creation</h1>
                </div>

                <div class="mb-4">
                    <label for="image_path" class="block text-zinc-400 text-sm font-bold mb-2">Image:</label>
                    <input type="file" name="image_path" id="image_path" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-zinc-400 text-sm font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded" required>
                </div>

                <div class="mb-4">
                    <label for="project_status" class="block text-zinc-400 text-sm font-bold mb-2">Project Status:</label>
                    <input type="text" name="project_status" id="project_status" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="project_type" class="block text-zinc-400 text-sm font-bold mb-2">Project Type:</label>
                    <input type="text" name="project_type" id="project_type" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="project_duration" class="block text-zinc-400 text-sm font-bold mb-2">Project Duration:</label>
                    <input type="text" name="project_duration" id="project_duration" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="software_used" class="block text-zinc-400 text-sm font-bold mb-2">Software Used:</label>
                    <input type="text" name="software_used" id="software_used" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="languages_used" class="block text-zinc-400 text-sm font-bold mb-2">Languages Used:</label>
                    <input type="text" name="languages_used" id="languages_used" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="primary_roles" class="block text-zinc-400 text-sm font-bold mb-2">Primary Roles:</label>
                    <input type="text" name="primary_roles" id="primary_roles" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="file_path" class="block text-zinc-400 text-sm font-bold mb-2">Downloadable Files:</label>
                    <input type="text" name="file_path" id="file_path" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="itch_link" class="block text-zinc-400 text-sm font-bold mb-2">ITCH.IO Link:</label>
                    <input type="text" name="itch_link" id="itch_link" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="steam_link" class="block text-zinc-400 text-sm font-bold mb-2">STEAM Link:</label>
                    <input type="text" name="steam_link" id="steam_link" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="body" class="block text-zinc-400 text-sm font-bold mb-2">Description:</label>
                    <textarea name="body" id="body" class="bg-gray-600 text-zinc-300 w-full p-2 border rounded"></textarea>
                </div>

                <div class="flex items-center">
                    <button type="button" onclick="validateAndSubmit()" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Create Portfolio Page</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Initialize CKEditor on the textarea -->
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ),{
                ckfinder: {
                    uploadUrl: '{{route('portfolio.upload').'?_token='.csrf_token()}}',
                }
            })
            .catch( error => {

            } );

        function validateAndSubmit() {
            var nameField = document.getElementById('name');
            var projectStatusField = document.getElementById('project_status');
            var projectTypeField = document.getElementById('project_type');
            var projectDurationField = document.getElementById('project_duration');
            var softwareUsedField = document.getElementById('software_used');
            var languagesUsedField = document.getElementById('languages_used');
            var primaryRolesField = document.getElementById('primary_roles');

            if (
                nameField.checkValidity() &&
                projectStatusField.checkValidity() &&
                projectTypeField.checkValidity() &&
                projectDurationField.checkValidity() &&
                softwareUsedField.checkValidity() &&
                languagesUsedField.checkValidity() &&
                primaryRolesField.checkValidity()
            ) {
                document.getElementById('portfolioForm').submit();
            } else {
                alert('Please fill out all required fields.');
            }
        }
    </script>

</x-guest-layout>
