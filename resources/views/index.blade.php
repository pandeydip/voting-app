<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category two">Category two</option>
                <option value="Category three">Category three</option>
                <option value="Category four">Category four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category two">Category two</option>
                <option value="Category three">Category three</option>
                <option value="Category four">Category four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                   class="placeholder-gray-900 w-full rounded-xl bg-white px-4 py-2 pl-8 border-none">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-500 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-500 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Random title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet,
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex item-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex item-center space-x-2" x-data="{ isOpen:false }">
                            <div
                                class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button @click="isOpen = !isOpen"
                                    class="relative  border bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-500 ease-in py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen=false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-500 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-blue text-2xl">18</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 text-white bg-blue bg-gray-200 hover:bg-blue-hover font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-blue transition duration-500 ease-in">
                        Voted
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Yet another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus est eveniet iste quia
                        quisquam rerum? Consequatur, debitis dicta dignissimos dolor, ducimus exercitationem facere
                        fugit harum ipsa ipsum labore laborum libero magni minus molestiae necessitatibus nihil odit
                        officiis quae quaerat quibusdam reiciendis tempora temporibus veritatis voluptas voluptatem
                        voluptatibus! Assumenda blanditiis commodi cumque dolor ex itaque maxime nemo quisquam tempore
                        vero. Autem, cum eos maiores modi necessitatibus perspiciatis rerum voluptas! Alias asperiores
                        ea nisi non nulla officia pariatur rem rerum vero voluptas? Alias corporis debitis distinctio
                        dolorum fugit molestiae mollitia nam non officia quas quasi, quibusdam recusandae saepe sint
                        sunt vitae.
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex item-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex item-center space-x-2">
                            <div
                                class="bg-yellow text-xxs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In Progress
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-500 ease-in py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-500 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">2</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-500 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200?face&crop=face&v=3" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Yet another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus est eveniet iste quia
                        quisquam rerum? Consequatur, debitis dicta dignissimos dolor, ducimus exercitationem facere
                        fugit harum ipsa ipsum labore laborum libero magni minus molestiae necessitatibus nihil odit
                        officiis quae quaerat quibusdam reiciendis tempora temporibus veritatis voluptas voluptatem
                        voluptatibus! Assumenda blanditiis commodi cumque dolor ex itaque maxime nemo quisquam tempore
                        vero. Autem, cum eos maiores modi necessitatibus perspiciatis rerum voluptas! Alias asperiores
                        ea nisi non nulla officia pariatur rem rerum vero voluptas? Alias corporis debitis distinctio
                        dolorum fugit molestiae mollitia nam non officia quas quasi, quibusdam recusandae saepe sint
                        sunt vitae.
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex item-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex item-center space-x-2">
                            <div
                                class="bg-red text-xxs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-500 ease-in py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-500 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-500 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200?face&crop=face&v=4" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Yet another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus est eveniet iste quia
                        quisquam rerum? Consequatur, debitis dicta dignissimos dolor, ducimus exercitationem facere
                        fugit harum ipsa ipsum labore laborum libero magni minus molestiae necessitatibus nihil odit
                        officiis quae quaerat quibusdam reiciendis tempora temporibus veritatis voluptas voluptatem
                        voluptatibus! Assumenda blanditiis commodi cumque dolor ex itaque maxime nemo quisquam tempore
                        vero. Autem, cum eos maiores modi necessitatibus perspiciatis rerum voluptas! Alias asperiores
                        ea nisi non nulla officia pariatur rem rerum vero voluptas? Alias corporis debitis distinctio
                        dolorum fugit molestiae mollitia nam non officia quas quasi, quibusdam recusandae saepe sint
                        sunt vitae.
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex item-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex item-center space-x-2">
                            <div
                                class="bg-green text-xxs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Implemented
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-500 ease-in py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div
            class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-500 ease-in">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">55</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-500 ease-in">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200?face&crop=face&v=5" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Yet another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus est eveniet iste quia
                        quisquam rerum? Consequatur, debitis dicta dignissimos dolor, ducimus exercitationem facere
                        fugit harum ipsa ipsum labore laborum libero magni minus molestiae necessitatibus nihil odit
                        officiis quae quaerat quibusdam reiciendis tempora temporibus veritatis voluptas voluptatem
                        voluptatibus! Assumenda blanditiis commodi cumque dolor ex itaque maxime nemo quisquam tempore
                        vero. Autem, cum eos maiores modi necessitatibus perspiciatis rerum voluptas! Alias asperiores
                        ea nisi non nulla officia pariatur rem rerum vero voluptas? Alias corporis debitis distinctio
                        dolorum fugit molestiae mollitia nam non officia quas quasi, quibusdam recusandae saepe sint
                        sunt vitae.
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex item-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex item-center space-x-2">
                            <div
                                class="bg-purple text-xxs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Considering
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-500 ease-in py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Mark
                                            as spam</a></li>
                                    <li><a href=""
                                           class="hover:bg-gray-100 transition block duration-500 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End ideas-container -->
</x-app-layout>
