@include('partials.header')
<x-topnav />
<x-try />
<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
    <!-- START DASHBOARD -->
    <div class="bg-slate-200 h-screen w-full overflow-y-auto">
        <div class="p-8">
            <div class="grid grid-cols-1 md:cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Admin</li>
                            <li class="font-extrabold text-slate-800 text-xl">45</li>
                            <i class="ri-admin-fill mr-3 text-lg"></i>
                        </ul>
                    </div>
                </div>

                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Collector</li>
                            <li class="font-extrabold text-slate-800 text-xl">50</li>
                            <i class="ri-map-pin-user-fill mr-3 text-lg"></i>
                        </ul>
                    </div>
                </div>

                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Residents</li>
                            <li class="font-extrabold text-slate-800 text-xl">2000</li>
                            <i class="ri-user-fill mr-3 text-lg"></i>
                        </ul>
                    </div>
                </div>

                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Truck</li>
                            <li class="font-extrabold text-slate-800 text-xl">5</li>
                            <i class="ri-truck-fill"></i>
                        </ul>
                    </div>
                </div>


 <!-- Component Start -->
<div class="flex flex-col items-center w-full max-w-screen-md p-6 pb-6 bg-white rounded-lg shadow-xl sm:p-8 col-span-2 ">
    <h2 class="text-xl font-bold">Waste Collection</h2>
    <span class="text-sm font-semibold text-gray-500">OCTOBER 2023</span>
    <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block"></span>
            <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-16 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">178</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">179</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">180</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">181</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">182</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">183</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-16 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">184</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">185</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-32 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">186</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-12 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
            <span class="absolute bottom-0 text-xs font-bold">187</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
            <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-40 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">188</span>
        </div>
    </div>
</div>
<!-- Bar Chart End  -->

    <!-- Pie Chart Start -->
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                    <div class="flex justify-between mb-2 items-start">
                        <div class="font-medium">Barangay</div>
                    </div>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {

                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Brgy 178',     11],
                            ['Brgy 179',      2],
                            ['Brgy 180',  2],
                            ['Brgy 181', 2],
                            ['Brgy 182',    7]
                            ]);

                            var options = {

                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart" style="width: 420px; height: 295px;"></div>
                </div>
                <!-- Pie Chart End -->
            </div>
        </div>
    </div>
</main>
<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
    <!-- START DASHBOARD -->
    <div class="bg-slate-200 h-screen w-full overflow-y-auto">
        <div class="p-8">
            <div class="grid grid-cols-1 md:cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Admin</li>
                            <li class="font-extrabold text-slate-800 text-xl">45</li>
                            <i class="ri-admin-fill mr-3 text-lg"></i>
                        </ul>
                    </div>
                </div>

                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Collector</li>
                            <li class="font-extrabold text-slate-800 text-xl">50</li>
                            <i class="ri-map-pin-user-fill mr-3 text-lg"></i>
                        </ul>
                    </div>
                </div>

                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Residents</li>
                            <li class="font-extrabold text-slate-800 text-xl">2000</li>
                            <i class="ri-user-fill mr-3 text-lg"></i>
                        </ul>
                    </div>
                </div>

                <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                    <div class="w-3/5 flex justify-start">
                        <ul>
                            <li class="font-bold text-gray-400">Truck</li>
                            <li class="font-extrabold text-slate-800 text-xl">5</li>
                            <i class="ri-truck-fill"></i>
                        </ul>
                    </div>
                </div>


 <!-- Component Start -->
<div class="flex flex-col items-center w-full max-w-screen-md p-6 pb-6 bg-white rounded-lg shadow-xl sm:p-8 col-span-2 ">
    <h2 class="text-xl font-bold">Waste Collection</h2>
    <span class="text-sm font-semibold text-gray-500">OCTOBER 2023</span>
    <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block"></span>
            <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-16 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">178</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">179</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">180</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">181</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
            <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">182</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">183</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-16 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">184</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">185</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-32 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">186</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
            <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-12 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
            <span class="absolute bottom-0 text-xs font-bold">187</span>
        </div>
        <div class="relative flex flex-col items-center flex-grow pb-5 group">
            <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
            <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
            <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
            <div class="relative flex justify-center w-full h-40 bg-indigo-400"></div>
            <span class="absolute bottom-0 text-xs font-bold">188</span>
        </div>
    </div>
</div>
<!-- Bar Chart End  -->

    <!-- Pie Chart Start -->
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                    <div class="flex justify-between mb-2 items-start">
                        <div class="font-medium">Barangay</div>
                    </div>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {

                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Brgy 178',     11],
                            ['Brgy 179',      2],
                            ['Brgy 180',  2],
                            ['Brgy 181', 2],
                            ['Brgy 182',    7]
                            ]);

                            var options = {

                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                            chart.draw(data, options);
                        }
                    </script>
                    <div id="piechart" style="width: 420px; height: 295px;"></div>
                </div>
                <!-- Pie Chart End -->
            </div>
        </div>
    </div>
</main>

@include('partials.footer')
