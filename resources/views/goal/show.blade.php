@extends('main')

@section('title', 'My week')

@section('style')
    @vite('resources/css/goalShow.css')
@endsection

@section('content')

<div class="content__container">
    <div class="content">
        <div class="tasks">
            <div class="tasks__title">
                <h1>Цілі і завдання</h1>
            </div>
            <div class="tasks__flex__container">
                <div class="tasks__flex" id="x-custom__scrollbar">
                    {{-- UNFINISHED --}}
                    <div class="tasks__flex__block__parent">
                        <div class="tasks__flex__block unfinished">
                            <div class="title">
                                Незавершені
                            </div>
                            <div class="flex">
                                <div class="task p5">
                                    <p>Завершити блок з цілями<span>...</span></p>
                                </div>
                                <div class="task p4">
                                    <p>Завершити блок з цілями<span>...</span></p>
                                </div>
                                <div class="task p3">
                                    <p>Завершити блок з цілями<span>...</span></p>
                                </div>
                                <div class="task p2">
                                    <p>Завершити блок з цілями<span>...</span></p>
                                </div>
                                <div class="task p1">
                                    <p>Завершити блок з цілями<span>...</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($goals as $goal)
                        <div class="tasks__flex__block__parent">
                            <div class="tasks__flex__block">
                                <div class="title">
                                    {{ $goal->name }}
                                </div>
                                <div class="flex">
                                    <div class="task p5">
                                        <img src="{{ asset('storage/images/completed.png') }}" alt="" class="completed">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task__create" goal_id="{{ $goal->id }}">+</div>
                                </div>
                                <div class="image">
                                    <img src="{{ $goal->image }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="days">
            <div class="days__title">
                <h1>Дні тижня</h1>
            </div>
            <div class="days__flex__container">
                <div class="days__flex" id="x-custom__scrollbar">
                    @foreach ($days as $day)
                        <div class="days__flex__block__parent">
                            <div class="days__flex__block">
                                <div class="title">
                                    <h1>{{ $day['day_number'] }}</h1>
                                    <p>{{ $day['date'] }}</p>
                                    <div class="progress" style="width: 216px; border: 1px solid black; margin: 0 auto; height: 8px;" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%; background-color: rgb(73, 230, 0);"></div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="task p5">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p4">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p3">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p2">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p1">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p1">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p1">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p1">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p1">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                    <div class="task p1">
                                        <p>Завершити блок з цілями<span>...</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="task__create__modal d-none">

            <div class="task__create">
                <div class="title">
                    <h1>Нове завдання<span>🚀</span></h1>
                </div>
                <form action="{{ route('task.store') }}" method="POST">
                    @csrf
                    <input class="task__goal_id" type="hidden" name="goal_id">
                    <div class="priority__parent">
                        <div class="d-flex justify-content-between">
                            <label for="priority">Рівень приорітету<span style="color: red;">*</span></label>
                            <svg class="priority__hint" style="position: relative; top: 5px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20" width="20" version="1.1" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 61.898 c -1.657 0 -3 -1.344 -3 -3 v -6.612 c 0 -0.825 0.34 -1.614 0.94 -2.182 l 9.553 -9.019 c 1.873 -1.946 2.903 -4.502 2.903 -7.206 v -0.357 c 0 -2.827 -1.115 -5.471 -3.141 -7.445 c -2.025 -1.974 -4.693 -3.031 -7.532 -2.947 c -5.58 0.144 -10.12 4.941 -10.12 10.694 c 0 1.657 -1.343 3 -3 3 s -3 -1.343 -3 -3 c 0 -8.978 7.162 -16.465 15.965 -16.692 c 4.467 -0.122 8.68 1.536 11.874 4.648 c 3.194 3.113 4.953 7.283 4.953 11.742 v 0.357 c 0 4.295 -1.649 8.356 -4.646 11.434 c -0.029 0.03 -0.06 0.06 -0.09 0.089 L 48 53.579 v 5.319 C 48 60.555 46.657 61.898 45 61.898 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 73.87 c -0.26 0 -0.52 -0.021 -0.78 -0.07 c -0.26 -0.06 -0.51 -0.13 -0.75 -0.23 c -0.24 -0.1 -0.47 -0.229 -0.69 -0.369 c -0.22 -0.15 -0.42 -0.311 -0.61 -0.5 C 41.43 71.96 41 70.93 41 69.87 c 0 -0.261 0.03 -0.521 0.08 -0.78 c 0.05 -0.25 0.13 -0.51 0.23 -0.75 s 0.22 -0.47 0.36 -0.69 c 0.15 -0.22 0.32 -0.42 0.5 -0.609 c 0.19 -0.181 0.39 -0.351 0.61 -0.49 c 0.22 -0.15 0.45 -0.27 0.69 -0.37 c 0.24 -0.1 0.49 -0.18 0.75 -0.229 c 0.51 -0.101 1.05 -0.101 1.56 0 c 0.26 0.05 0.51 0.13 0.75 0.229 c 0.239 0.101 0.47 0.22 0.689 0.37 c 0.22 0.14 0.42 0.31 0.61 0.49 c 0.18 0.189 0.35 0.39 0.5 0.609 c 0.14 0.221 0.26 0.45 0.359 0.69 c 0.101 0.24 0.181 0.5 0.23 0.75 c 0.05 0.26 0.08 0.52 0.08 0.78 c 0 1.06 -0.431 2.09 -1.17 2.83 C 47.08 73.45 46.05 73.87 45 73.87 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 90 C 20.187 90 0 69.813 0 45 S 20.187 0 45 0 s 45 20.187 45 45 S 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                            <input class="task__priority" type="hidden" name="priority">
                        </div>
                        <div class="flex">
                            <svg class="priority p1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 69.671 88.046 c -0.808 0 -1.62 -0.195 -2.37 -0.59 L 45 75.732 L 22.7 87.456 c -1.727 0.907 -3.779 0.757 -5.356 -0.388 c -1.577 -1.146 -2.352 -3.052 -2.023 -4.972 l 4.259 -24.832 L 1.539 39.678 c -1.396 -1.361 -1.889 -3.358 -1.287 -5.213 c 0.603 -1.854 2.176 -3.181 4.105 -3.461 l 24.932 -3.622 L 40.44 4.79 C 41.303 3.041 43.05 1.955 45 1.955 c 0 0 0 0 0.001 0 c 1.949 0 3.696 1.086 4.559 2.834 l 11.15 22.592 l 24.932 3.623 c 1.93 0.28 3.503 1.606 4.105 3.461 c 0.603 1.854 0.109 3.851 -1.287 5.213 L 70.419 57.264 l 4.26 24.832 c 0.329 1.921 -0.446 3.827 -2.023 4.972 C 71.764 87.717 70.721 88.046 69.671 88.046 z M 7.055 36.676 l 17.058 16.628 c 1.198 1.167 1.746 2.85 1.462 4.502 l -4.027 23.479 l 21.086 -11.086 c 1.481 -0.779 3.25 -0.779 4.732 0 l 21.085 11.086 l -4.027 -23.48 c -0.283 -1.649 0.264 -3.333 1.463 -4.501 l 17.058 -16.628 L 59.372 33.25 c -1.658 -0.242 -3.089 -1.282 -3.829 -2.783 L 45 9.106 L 34.457 30.468 c -0.74 1.5 -2.171 2.54 -3.827 2.782 L 7.055 36.676 z M 84.779 36.942 h 0.011 H 84.779 z M 44.18 7.444 c 0 0 0 0.001 0.001 0.002 L 44.18 7.444 C 44.18 7.445 44.18 7.445 44.18 7.444 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                            <svg class="priority p2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 69.671 88.046 c -0.808 0 -1.62 -0.195 -2.37 -0.59 L 45 75.732 L 22.7 87.456 c -1.727 0.907 -3.779 0.757 -5.356 -0.388 c -1.577 -1.146 -2.352 -3.052 -2.023 -4.972 l 4.259 -24.832 L 1.539 39.678 c -1.396 -1.361 -1.889 -3.358 -1.287 -5.213 c 0.603 -1.854 2.176 -3.181 4.105 -3.461 l 24.932 -3.622 L 40.44 4.79 C 41.303 3.041 43.05 1.955 45 1.955 c 0 0 0 0 0.001 0 c 1.949 0 3.696 1.086 4.559 2.834 l 11.15 22.592 l 24.932 3.623 c 1.93 0.28 3.503 1.606 4.105 3.461 c 0.603 1.854 0.109 3.851 -1.287 5.213 L 70.419 57.264 l 4.26 24.832 c 0.329 1.921 -0.446 3.827 -2.023 4.972 C 71.764 87.717 70.721 88.046 69.671 88.046 z M 7.055 36.676 l 17.058 16.628 c 1.198 1.167 1.746 2.85 1.462 4.502 l -4.027 23.479 l 21.086 -11.086 c 1.481 -0.779 3.25 -0.779 4.732 0 l 21.085 11.086 l -4.027 -23.48 c -0.283 -1.649 0.264 -3.333 1.463 -4.501 l 17.058 -16.628 L 59.372 33.25 c -1.658 -0.242 -3.089 -1.282 -3.829 -2.783 L 45 9.106 L 34.457 30.468 c -0.74 1.5 -2.171 2.54 -3.827 2.782 L 7.055 36.676 z M 84.779 36.942 h 0.011 H 84.779 z M 44.18 7.444 c 0 0 0 0.001 0.001 0.002 L 44.18 7.444 C 44.18 7.445 44.18 7.445 44.18 7.444 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                            <svg class="priority p3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 69.671 88.046 c -0.808 0 -1.62 -0.195 -2.37 -0.59 L 45 75.732 L 22.7 87.456 c -1.727 0.907 -3.779 0.757 -5.356 -0.388 c -1.577 -1.146 -2.352 -3.052 -2.023 -4.972 l 4.259 -24.832 L 1.539 39.678 c -1.396 -1.361 -1.889 -3.358 -1.287 -5.213 c 0.603 -1.854 2.176 -3.181 4.105 -3.461 l 24.932 -3.622 L 40.44 4.79 C 41.303 3.041 43.05 1.955 45 1.955 c 0 0 0 0 0.001 0 c 1.949 0 3.696 1.086 4.559 2.834 l 11.15 22.592 l 24.932 3.623 c 1.93 0.28 3.503 1.606 4.105 3.461 c 0.603 1.854 0.109 3.851 -1.287 5.213 L 70.419 57.264 l 4.26 24.832 c 0.329 1.921 -0.446 3.827 -2.023 4.972 C 71.764 87.717 70.721 88.046 69.671 88.046 z M 7.055 36.676 l 17.058 16.628 c 1.198 1.167 1.746 2.85 1.462 4.502 l -4.027 23.479 l 21.086 -11.086 c 1.481 -0.779 3.25 -0.779 4.732 0 l 21.085 11.086 l -4.027 -23.48 c -0.283 -1.649 0.264 -3.333 1.463 -4.501 l 17.058 -16.628 L 59.372 33.25 c -1.658 -0.242 -3.089 -1.282 -3.829 -2.783 L 45 9.106 L 34.457 30.468 c -0.74 1.5 -2.171 2.54 -3.827 2.782 L 7.055 36.676 z M 84.779 36.942 h 0.011 H 84.779 z M 44.18 7.444 c 0 0 0 0.001 0.001 0.002 L 44.18 7.444 C 44.18 7.445 44.18 7.445 44.18 7.444 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                            <svg class="priority p4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 69.671 88.046 c -0.808 0 -1.62 -0.195 -2.37 -0.59 L 45 75.732 L 22.7 87.456 c -1.727 0.907 -3.779 0.757 -5.356 -0.388 c -1.577 -1.146 -2.352 -3.052 -2.023 -4.972 l 4.259 -24.832 L 1.539 39.678 c -1.396 -1.361 -1.889 -3.358 -1.287 -5.213 c 0.603 -1.854 2.176 -3.181 4.105 -3.461 l 24.932 -3.622 L 40.44 4.79 C 41.303 3.041 43.05 1.955 45 1.955 c 0 0 0 0 0.001 0 c 1.949 0 3.696 1.086 4.559 2.834 l 11.15 22.592 l 24.932 3.623 c 1.93 0.28 3.503 1.606 4.105 3.461 c 0.603 1.854 0.109 3.851 -1.287 5.213 L 70.419 57.264 l 4.26 24.832 c 0.329 1.921 -0.446 3.827 -2.023 4.972 C 71.764 87.717 70.721 88.046 69.671 88.046 z M 7.055 36.676 l 17.058 16.628 c 1.198 1.167 1.746 2.85 1.462 4.502 l -4.027 23.479 l 21.086 -11.086 c 1.481 -0.779 3.25 -0.779 4.732 0 l 21.085 11.086 l -4.027 -23.48 c -0.283 -1.649 0.264 -3.333 1.463 -4.501 l 17.058 -16.628 L 59.372 33.25 c -1.658 -0.242 -3.089 -1.282 -3.829 -2.783 L 45 9.106 L 34.457 30.468 c -0.74 1.5 -2.171 2.54 -3.827 2.782 L 7.055 36.676 z M 84.779 36.942 h 0.011 H 84.779 z M 44.18 7.444 c 0 0 0 0.001 0.001 0.002 L 44.18 7.444 C 44.18 7.445 44.18 7.445 44.18 7.444 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                            <svg class="priority p5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 69.671 88.046 c -0.808 0 -1.62 -0.195 -2.37 -0.59 L 45 75.732 L 22.7 87.456 c -1.727 0.907 -3.779 0.757 -5.356 -0.388 c -1.577 -1.146 -2.352 -3.052 -2.023 -4.972 l 4.259 -24.832 L 1.539 39.678 c -1.396 -1.361 -1.889 -3.358 -1.287 -5.213 c 0.603 -1.854 2.176 -3.181 4.105 -3.461 l 24.932 -3.622 L 40.44 4.79 C 41.303 3.041 43.05 1.955 45 1.955 c 0 0 0 0 0.001 0 c 1.949 0 3.696 1.086 4.559 2.834 l 11.15 22.592 l 24.932 3.623 c 1.93 0.28 3.503 1.606 4.105 3.461 c 0.603 1.854 0.109 3.851 -1.287 5.213 L 70.419 57.264 l 4.26 24.832 c 0.329 1.921 -0.446 3.827 -2.023 4.972 C 71.764 87.717 70.721 88.046 69.671 88.046 z M 7.055 36.676 l 17.058 16.628 c 1.198 1.167 1.746 2.85 1.462 4.502 l -4.027 23.479 l 21.086 -11.086 c 1.481 -0.779 3.25 -0.779 4.732 0 l 21.085 11.086 l -4.027 -23.48 c -0.283 -1.649 0.264 -3.333 1.463 -4.501 l 17.058 -16.628 L 59.372 33.25 c -1.658 -0.242 -3.089 -1.282 -3.829 -2.783 L 45 9.106 L 34.457 30.468 c -0.74 1.5 -2.171 2.54 -3.827 2.782 L 7.055 36.676 z M 84.779 36.942 h 0.011 H 84.779 z M 44.18 7.444 c 0 0 0 0.001 0.001 0.002 L 44.18 7.444 C 44.18 7.445 44.18 7.445 44.18 7.444 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <p class="error priority__error"></p>
                    <div class="form-item">
                        <div class="d-flex justify-content-between">
                            <label for="name">Суть завдання<span style="color: red;">*</span></label>
                            <svg class="name__hint" style="position: relative; top: 5px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20" width="20" version="1.1" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 61.898 c -1.657 0 -3 -1.344 -3 -3 v -6.612 c 0 -0.825 0.34 -1.614 0.94 -2.182 l 9.553 -9.019 c 1.873 -1.946 2.903 -4.502 2.903 -7.206 v -0.357 c 0 -2.827 -1.115 -5.471 -3.141 -7.445 c -2.025 -1.974 -4.693 -3.031 -7.532 -2.947 c -5.58 0.144 -10.12 4.941 -10.12 10.694 c 0 1.657 -1.343 3 -3 3 s -3 -1.343 -3 -3 c 0 -8.978 7.162 -16.465 15.965 -16.692 c 4.467 -0.122 8.68 1.536 11.874 4.648 c 3.194 3.113 4.953 7.283 4.953 11.742 v 0.357 c 0 4.295 -1.649 8.356 -4.646 11.434 c -0.029 0.03 -0.06 0.06 -0.09 0.089 L 48 53.579 v 5.319 C 48 60.555 46.657 61.898 45 61.898 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 73.87 c -0.26 0 -0.52 -0.021 -0.78 -0.07 c -0.26 -0.06 -0.51 -0.13 -0.75 -0.23 c -0.24 -0.1 -0.47 -0.229 -0.69 -0.369 c -0.22 -0.15 -0.42 -0.311 -0.61 -0.5 C 41.43 71.96 41 70.93 41 69.87 c 0 -0.261 0.03 -0.521 0.08 -0.78 c 0.05 -0.25 0.13 -0.51 0.23 -0.75 s 0.22 -0.47 0.36 -0.69 c 0.15 -0.22 0.32 -0.42 0.5 -0.609 c 0.19 -0.181 0.39 -0.351 0.61 -0.49 c 0.22 -0.15 0.45 -0.27 0.69 -0.37 c 0.24 -0.1 0.49 -0.18 0.75 -0.229 c 0.51 -0.101 1.05 -0.101 1.56 0 c 0.26 0.05 0.51 0.13 0.75 0.229 c 0.239 0.101 0.47 0.22 0.689 0.37 c 0.22 0.14 0.42 0.31 0.61 0.49 c 0.18 0.189 0.35 0.39 0.5 0.609 c 0.14 0.221 0.26 0.45 0.359 0.69 c 0.101 0.24 0.181 0.5 0.23 0.75 c 0.05 0.26 0.08 0.52 0.08 0.78 c 0 1.06 -0.431 2.09 -1.17 2.83 C 47.08 73.45 46.05 73.87 45 73.87 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 90 C 20.187 90 0 69.813 0 45 S 20.187 0 45 0 s 45 20.187 45 45 S 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>
                        <input class="form-control task__name" name="name" id="name" type="text" placeholder="Посадити редиску">
                    </div>
                    <p class="error name__error"></p>
                    <div class="form-item">
                        <div class="d-flex justify-content-between">
                            <label for="desc">Детальніший опис завдання</label>
                            <svg class="desc__hint" style="position: relative; top: 5px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20" width="20" version="1.1" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 61.898 c -1.657 0 -3 -1.344 -3 -3 v -6.612 c 0 -0.825 0.34 -1.614 0.94 -2.182 l 9.553 -9.019 c 1.873 -1.946 2.903 -4.502 2.903 -7.206 v -0.357 c 0 -2.827 -1.115 -5.471 -3.141 -7.445 c -2.025 -1.974 -4.693 -3.031 -7.532 -2.947 c -5.58 0.144 -10.12 4.941 -10.12 10.694 c 0 1.657 -1.343 3 -3 3 s -3 -1.343 -3 -3 c 0 -8.978 7.162 -16.465 15.965 -16.692 c 4.467 -0.122 8.68 1.536 11.874 4.648 c 3.194 3.113 4.953 7.283 4.953 11.742 v 0.357 c 0 4.295 -1.649 8.356 -4.646 11.434 c -0.029 0.03 -0.06 0.06 -0.09 0.089 L 48 53.579 v 5.319 C 48 60.555 46.657 61.898 45 61.898 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 73.87 c -0.26 0 -0.52 -0.021 -0.78 -0.07 c -0.26 -0.06 -0.51 -0.13 -0.75 -0.23 c -0.24 -0.1 -0.47 -0.229 -0.69 -0.369 c -0.22 -0.15 -0.42 -0.311 -0.61 -0.5 C 41.43 71.96 41 70.93 41 69.87 c 0 -0.261 0.03 -0.521 0.08 -0.78 c 0.05 -0.25 0.13 -0.51 0.23 -0.75 s 0.22 -0.47 0.36 -0.69 c 0.15 -0.22 0.32 -0.42 0.5 -0.609 c 0.19 -0.181 0.39 -0.351 0.61 -0.49 c 0.22 -0.15 0.45 -0.27 0.69 -0.37 c 0.24 -0.1 0.49 -0.18 0.75 -0.229 c 0.51 -0.101 1.05 -0.101 1.56 0 c 0.26 0.05 0.51 0.13 0.75 0.229 c 0.239 0.101 0.47 0.22 0.689 0.37 c 0.22 0.14 0.42 0.31 0.61 0.49 c 0.18 0.189 0.35 0.39 0.5 0.609 c 0.14 0.221 0.26 0.45 0.359 0.69 c 0.101 0.24 0.181 0.5 0.23 0.75 c 0.05 0.26 0.08 0.52 0.08 0.78 c 0 1.06 -0.431 2.09 -1.17 2.83 C 47.08 73.45 46.05 73.87 45 73.87 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 90 C 20.187 90 0 69.813 0 45 S 20.187 0 45 0 s 45 20.187 45 45 S 69.813 90 45 90 z M 45 6 C 23.495 6 6 23.495 6 45 s 17.495 39 39 39 s 39 -17.495 39 -39 S 66.505 6 45 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>
                        <textarea class="form-control task__desc" name="desc" id="desc" maxlength="100" placeholder="Не забуди піти до діда взяти якоїсь лопати та й граблі шоби шось почати" rows="3"></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit"><p>Створити</p></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script defer>

