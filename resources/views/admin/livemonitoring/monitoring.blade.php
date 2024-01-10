
<x-app-layout>
    <x-slot name="header">
    {{-- <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">This is the main page.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div> --}}
</x-slot>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Monitoring CCTV</h3>
                <p class="text-subtitle text-muted">Monitoring Video KPI Pegawai</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Monitoring CCTV</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="flex-1 p-10">
        <!-- <h1 class="text-4xl font-bold mb-10">
            Live Monitoring
        </h1> -->
        <div class="grid grid-cols-3 gap-4">
            <!-- Live Feed -->

            <div class="col-span-2">
                <div class="bg-white p-5 rounded-lg shadow-lg mb-5">
                    <div class="flex items-center justify-between mb-3">
                        <h2 class="text-xl font-semibold">
                            CCTV LIVE
                        </h2>
                        <span class="text-blue-500">
                            Camera Ruangan 1
                        </span>
                    </div>
                    <img
                        alt="Live feed of Camera Ruangan 1 showing several people with blurred faces"
                        class="rounded-lg mb-3"
                        height="450"
                        width="1020"
                        src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-CF8V0gH5lBl5PKo9YSBvI1ST/user-3GHcjvVY6DM1Y8bNrH2IgLWW/img-yi9OD07WnTSYILilztsa3u0m.png?st=2023-12-21T01%3A17%3A17Z&amp;se=2023-12-21T03%3A17%3A17Z&amp;sp=r&amp;sv=2021-08-06&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2023-12-20T23%3A00%3A07Z&amp;ske=2023-12-21T23%3A00%3A07Z&amp;sks=b&amp;skv=2021-08-06&amp;sig=bB6rfM%2Bl9RQndo7NcgdNH4hMp3aC2oEZNckqOBZ1H0k%3D"
                        width="600"
                    />
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-2">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                                LIVE
                            </button>
                        </div>
                    </div>
                </div>
            </div>

                        {{-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" id="startLiveBtn">
                            LIVE
                        </button>

                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#startLiveBtn').click(function() {
                                    $.ajax({
                                        url: '{{ route('start.streaming') }}', // Sesuaikan dengan rute yang telah ditentukan
                                        type: 'GET',
                                        success: function(response) {
                                            console.log(response);
                                            // Lakukan tindakan lain sesuai kebutuhan
                                        },
                                        error: function(error) {
                                            console.error('Error:', error);
                                        }
                                    });
                                });
                            });
                        </script>
                        <i class="fas fa-expand">
                        </i>
                    </div>
                </div>

                <!-- Dalam HTML Laravel Blade -->

                {{-- <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" id="startLiveBtn">
                    LIVE LIVE
                </button>

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#startLiveBtn').click(function() {
                            $.ajax({
                                url: '{{ route('start.streaming') }}', // Sesuaikan dengan rute yang telah ditentukan
                                type: 'GET',
                                success: function(response) {
                                    console.log(response);
                                    // Lakukan tindakan lain sesuai kebutuhan
                                },
                                error: function(error) {
                                    console.error('Error:', error);
                                }
                            });
                        });
                    });
                </script> --}}


                <!-- Recent Videos -->
                <div class="bg-white p-5 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold mb-3">
                        Video CCTV Terbaru
                    </h2>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <img alt="Thumbnail of CCTV footage from 26 Oktober 2023" class="rounded-lg"
                                height="100"
                                src="https://placehold.co/100x100"
                                width="100" />
                            <div>
                                <h3 class="text-lg font-medium">
                                    CCTV - 26 Oktober 2023
                                </h3>
                                <p class="text-gray-500">
                                    Camera Ruangan 1
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img alt="Thumbnail of CCTV footage from 25 Oktober 2023" class="rounded-lg"
                                height="100"
                                src="https://placehold.co/100x100"
                                width="100" />
                            <div>
                                <h3 class="text-lg font-medium">
                                    CCTV - 25 Oktober 2023
                                </h3>
                                <p class="text-gray-500">
                                    Camera Ruangan 1
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img alt="Thumbnail of CCTV footage from 24 Oktober 2023" class="rounded-lg"
                                height="100"
                                src="https://placehold.co/100x100"
                                width="100" />
                            <div>
                                <h3 class="text-lg font-medium">
                                    CCTV - 24 Oktober 2023
                                </h3>
                                <p class="text-gray-500">
                                    Camera Ruangan 1
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img alt="Thumbnail of CCTV footage from 23 Oktober 2023" class="rounded-lg"
                                src="https://placehold.co/100x100" />
                            <div>
                                <h3 class="text-lg font-medium">
                                    CCTV - 23 Oktober 2023
                                </h3>
                                <p class="text-gray-500">
                                    Camera Ruangan 1
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{% endblock %}
</x-app-layout>
