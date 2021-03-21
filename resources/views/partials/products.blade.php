<div class="container my-12 mx-auto px-4 md:px-12">
    <h2 class="text-2xl"> Products </h2>

    <div class="flex flex-wrap -mx-1 lg:-mx-4">

    @foreach($products as $product)

        <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="#">
                                {{ $product->name }}
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            ${{ $product->price }}
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
{{--                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">--}}
                            <p class="ml-2 text-sm">
                               {{ $product->sub_title }}
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->

        @endforeach


    </div>
</div>
