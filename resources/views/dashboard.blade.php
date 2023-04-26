<x-app-layout>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>About</th>
                            </tr>
                        </thead>
                    </table>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable({
                                processing: true,
                                lengthChange: false,
                                ajax: {
                                    url: '{{ url("/home/getPeople") }}',
                                    type: 'GET'
                                },
                                columns: [
                                    { data: 'name' },
                                    { data: 'email' },
                                    { data: 'about' }
                                ]
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