// ON LOAD OF THE PAGE
window.addEventListener('load', function () {

    let whole__content = document.querySelector('.whole__content')
    let loader__parent = document.querySelector('.loader__parent')

    if(!(document.querySelector('.tasks__flex').scrollWidth > document.querySelector('.tasks__flex').clientWidth))
    {
        document.querySelector('.tasks__flex').style.height = '234px'
    }

    // ADDING SMOOTH SCROLLING
        let scrollBlocks = document.querySelectorAll('.days__flex, .tasks__flex');

        scrollBlocks.forEach(function(scrollBlock) {
            handleSmoothScroll(scrollBlock)
        });

    // HANDLING TASK__BLOCKS` VIEW
        let flex__blocks = document.querySelectorAll(".tasks__flex__block")
        flex__blocks.forEach(flex__block => {
            // FLEX BLOCK`S ELEMENTS
            let title = flex__block.querySelector('.title')
            let flex = flex__block.querySelector('.flex')
            let image = flex__block.querySelector('.image')
            // IF BLOCK HAS IMAGE (NOT UNFINISHED) - FIX THE IMAGE
            if(image && image.querySelector('img'))
            {
                fixImage(image.querySelector('img'))
                // FLEX BLOCK`S ORIGINAL HEIGHT
                flex.style.overflow = 'visible'
                let flex__height = flex.offsetHeight
                // AFTER DECLARING FLEX HEIGHT HIDE IT
                flex.style.overflow = 'hidden'
                flex.style.maxHeight = '154px'
                // SET IMAGE TO DEFAULT POSITION
                image.style.bottom = (flex.offsetHeight+title.offsetHeight+25)+'px'
                // TIMEOUT TO SET THE FLEX BLOCK TO POSITION RELATIVE
                let positionRelativeTimeOut = null
                // ON HOVER WE SHOW WHATS INSIDE THE FLEX BLOCK
                flex__block.addEventListener('mouseenter', function () {
                    if(!isScrolling)
                    {
                        if(!isElementFullyVisible(document.querySelector('.tasks__flex'), flex__block))
                        {
                            scrollElementIntoView(document.querySelector('.tasks__flex'), flex__block)
                        }
                        clearTimeout(positionRelativeTimeOut)
                        flex__block.style.position = 'absolute'
                        flex__block.style.zIndex = '40'
                        flex.style.maxHeight = flex__height+'px'
                        image.style.bottom = (flex__height+title.offsetHeight+25)+'px'
                        flex__block.style.marginLeft = `-${document.querySelector('.tasks__flex').scrollLeft}px`
                    }
                });
                // ON LEAVE WE SET FLEX BLOCK TO THE DEFAULT POSITION
                flex__block.addEventListener('mouseleave', function () {
                    flex.style.maxHeight = '154px'
                    positionRelativeTimeOut = setTimeout(() => {
                        flex__block.style.position = 'relative'
                        flex__block.style.marginLeft = '0'
                        positionRelativeTimeOut = null
                        flex__block.style.zIndex = '20'
                        image.style.bottom = (flex.offsetHeight+title.offsetHeight+25)+'px'
                    }, 300);
                });
                // CHECK IF SCROLLING WHILE HOVER
                flex__block.addEventListener('wheel', function () {
                    flex.style.transition = '0'
                    image.style.transition = '0'
                    flex.style.maxHeight = '154px'
                    image.style.bottom = (154+title.offsetHeight+25)+'px'
                    positionRelativeTimeOut = setTimeout(() => {
                        flex__block.style.position = 'relative'
                        flex__block.style.marginLeft = '0'
                        positionRelativeTimeOut = null
                        flex.style.transition = '0.3s'
                        image.style.transition = '0.3s'
                    }, 0);
                })
            }
        });

    // HANDLING DAY__BLOCKS` VIEW
        let days__flex__blocks = document.querySelectorAll(".days__flex__block")
        days__flex__blocks.forEach(flex__block => {
            // FLEX BLOCK`S ELEMENTS
            let title = flex__block.querySelector('.title')
            let flex = flex__block.querySelector('.flex')
            // BEFORE SHOWING ELEMENT
            let title__p = title.querySelector('p')
            if(!isWithinFiveDays(title__p.innerText))
            {
                flex__block.parentElement.remove()
            } else
            {
                title__p.innerText = new Date(title__p.innerText).toLocaleDateString('uk-UA', { day: 'numeric', month: 'long' })
                let title__h1 = title.querySelector('h1')
                title__h1.innerText = getDayName(title__h1.innerText)
                // FLEX BLOCK`S ORIGINAL HEIGHT
                flex.style.overflow = 'visible'
                let flex__height = flex.offsetHeight
                let flex__top = flex__height-154+'px'
                // AFTER DECLARING FLEX HEIGHT HIDE IT
                flex.style.overflow = 'hidden'
                flex.style.maxHeight = '154px'
                // SHOW FULL CONTENT ON HOVER
                    // TIMEOUT TO SET THE FLEX BLOCK TO POSITION RELATIVE
                    let positionRelativeTimeOut = null
                    // ON HOVER WE SHOW WHATS INSIDE THE FLEX BLOCK
                    flex__block.addEventListener('mouseenter', function () {
                        clearTimeout(positionRelativeTimeOut)
                        flex__block.style.position = 'absolute'
                        flex.style.maxHeight = flex__height+'px'
                    });
                    // ON LEAVE WE SET FLEX BLOCK TO THE DEFAULT POSITION
                    flex__block.addEventListener('mouseleave', function () {
                        flex.style.maxHeight = '154px'
                        positionRelativeTimeOut = setTimeout(() => {
                            flex__block.style.position = 'relative'
                            positionRelativeTimeOut = null
                        }, 300);
                    });
            }

        });

    // HANDLING MODAL
        let task__creates = document.querySelectorAll('.tasks__flex__block .task__create')
        task__creates.forEach(task__create => {
            task__create.addEventListener('click', function (e) {
                // GET GOAL ID OF TASK WE WANT CREATE IN
                document.querySelector('.task__create__modal .task__goal_id').value = task__create.attributes.goal_id.value
                task__create__modal.classList.add('d-flex')
                task__create__modal.classList.remove('d-none')
                task__create__modal.style.animation = 'appear__opacity 0.5s forwards'
                task__create__modal.querySelector('.task__create').style.animation = 'appear__bottom 0.5s forwards'
            })
        });
        let task__create__modal = document.querySelector('.task__create__modal')
        task__create__modal.addEventListener('click', function (e) {
            if(e.target.classList.contains('task__create__modal'))
            {
                task__create__modal.style.animation = 'disappear__opacity 0.5s forwards'
                task__create__modal.querySelector('.task__create').style.animation = 'disappear__bottom 0.5s forwards'
                setTimeout(() => {
                    task__create__modal.classList.remove('d-flex')
                    task__create__modal.classList.add('d-none')
                }, 500);
            }
        })
        let task__form = document.querySelector('.task__create__modal form')
        task__form.addEventListener('submit', function (e) {
            if(!task__create__validation())
            {
                e.preventDefault()
            }
        })
        function task__create__validation()
        {
            let task__priority = document.querySelector('.task__create__modal .task__priority')
            let task__name = document.querySelector('.task__create__modal .task__name')
            let task__priority__error = document.querySelector('.task__create__modal .priority__error')
            let task__name__error = document.querySelector('.task__create__modal .name__error')
            if(!task__priority.value)
            {
                task__priority__error.innerHTML = `виберіть рівень приорітету`
                return false
            } else
            {
                task__priority__error.innerHTML = ``
            }
            if(task__name.value.length < 5)
            {
                task__name__error.innerHTML = `впишіть суть завдання`
                return false
            } else
            {
                task__name__error.innerHTML = ``
            }
            return true
        }
        let task__create__submit = document.querySelector('.task__create .form-submit button')
        task__create__submit.addEventListener('mouseenter', function () {
            if(!task__create__validation())
            {
                task__create__submit.setAttribute('disabled', '')
            } else
            {
                task__create__submit.removeAttribute('disabled')
            }
        })

        tippy('.task__create__modal .priority__parent .flex', {
            placement: 'right',
            content: 'Виберіть',
            sticky: true,
            interactive: true,
            hideOnClick: false,
            delay: [0, 1000000000],
        })

        tippy('.task__create__modal .priority__hint', {
            placement: 'top',
            content: `Рівень пріоритету відображає важливість цього завдання для найшвидшого досягнення вашої мети. Рекомендуємо розглянути справжню вартість цього завдання для досягнення вашої цілі і наскільки воно вам допоможе.`,
            hideOnClick: false,
        })
        tippy('.task__create__modal .name__hint', {
            placement: 'top',
            content: `Короткий опис суті вашого завдання: наприклад, вам потрібно прибрати в кімнаті (позбутися непотрібних речей та прибрати підлогу). Якщо ви хочете додати більше деталей, скористайтеся полем нижче.`,
            hideOnClick: false,
        })
        tippy('.task__create__modal .desc__hint', {
            placement: 'top',
            content: `Введіть більш детальніший опис завдання (необов'язково), включаючи важливі деталі та кроки, які потрібно виконати.`,
            hideOnClick: false,
        })

        let priority__flex = document.querySelector('.priority__parent .flex')
        priority__flex._tippy.show()
        let priorities = document.querySelectorAll('.priority')
        let selected = undefined
        let priority_levels = [
            "Можна зробити пізніше",
            "Бажано виконати",
            "Корисно зробити",
            "Потрібно зробити",
            "Надзвичайно важливо"
        ]
        priorities.forEach((priority, index) => {
            priority.addEventListener('click', function () {
                priority.classList.add('selected')
                selected = index
                document.querySelector('.task__priority').value = index+1
            })
            priority.addEventListener('mouseenter', function () {
                priority__flex._tippy.setContent(priority_levels[index])
                priorities.forEach(pp => {
                    pp.innerHTML = `
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 69.671 88.046 c -0.808 0 -1.62 -0.195 -2.37 -0.59 L 45 75.732 L 22.7 87.456 c -1.727 0.907 -3.779 0.757 -5.356 -0.388 c -1.577 -1.146 -2.352 -3.052 -2.023 -4.972 l 4.259 -24.832 L 1.539 39.678 c -1.396 -1.361 -1.889 -3.358 -1.287 -5.213 c 0.603 -1.854 2.176 -3.181 4.105 -3.461 l 24.932 -3.622 L 40.44 4.79 C 41.303 3.041 43.05 1.955 45 1.955 c 0 0 0 0 0.001 0 c 1.949 0 3.696 1.086 4.559 2.834 l 11.15 22.592 l 24.932 3.623 c 1.93 0.28 3.503 1.606 4.105 3.461 c 0.603 1.854 0.109 3.851 -1.287 5.213 L 70.419 57.264 l 4.26 24.832 c 0.329 1.921 -0.446 3.827 -2.023 4.972 C 71.764 87.717 70.721 88.046 69.671 88.046 z M 7.055 36.676 l 17.058 16.628 c 1.198 1.167 1.746 2.85 1.462 4.502 l -4.027 23.479 l 21.086 -11.086 c 1.481 -0.779 3.25 -0.779 4.732 0 l 21.085 11.086 l -4.027 -23.48 c -0.283 -1.649 0.264 -3.333 1.463 -4.501 l 17.058 -16.628 L 59.372 33.25 c -1.658 -0.242 -3.089 -1.282 -3.829 -2.783 L 45 9.106 L 34.457 30.468 c -0.74 1.5 -2.171 2.54 -3.827 2.782 L 7.055 36.676 z M 84.779 36.942 h 0.011 H 84.779 z M 44.18 7.444 c 0 0 0 0.001 0.001 0.002 L 44.18 7.444 C 44.18 7.445 44.18 7.445 44.18 7.444 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    `
                })
                for (let i = 0; i <= index; i++) {
                    priorities[i].innerHTML = `
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c -1.398 0 -2.649 0.778 -3.268 2.031 L 29.959 27.911 c -0.099 0.2 -0.29 0.338 -0.51 0.37 L 3.122 32.107 c -1.383 0.201 -2.509 1.151 -2.941 2.48 c -0.432 1.329 -0.079 2.76 0.922 3.736 l 19.049 18.569 c 0.16 0.156 0.233 0.38 0.195 0.599 L 15.85 83.71 c -0.236 1.377 0.319 2.743 1.449 3.564 c 1.129 0.821 2.6 0.927 3.839 0.279 l 23.547 -12.381 c 0.098 -0.051 0.206 -0.077 0.314 -0.077 C 51.721 53.905 50.301 28.878 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,200,80); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c 1.398 0 2.649 0.778 3.268 2.031 l 11.773 23.856 c 0.099 0.2 0.29 0.338 0.51 0.37 l 26.326 3.826 c 1.383 0.201 2.509 1.151 2.941 2.48 c 0.432 1.329 0.079 2.76 -0.922 3.736 L 69.847 56.892 c -0.16 0.156 -0.233 0.38 -0.195 0.599 L 74.15 83.71 c 0.236 1.377 -0.319 2.743 -1.449 3.564 c -1.129 0.821 -2.6 0.927 -3.839 0.279 L 45.315 75.172 c -0.098 -0.051 -0.206 -0.077 -0.314 -0.077 C 37.08 54.593 38.849 29.395 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,220,100); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    `
                }
            })
            priority.addEventListener('mouseleave', function () {
                priorities.forEach(pp => {
                    pp.innerHTML = `
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 69.671 88.046 c -0.808 0 -1.62 -0.195 -2.37 -0.59 L 45 75.732 L 22.7 87.456 c -1.727 0.907 -3.779 0.757 -5.356 -0.388 c -1.577 -1.146 -2.352 -3.052 -2.023 -4.972 l 4.259 -24.832 L 1.539 39.678 c -1.396 -1.361 -1.889 -3.358 -1.287 -5.213 c 0.603 -1.854 2.176 -3.181 4.105 -3.461 l 24.932 -3.622 L 40.44 4.79 C 41.303 3.041 43.05 1.955 45 1.955 c 0 0 0 0 0.001 0 c 1.949 0 3.696 1.086 4.559 2.834 l 11.15 22.592 l 24.932 3.623 c 1.93 0.28 3.503 1.606 4.105 3.461 c 0.603 1.854 0.109 3.851 -1.287 5.213 L 70.419 57.264 l 4.26 24.832 c 0.329 1.921 -0.446 3.827 -2.023 4.972 C 71.764 87.717 70.721 88.046 69.671 88.046 z M 7.055 36.676 l 17.058 16.628 c 1.198 1.167 1.746 2.85 1.462 4.502 l -4.027 23.479 l 21.086 -11.086 c 1.481 -0.779 3.25 -0.779 4.732 0 l 21.085 11.086 l -4.027 -23.48 c -0.283 -1.649 0.264 -3.333 1.463 -4.501 l 17.058 -16.628 L 59.372 33.25 c -1.658 -0.242 -3.089 -1.282 -3.829 -2.783 L 45 9.106 L 34.457 30.468 c -0.74 1.5 -2.171 2.54 -3.827 2.782 L 7.055 36.676 z M 84.779 36.942 h 0.011 H 84.779 z M 44.18 7.444 c 0 0 0 0.001 0.001 0.002 L 44.18 7.444 C 44.18 7.445 44.18 7.445 44.18 7.444 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    `
                });
                if(selected || selected === 0)
                {
                    priority__flex._tippy.setContent(priority_levels[selected])
                    for (let i = 0; i <= selected; i++) {
                        priorities[i].innerHTML = `
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c -1.398 0 -2.649 0.778 -3.268 2.031 L 29.959 27.911 c -0.099 0.2 -0.29 0.338 -0.51 0.37 L 3.122 32.107 c -1.383 0.201 -2.509 1.151 -2.941 2.48 c -0.432 1.329 -0.079 2.76 0.922 3.736 l 19.049 18.569 c 0.16 0.156 0.233 0.38 0.195 0.599 L 15.85 83.71 c -0.236 1.377 0.319 2.743 1.449 3.564 c 1.129 0.821 2.6 0.927 3.839 0.279 l 23.547 -12.381 c 0.098 -0.051 0.206 -0.077 0.314 -0.077 C 51.721 53.905 50.301 28.878 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,200,80); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c 1.398 0 2.649 0.778 3.268 2.031 l 11.773 23.856 c 0.099 0.2 0.29 0.338 0.51 0.37 l 26.326 3.826 c 1.383 0.201 2.509 1.151 2.941 2.48 c 0.432 1.329 0.079 2.76 -0.922 3.736 L 69.847 56.892 c -0.16 0.156 -0.233 0.38 -0.195 0.599 L 74.15 83.71 c 0.236 1.377 -0.319 2.743 -1.449 3.564 c -1.129 0.821 -2.6 0.927 -3.839 0.279 L 45.315 75.172 c -0.098 -0.051 -0.206 -0.077 -0.314 -0.077 C 37.08 54.593 38.849 29.395 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,220,100); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        `
                    }
                } else
                {
                    priority__flex._tippy.setContent('Виберіть')
                }
            })
        });

    // ON LOAD AND HANDLE OF ELEMENTS SHOW THEM
    loader__parent.style.display = 'none'
    whole__content.style.animation = 'appear__opacity 0.5s forwards'

})

