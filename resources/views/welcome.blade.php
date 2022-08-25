<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meat name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            :root {
            --primary-color: #D96AA7;
            --secondary-color: #422C73;
            --complimentary-color: #88BFB5;
            --contrast-color: #F2E527;
            --light-color: #D2A9D9;
            }

            .container {
            background: #191919;
            min-height: 100vh;
            font-family: Montserrat, sans-serif;
            }

            nav a {
                font-size: 40px;
                color: #fff;
                text-decoration: none;
                padding: 20px;
                text-align: center;
            }

            nav {
                position: fixed;
                left: 0;
                z-index: 50;
                display: flex;
                justify-content: space-around;
                flex-direction: column;
                height: 100vh;
                background: var(--secondary-color);
            }

            section {
                position: absolute;
                top: 0;
                height: 100vh;
                width: 0;
                opacity: 0;
                transition: all ease-in .5s;
                display: flex;
                justify-content: center;
                align-items: center;
            } 

            section h1 {
                color: #fff;
                font-size: 50px;
                text-transform: uppercase;
                opacity: 0;
            }

            /* Styles applied on trigger */
            section:target {
                opacity: 1;
                position: absolute;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 10;
            }

            section:target h1 {
                opacity: 0;
                animation: 2s fadeIn forwards .5s;
            }

            #first {
            background:var(--primary-color);
            }
            #second {
                background: var(--complimentary-color);
            }

            #third {
                background: var(--contrast-color);
            }

            #fourth {
                background: var(--light-color);
            }

            @keyframes fadeIn {
                100% { opacity:1 }
            }
        </style>
   
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- <nav>
                <a href="#first"><i class="far fa-user">Master</i></a>
                <a href="#second"><i class="fas fa-briefcase">Second</i></a>
                <a href="#third"><i class="far fa-file">Third</i></a>
                <a href="#fourth"><i class="far fa-address-card">Forth</i></a>
            </nav> -->
            
            <div class= 'container'> 
                <section id= 'first'>
                    <!-- <h1>{{$master}}</h1>
                    <br>
                    <p><label>Selection</label></p>
                    　<select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                        <optgroup label="系统设置">
                            <option value="1">用户管理</option>
                            <option value="2">角色管理</option>
                            <option value="3">部门管理</option>
                            <option value="4">菜单管理</option>
                        </optgroup>
                        <optgroup label="订单管理">
                            <option value="5">订单查询</option>
                            <option value="6">订单导入</option>
                            <option value="7">订单删除</option>
                            <option value="8">订单撤销</option>
                        </optgroup>
                        <optgroup label="基础数据">
                            <option value="9">基础数据维护</option>
                        </optgroup>
                    </select> -->
                <!-- <p><input type="text" id="search_data" placeholder="" autocomplete="off" class="form-control input-lg" /></p> -->
                <select name="namelist" id="namelist">
                    <option value=" ">--Select--</option>
                </select>
                </section>
                
                <!-- <section id= 'second'>
                    <h1>Second</h1>
                    <p>{{$happy}}</p>
                </section>
                
                <section id= 'third'>
                    <h1>Third</h1>
                    <h2><br>{{config('app.key')}}<h2>
                </section>
                
                <section id= 'fourth'>
                    <h1>Fourth</h1>
                </section> -->
            </div>
        </div>
        <script type="text/javascript">

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $(document).ready(function(){

                $('#namelist').select2({
                    ajax:{
                        url:"{{route('names')}}",
                        type: 'post',
                        dataType: 'json',
                        delay: 250,
                        data: function(params){
                            return{
                                _token: CSRF_TOKEN,
                                search: params.term
                            }
                        },
                        processResults: function(response){
                            return{
                                results: response
                            }
                        },
                        cache: true
                    }
                });

            });
        </script>
    </body>

</html>
