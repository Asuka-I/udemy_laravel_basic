<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            詳細画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <section class="text-gray-400 bg-gray-900 body-font relative">
                        <div class="container px-5 mx-auto">
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">

                                    {{-- name --}}
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-400">氏名</label>
                                            <div
                                                class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                {{ $contact->name }}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- title --}}
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="title" class="leading-7 text-sm text-gray-400">件名</label>
                                            <div
                                                class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                {{ $contact->title }}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- email --}}
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="email"
                                                class="leading-7 text-sm text-gray-400">メールアドレス</label>
                                            <div
                                                class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                {{ $contact->email }}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- url --}}
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="url" class="leading-7 text-sm text-gray-400">ホームページ</label>
                                            @if ($contact->url)
                                                <div
                                                    class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                    {{ $contact->url }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- gender --}}
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="gender" class="leading-7 text-sm text-gray-400">性別</label>
                                            <div
                                                class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                {{ $gender }}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- age --}}
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="gender" class="leading-7 text-sm text-gray-400">年齢</label>
                                            <div
                                                class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                {{ $age }}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- contact --}}
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="contact"
                                                class="leading-7 text-sm text-gray-400">お問い合わせ内容</label>
                                            <div
                                                class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 duration-200 ease-in-out">
                                                {{ $contact->contact }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-col mx-auto">
                                        <form action="{{ route('contacts.edit', ['id' => $contact->id]) }}"
                                            method="get">
                                            <div>
                                                <button
                                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                    編集する
                                                </button>
                                            </div>
                                        </form>
                                        <form action="{{ route('contacts.destroy', ['id' => $contact->id]) }}"
                                            method="post" id="delete_{{ $contact->id }}">
                                            @csrf
                                            <div class="p-2">
                                                <a href="#" data-id="{{ $contact->id }}"
                                                    onclick="deletePost(this)"
                                                    class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">
                                                    削除する
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <!-- 確認メッセージ -->
    <script>
        function deletePost(e) {
            'use strict'
            if (confirm('本当に削除していいですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit()
            }
        }
    </script>
</x-app-layout>