// GET DAY NAME
function getDayName(dayNumber) {
    const date = new Date();
    const currentDay = date.getDay()
    const offset = (currentDay === 0 ? 7 : currentDay) - 1
    date.setDate(date.getDate() - offset + (dayNumber - 1));
    return date.toLocaleDateString('uk-UA', { weekday: 'long' });
}
// IS IT TODAY OR 4 DAYS LATER
function isWithinFiveDays(dateString) {
    let givenDate = new Date(dateString);
    let today = new Date();
    today.setHours(0, 0, 0, 0); // Reset to midnight for accurate comparison

    let fiveDaysLater = new Date(today);
    fiveDaysLater.setDate(today.getDate() + 5); // Calculate date 5 days later

    return givenDate >= today && givenDate <= fiveDaysLater;
}
// FIX IMAGES` VIEW
    function fixImage(element)
    {
        let width = element.naturalWidth;
        let height = element.naturalHeight;
        if(width > height)
        {
            element.style.cssText = `height: 239px;`
        } else
        {
            element.style.cssText = `width: 239px;`
        }
    }

// SMOOTH SCROLLING FUNCTIONS
    let isScrolling = false

    function isElementFullyVisible(container, element) {
        const containerRect = container.getBoundingClientRect();
        const elementRect = element.getBoundingClientRect();

        const fullyVisibleVertically = elementRect.top >= containerRect.top && elementRect.bottom <= containerRect.bottom;
        const fullyVisibleHorizontally = elementRect.left >= containerRect.left && elementRect.right <= containerRect.right;

        return fullyVisibleVertically && fullyVisibleHorizontally;
    }

    function scrollElementIntoView(container, element) {
        const containerRect = container.getBoundingClientRect();
        const elementRect = element.getBoundingClientRect();

        const containerScrollTop = container.scrollTop;
        const containerScrollLeft = container.scrollLeft;

        document.querySelectorAll('.tasks__flex__block').forEach(flex__block => {
            flex__block.style.position = 'relative'
            flex__block.style.marginLeft = '0'
        });

        if (elementRect.left < containerRect.left) {
            container.scrollLeft = containerScrollLeft - (containerRect.left - elementRect.left);
        } else if (elementRect.right > containerRect.right) {
            container.scrollLeft = containerScrollLeft + (elementRect.right - containerRect.right);
        }
    }

    function handleSmoothScroll(scrollBlock) {
        let targetScrollLeft = 0
        let currentScrollLeft = 0

        function smoothScroll() {
            if (isScrolling) {


                document.querySelectorAll('.tasks__flex__block').forEach(flex__block => {
                    flex__block.querySelector('.flex').style.transition = '0'
                    if(flex__block.querySelector('.image'))
                    {
                        flex__block.querySelector('.image').style.transition = '0'
                        flex__block.querySelector('.image').style.bottom = (154+flex__block.querySelector('.title').offsetHeight+25)+'px'
                    }
                    flex__block.querySelector('.flex').style.maxHeight = '154px'
                    flex__block.style.position = 'relative'
                    flex__block.style.marginLeft = '0'
                    flex__block.querySelector('.flex').style.transition = '0.3s'
                    if(flex__block.querySelector('.image'))
                    {
                        flex__block.querySelector('.image').style.transition = '0.3s'
                    }
                });

                const scrollDiff = targetScrollLeft - currentScrollLeft

                if (Math.abs(scrollDiff) < 1) {
                    isScrolling = false
                    return
                }

                currentScrollLeft += scrollDiff * 0.1
                scrollBlock.scrollLeft = currentScrollLeft

                requestAnimationFrame(smoothScroll)
            }
        }

        scrollBlock.addEventListener('wheel', function(e) {
            e.preventDefault()

            targetScrollLeft += e.deltaY

            targetScrollLeft = Math.max(0, Math.min(targetScrollLeft, scrollBlock.scrollWidth - scrollBlock.clientWidth))

            if (!isScrolling) {
                isScrolling = true
                currentScrollLeft = scrollBlock.scrollLeft
                smoothScroll()
            }
        })
    }

</script>

@endsection
