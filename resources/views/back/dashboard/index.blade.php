@extends('back.layout.template')
@section('title', 'Dashboard | Admin')
@section('content')
    {{-- section harus sama dengan yeild --}}

    {{-- content --}}

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
          <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
              <!-- breadcrumb -->
              <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                  <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
              </ol>
              <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
            </nav>
          </div>
        </nav>

        <!-- end Navbar -->

        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
          <!-- row 1 -->
          <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                  <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                      <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Article</p>
                        <h5 class="mb-0 font-bold">
                          {{ $total_articles }} Article
                          <a href="{{ url('article') }}"><span class="text-sm leading-normal font-weight-bolder text-lime-500">Views</span></a>
                        </h5>
                      </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                      <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                        <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                  <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                      <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Categories</p>
                        <h5 class="mb-0 font-bold">
                          {{ $total_categories }} Categories
                          <a href="{{ url('categories') }}"><span class="text-sm leading-normal font-weight-bolder text-lime-500">Views</span></a>
                        </h5>
                      </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                      <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                        <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                  <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                      <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">New Clients</p>
                        <h5 class="mb-0 font-bold">
                          +3,462
                          <span class="text-sm leading-normal text-red-600 font-weight-bolder">-2%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                      <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                        <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="w-full px-6 py-6 mx-auto">
            <!-- card 1 -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                  <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                      <h6>Detail Article</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                      <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                          <thead class="align-bottom">
                            <tr>
                              <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                              <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                              <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Category</th>
                              <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Created At</th>
                              <th class="px-6 py-3 font-semibold capitalize text-center align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($latest_articles as $item)

                            <tr>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class=" px-2 py-1">
                                  <div class="justify-center text-center">
                                    <h6 class="mb-0 text-sm leading-normal">{{ $loop->iteration }}</h6>
                                  </div>
                                </div>
                              </td>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparentp-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->title }}</p>
                              </td>
                              <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->Category->name }}</p>
                              </td>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->created_at }}</p>
                              </td>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <a href="{{ url('article/'.$item->id) }}" class="text-xs font-semibold leading-tight text-slate-400"> <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Detail</span> </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            <!-- card 2 -->

            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                  <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                      <h6>Popular Article</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                      <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                          <thead class="align-bottom">
                            <tr>
                              <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                              <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                              <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Category</th>
                              <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Views</th>
                              <th class="px-6 py-3 font-semibold capitalize text-center align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($popular_articles as $item)

                            <tr>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class=" px-2 py-1">
                                  <div class="justify-center text-center">
                                    <h6 class="mb-0 text-sm leading-normal">{{ $loop->iteration }}</h6>
                                  </div>
                                </div>
                              </td>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->title }}</p>
                              </td>
                              <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->Category->name }}</p>
                              </td>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight">{{ $item->views }}</p>
                              </td>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <a href="{{ url('article/'.$item->id) }}" class="text-xs font-semibold leading-tight text-slate-400"> <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Detail</span> </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
              <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                  <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                    ©
                    <script>
                      document.write(new Date().getFullYear() + ",");
                    </script>
                    made with <i class="fa fa-heart"></i> by
                    <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                    for a better web.
                  </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                  <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <!-- end cards -->
      </main>
    {{-- footer --}}
@endsection
